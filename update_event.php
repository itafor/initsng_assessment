
<?php 
    include_once('dbFunction.php');  
    include_once('models/EventType.php');  
    $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
       
    $eventType = new EventType();  
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
        $name = $_POST['name'];  
        $description = $_POST['description'];  
        $id = $_POST['EventTypeId'];

         $sql = "UPDATE event_types SET name='$name', description='$description' WHERE id='$id'";
          $result = $conn->query($sql);
          if($result){

            $_SESSION['success_message'] = "Event Type Updated successfully!";  

            $funObj->redirect('list_event_types.php');
        }  
           echo "Error: " . $sql . "<br>" . $conn->error;  
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
    <div class="col-md-6">
   <form method="post" action="">
        <input type="hidden" name="EventId" value="<?php echo $id; ?>">

          <div class="row">
        <div class="form-group col-md-12">
          <label for="inputfirst_name4">Event Type</label>
          <select class="form-control" name="event_type_id[]" id="event_type_idee" multiple>
                       <?php
                       
              // $result = array_intersect($array1, $array2);

          while($associated_event_row = mysqli_fetch_array($assoc_event_types)){
            
              while($row = mysqli_fetch_array($event_types)){

            ?>
<option value="<?=$row['id']; ?>" <?php if($row['id'] === $associated_event_row['event_type_id']) echo 'selected="selected"';?> > <?php echo $row['name'];?> </option>

<?php
              }


              }
            ?>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-12">
          <label for="inputfirst_name4">Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4" value="<?php echo $user_data['name']; ?>">
        </div>
      </div>

        <div class="row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Description</label>
          <textarea name="description" class="form-control" placeholder="Enter event type description" ><?php echo $user_data['description']; ?></textarea>
        </div>
      </div>

      <button type="submit" name="updateEevent" class="btn btn-primary pull-left">Update</button>
      
        <a href="list_event_types.php" class="btn btn-warning pull-right">
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