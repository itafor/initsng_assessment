
<?php 
    include_once('dbFunction.php');  
    include_once('models/EventType.php');  
    include_once('models/Event.php'); 

     $funObj = new dbFunction();  

      $funObj->isAdmin();
       
     $event = new Event();  
     $event_type = new EventType();  


     $event_types = $event_type->getEventTypes();
    
      if(isset($_POST['create_eveent'])){  

      $event_type_id = $_POST['event_type_id'];  
      $start_date = $_POST['start_date'];  
      $end_date = $_POST['end_date'];
      $name = $_POST['name'];  
      $venue = $_POST['venue'];  
      $description = $_POST['description'];  
           
        $new_event = $event->createEvent($event_type_id, $start_date,$end_date,$name,$venue,$description);

      if($new_event){  

         $_SESSION['message'] = "Event created successfully!"; 

          $funObj->redirect('list_event_types.php');

        }else{  

         $_SESSION['message'] = "Attempt to create event failed!"; 

        }  
           
       
      }  
    include ('includes/admin_header.php');
?>
    <div class="container">  

      <div class="card">
  <div class="card-header">
    Add Event Type
  </div>
  <div class="card-body">
    <div class="col-md-6">
   <form method="post" action="">
      <div class="row">
        <div class="form-group col-md-6">
          <label for="inputfirst_name4">Event Type</label>
          <select class="form-control" name="event_type_id">
            <option value="">Select event type</option>
            <?php
              while($row = mysqli_fetch_array($event_types)){
                echo "<option value='".$row['id']."'>" . $row['name'] . "</option>";
              }
            ?>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="inputfirst_name4">Event Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4">
        </div>

      </div>

        <div class="row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Description</label>
          <textarea name="description" class="form-control" placeholder="Enter event type description"></textarea>
        </div>
      </div>

      <button type="submit" name="create_eveent" class="btn btn-primary">Submit</button>

      </form> 
      </div>
  </div>
</div>

  </div>  
 <?php
   include ('includes/admin_footer.php');
?> 