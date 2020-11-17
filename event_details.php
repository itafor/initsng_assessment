<?php  
    include_once('dbFunction.php'); 
    include_once('models/Event.php');  

    $event = new Event();  
    $funObj = new dbFunction();  


    if(isset($_GET['id'])){  
          $id = $_GET['id'];
        
    $assoc_event_type= $funObj->associatedEventTypes($id);
    $associatedEventTypeids=array();
    while($row = mysqli_fetch_array($assoc_event_type)){

      $associatedEventTypeids[]= $funObj->fetchEventTypeValue($row['event_type_id'])['name']; 
    }
       



         $sql = "SELECT * FROM events WHERE id='$id'";
          $result = $conn->query($sql);
          if($result->num_rows ==1){
             $event_data = mysqli_fetch_array($result);
        }  
          }

          if(isset($_POST['registerEvent'])){  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $first_name = $_POST['first_name'];  
        $last_name = $_POST['last_name'];  
        $phone = $_POST['phone'];  
        $confirmPassword = $_POST['confirm_password'];
        $eventId = $_POST['eventId'];  

          if (in_array(' Premium-only Webinar', $associatedEventTypeids)) {
      $_SESSION['error_message'] = "This is a Premium-only event.!"."
<a href='about_premium_event.php'>Click here for more details</a>
      "; 
   }else{
       


        if($password == $confirmPassword){  
            $email = $funObj->isUserExist($emailid);  
            if(!$email){  
                $register = $event->registerForEvent($emailid, $password,$first_name,$last_name,$phone,$eventId);  
                if($register){  
         $_SESSION['success_message'] = "You have successfully registered for this event!"; 
                }else{  
         $_SESSION['error_message'] = "Event Registration Not Successful!"; 
                }  
            } else {  
         $_SESSION['error_message'] = "Email Already Exist!"; 
            }  
        } else {  
         $_SESSION['error_message'] = "Password Not Match!"; 

        }  
    }
}
  include ('includes/header.php'); 
?>
    
      <!-- plant -->
      <div id="plant" class="plants" style="margin-top: 20px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>INIT EVENTS PLATFORM</h2>
                     <span><?php echo $event_data['name']; ?></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="card" style="width: 100%;">
  <img src="assets/images/plant1.jpg" class="card-img-top" alt="img" style="height: 400px;" />
  <div class="card-body">
    <h5 class="card-title">About this Event</h5>
    <p class="card-text"><?php echo $event_data['description']; ?></p>
<hr>
    <h1>Register for this event</h1>
    <small>Continue as guest or <a href="login.php">LOGIN</a> for a faster experience.</small>
    <h4>Contact Information</h4>
<form method="post" action="" class="all_forms" id="auth_form" style="background: #fff;">
  <div class="row">
   <input type="hidden" name="eventId" value="<?php echo $event_data['id']; ?>">
    <div class="form-group col-md-6">
      <label for="inputfirst_name4">First Name</label>
      <input type="text" name="first_name" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputlast_name4">last_name</label>
      <input type="text" name="last_name" class="form-control" id="inputPassword4">
    </div>
  </div>

    <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="emailid" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputphone">Phone Number</label>
      <input type="text" name="phone" class="form-control" id="inputphone">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputpassword">password</label>
      <input type="password" name="password" class="form-control" id="inputpassword">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Confirm Password</label>
     <input type="password" name="confirm_password" class="form-control">
    </div>
  </div>
 
  <button type="submit" name="registerEvent" class="btn btn-primary">REGISTER</button>
  
</form>
  </div>
</div>
               </div>
               <div class="col-md-4">

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Event Date and Date</h5>
        <p class="card-text text-danger"><?php echo date("F j, Y, g:i a", strtotime($event_data['start_date'])) ?><br> <span class="text-dark" style="margin-left: 60px;">TO</span><br> <?php echo date("F j, Y, g:i a", strtotime($event_data['end_date'])); ?></p>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Event Location</h5>
        <p class="card-text"><?php echo $event_data['venue'] ?></p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
</div>

               </div>
            
            </div>
         </div>
      </div>
  
  
<?php
   include ('includes/footer.php');
?> 