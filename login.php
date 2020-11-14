
<?php 
   include ('includes/header.php');

    include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  
    if(isset($_POST['login'])){  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $user = $funObj->Login($emailid, $password);  
        if ($user) {  
          if ($funObj->authUser()['user_type'] =='Admin') {
               $funObj->redirect('admin_dashboard.php');
           }else{
                $funObj->redirect("home.php"); 
           } 
        } else {  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
    }  
  
?>


        <div class="container">  
            <header>  
                <h1>Login Form  </h1>  
            </header> 
    
            <section>               
                <div id="container_demo" >  
                     
                    <a class="hiddenanchor" id="toregister"></a>  
                    <a class="hiddenanchor" id="tologin"></a>  
                    <div id="wrapper">  
                        <div id="login" class="animate form">  
                           <form name="login" method="post" action="">  
                                <h1>Log in</h1>   
                                <p>   
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                    <input id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com" class="form-control" />   
                                </p>  
                                <p>   
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>  
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" class="form-control" />   
                                </p>  
                                <p class="keeplogin">   
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />   
                                    <label for="loginkeeping">Keep me logged in</label>  
                                </p>  
                                <p class="login button">   
                                    <input type="submit" name="login" value="Login" />   
                                </p>  
                                <p class="change_link">  
                                    Not a member yet ?  
                                    <a href="#toregister" class="to_register">Join us</a>  
                                </p>  
                            </form>  
                        </div>  
  
                 
                          
                    </div>  
                </div>    
            </section> 


        </div>  
<?php
   include ('includes/footer.php');
?> 