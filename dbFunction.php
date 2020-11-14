<?php  
require_once 'dbConnect.php';  
require_once('config/constants.php'); 
session_start();  
    class dbFunction {  
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();;  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
        public function UserRegister($emailid, $password,$first_name,$last_name,$phone){ 
          $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

                $password = md5($password);  
                $qr = mysqli_query($conn,"INSERT INTO users(emailid, password, first_name,last_name,phone) values('".$emailid."','".$password."','".$first_name."','".$last_name."','".$phone."')") or die(mysqli_error($conn));  
                return $qr;  
               
        }  
        public function Login($emailid, $password){  
          $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
                $user_password = md5($password);  
            $res = mysqli_query($conn,"SELECT * FROM users WHERE emailid ='$emailid'  AND password ='$user_password'  ");  
            $user_data = mysqli_fetch_array($res);  
             // print_r($user_data); 
             // exit; 
            $no_rows = mysqli_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;  
                $_SESSION['uid'] = $user_data['id'];  
                $_SESSION['email'] = $user_data['emailid']; 
                $_SESSION['firstName'] = $user_data['first_name']; 
                $_SESSION['lastName'] = $user_data['last_name'];

                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
        }  
        public function isUserExist($emailid){ 
          $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
            $qr = mysqli_query($conn,"SELECT * FROM users WHERE emailid = '".$emailid."'");  
            // $row = mysqli_num_rows($qr);  
            if(!$qr){  
                return true;  
            } else {  
                return false;  
            }  
        }  

        public function authUser()
        {
          $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

            $user = mysqli_query($conn,"SELECT * FROM users where emailid='".$_SESSION['email']."' ");
               $user_data = mysqli_fetch_array($user);  
               $no_rows = mysqli_num_rows($user); 
            if($no_rows == 1){
                return $user_data;
            }else{
                return false;
            }
        }

   public function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
    }  
?>