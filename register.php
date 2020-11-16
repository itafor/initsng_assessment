
<?php 

    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  
  
    if(isset($_POST['register'])){  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $first_name = $_POST['first_name'];  
        $last_name = $_POST['last_name'];  
        $phone = $_POST['phone'];  
        $confirmPassword = $_POST['confirm_password'];  
        if($password == $confirmPassword){  
            $email = $funObj->isUserExist($emailid);  
            if(!$email){  
                $register = $funObj->UserRegister($emailid, $password,$first_name,$last_name,$phone);  
                if($register){  
                    header('location:login.php');
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }
   include ('includes/header.php');
?>
<style type="text/css">
  #auth_form{
  background: #fff;
  padding: 4em 4em 2em;
  max-width: 600px;
  margin: 50px auto 0;
  box-shadow: 0 0 0.1em #222;
  border-radius: 2px;
  margin-top: 150px;
}
</style>


    <div class="container">  

<form method="post" action="" class="all_forms" id="auth_form">
  <div class="row">
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
 
  <button type="submit" name="register" class="btn btn-primary">REGISTER</button>
<p class="change_link">    
    Already a member ?  
    <a href="#tologin" class="register"> Go and log in </a>  
</p>  
</form>


  </div>  
<?php
   include ('includes/footer.php');
?> 