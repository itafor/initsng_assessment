
<?php 
    include_once('dbFunction.php');  
    include_once('models/EventType.php');  
    $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
       
    $eventType = new EventType();  
     $funObj = new dbFunction(); 

      $funObj->isAdmin();
  
    if(isset($_GET['id'])){  
        
          $id = $_GET['id'];
         $sql = "SELECT * FROM event_types WHERE id='$id'";
          $result = $conn->query($sql);
          if($result->num_rows ==1){
             $user_data = mysqli_fetch_array($result);
        }  
          }

      if(isset($_POST['update_eveent_type'])){  
        $name = $_POST['name'];  
        $description = $_POST['description'];  
        $id = $_POST['EventTypeId'];

         $sql = "UPDATE event_types SET name='$name', description='$description' WHERE id='$id'";
          $result = $conn->query($sql);
          if($result){

            $_SESSION['message'] = "Event Type Updated successfully!";  

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
   Update Event Type
</h3>       
  </div>

  <div class="card-body">
    <div class="wrapper">
        <div class="container-fluid">
    <div class="col-md-6">
   <form method="post" action="">
        <input type="hidden" name="EventTypeId" value="<?php echo $id; ?>">

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

      <button type="submit" name="update_eveent_type" class="btn btn-primary pull-left">Update</button>
      
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