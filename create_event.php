
<?php 
    include_once('dbFunction.php');  
    include_once('models/EventType.php');  
    include_once('models/Event.php'); 

     $funObj = new dbFunction();  

      $funObj->isAdmin();
       
     $event = new Event();  
     $event_type = new EventType();  

     $event_types = $event_type->getEventTypes();
    
      if(isset($_POST['create_event'])){  

      $event_type_id = $_POST['event_type_id'];  
      $start_date = $_POST['start_date'];  
      $end_date = $_POST['end_date'];
      $name = $_POST['name'];  
      $venue = $_POST['venue'];  
      $description = $_POST['description'];  
           
        $new_event = $event->createEvent($event_type_id, $start_date,$end_date,$name,$venue,$description);

      if($new_event){  

         $_SESSION['success_message'] = "Event created successfully!"; 

          $funObj->redirect('list_events.php');

        }else{  

         $_SESSION['error_message'] = "Attempt to create event failed!"; 

        }  
           
       
      }  
    include ('includes/admin_header.php');
?>
    <div class="container">  

      <div class="card">
  <div class="card-header">
    Add Event
  </div>
  <div class="card-body">
    <div class="col-md-12">
   <form method="post" action autocomplete="off">
      <div class="row">
        <div class="form-group col-md-12">
          <label for="inputfirst_name4">Event Type</label>
          <select class="form-control" name="event_type_id[]" id="event_type_id" multiple>
            <?php
              while($row = mysqli_fetch_array($event_types)){
                echo "<option value='".$row['id']."'>" . $row['name'] . "</option>";
              }
            ?>
          </select>
        </div>
      </div>

        <div class="row">
        
        <div class="form-group col-md-6">
          <label for="inputfirst_name4">Event Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4">
        </div>

         <div class="form-group col-md-6">
          <label for="inputEmail4">Venue</label>
          <textarea name="venue" class="form-control" placeholder="Enter event venue"></textarea>
        </div>

      </div>

        <div class="row">
        
        <div class="form-group col-md-6">
          <label for="inputfirst_name4">Start Date</label>
          <input type="text" name="start_date" class="form-control" id="inputEmail4" data-toggle="datepicker">
        </div>

         <div class="form-group col-md-6">
          <label for="inputEmail4">End Date</label>
          <input type="text" name="end_date"  class="form-control" placeholder="Enter event venue" data-toggle="datepicker">
        </div>

      </div>

       <div class="row">
        <div class="form-group col-md-12">
          <label for="inputfirst_name4">Description</label>
          <textarea name="description" class="form-control" placeholder="Enter event description"></textarea>
        </div>

      </div>


      <button type="submit" name="create_event" class="btn btn-primary">Submit</button>

      </form> 
      </div>
  </div>
</div>

  </div>  
 <?php
   include ('includes/admin_footer.php');
?> 