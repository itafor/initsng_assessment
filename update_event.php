
<?php 
    include_once('dbFunction.php');  
    include_once('models/EventType.php');  
    include_once('models/Event.php');  
    $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
       
    $eventType = new EventType();  
    $event = new Event();  
    $funObj = new dbFunction(); 

     $event_types = $eventType->getEventTypes();

      $funObj->isAdmin();
  
    if(isset($_GET['id'])){  
          $id = $_GET['id'];
       $assoc_event_types = $funObj->associatedEventTypes($id);
         $sql = "SELECT * FROM events WHERE id='$id'";
          $result = $conn->query($sql);
          if($result->num_rows ==1){
             $user_data = mysqli_fetch_array($result);
        }  
          }

     if(isset($_POST['updateEevent'])){  

      $event_type_id = isset($_POST['event_type_id']) ? $_POST['event_type_id'] : null;  
      $start_date = $_POST['start_date'];  
      $end_date = $_POST['end_date'];
      $name = $_POST['name'];  
      $venue = $_POST['venue'];  
      $description = $_POST['description'];  
      $eventId = $_POST['eventId'];  
           
        $edit_event = $event->updateEvent($event_type_id, $start_date,$end_date,$name,$venue,$description,$eventId);

      if($edit_event){  

         $_SESSION['success_message'] = "Event Updated successfully!"; 

          $funObj->redirect('list_events.php');

        }else{  

         $_SESSION['error_message'] = "Attempt to update event failed!"; 

        }  
           
       
      }

    include ('includes/admin_header.php');
?>
    <div class="container">  

      <div class="card">
  <div class="card-header">
<h3>
   Update Event
</h3>       
  </div>

  <div class="card-body">
    <div class="wrapper">
        <div class="container-fluid">
    <div class="col-md-12">
   <form method="post" action="">
        <input type="hidden" name="eventId" value="<?php echo $id; ?>">
     <div class="row">
        
        <div class="form-group col-md-6">
          <label for="inputfirst_name4">Event Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4" value="<?php echo $user_data['name']; ?>">
        </div>

         <div class="form-group col-md-6">
          <label for="inputEmail4">Venue</label>
          <textarea name="venue" class="form-control" placeholder="Enter event venue"><?php echo $user_data['venue']; ?></textarea>
        </div>

      </div>

        <div class="row">
        
        <div class="form-group col-md-6">
          <label for="inputfirst_name4">Start Date</label>
          <input type="text" name="start_date" class="form-control" id="inputEmail4" data-toggle="datepicker" value="<?php echo $user_data['start_date']; ?>">
        </div>

         <div class="form-group col-md-6">
          <label for="inputEmail4">End Date</label>
          <input type="text" name="end_date"  class="form-control" placeholder="Enter event venue" data-toggle="datepicker" value="<?php echo $user_data['end_date']; ?>">
        </div>

      </div>

        <div class="row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Description</label>
          <textarea name="description" class="form-control" placeholder="Enter event type description" ><?php echo $user_data['description']; ?></textarea>
        </div>
      </div>
<h3>Event Type</h3>
                <div class="row">
                   <?php
         while($associated_event_row = mysqli_fetch_array($assoc_event_types)){

            ?>
<span style="font-size: 16px; padding:5px;"> <?php echo $funObj->fetchEventTypeValue($associated_event_row['event_type_id'])['name'];?> <?php echo "<a class='text-danger' href='del_assoc_event-type.php?assc_event_type_id=". $associated_event_row['id'] ."' title='Delete Record' data-toggle='tooltip'><i class='' style='font-size: 10px;margin-left: -3px; text-decoration: none;'>X</i></a>";?> </span>

      <?php
              }
            ?>
            <br>
        <div class="form-group col-md-12">
          <label for="inputfirst_name4">Event Type</label><br>
          <select class="form-control" name="event_type_id[]" id="event_type_id" multiple>
                       <?php
              while($row = mysqli_fetch_array($event_types)){

            ?>
<option value="<?=$row['id']; ?>"><?php echo $row['name'] ?> </option>

            <?php
          }
  ?>
          </select>
        </div>
          
      </div>

      <button type="submit" name="updateEevent" class="btn btn-primary pull-left">Update</button>
      
        <a href="list_events.php" class="btn btn-warning pull-right">
      Cancel
      </a>
      </form> 

      </div>
  </div>
</div>
  </div>
</div>

  </div>  
 <?php
   include ('includes/admin_footer.php');
?> 