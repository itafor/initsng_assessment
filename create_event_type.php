
<?php 
    include_once('dbFunction.php');  
    include_once('models/EventType.php');  
       
    $eventType = new EventType();  
     $funObj = new dbFunction();  

      $funObj->isAdmin();
    
      if(isset($_POST['create_eveent_type'])){  
      $name = $_POST['name'];  
      $description = $_POST['description'];  
           
        $new_even_type = $eventType->createEventType($name,$description);  
              if($new_even_type){  

         $_SESSION['message'] = "Event Type created successfully!"; 

          $funObj->redirect('list_event_types.php');

              }else{  
                  echo "<script>alert('Attempt to create event type failed')</script>";  
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
        <div class="form-group col-md-12">
          <label for="inputfirst_name4">Event Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4">
        </div>
      </div>

        <div class="row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Description</label>
          <textarea name="description" class="form-control" placeholder="Enter event type description"></textarea>
        </div>
      </div>

      <button type="submit" name="create_eveent_type" class="btn btn-primary">Submit</button>

      </form> 
      </div>
  </div>
</div>

  </div>  
 <?php
   include ('includes/admin_footer.php');
?> 