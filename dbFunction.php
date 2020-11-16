<?php  
require_once 'dbConnect.php';  
require_once('config/constants.php'); 
    $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

session_start();  
    class dbFunction {  
            
     
        public function UserRegister($emailid, $password,$first_name,$last_name,$phone){ 
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

                $password = md5($password);  
               
                $sql = "INSERT INTO users(emailid, password, first_name,last_name,phone)
                       values('".$emailid."','".$password."','".$first_name."','".$last_name."','".$phone."')";
                
                if($conn->query($sql) === true){
                    return true;
                   }else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
            }  
               
        }  


        public function Login($emailid, $password){  
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
                $user_password = md5($password);  
            $sql = "SELECT * FROM users WHERE emailid ='$emailid'  AND password ='$user_password' "; 
            $result = $conn->query($sql);

            if ($result->num_rows >=1) {
             $user_data = mysqli_fetch_array($result);  
            
            $no_rows = mysqli_num_rows($result);  
              
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
                return FALSE;  


        }  
        public function isUserExist($emailid){ 
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
            $sql ="SELECT * FROM users WHERE emailid = '".$emailid."'"; 
             $result = $conn->query($sql);

            if($result->num_rows >=1){  
                return true;  
            } else {  
                return false;  
            }  
        }  

        public function authUser()
        {
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

            $user ="SELECT * FROM users where emailid='".$_SESSION['email']."' ";
            $result= $conn->query($user);
            if($result->num_rows >= 1){
               $user_data = mysqli_fetch_array($result);  
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

public function isAdmin()
{
  if(!($_SESSION)){  
        header("Location:index.php");  
    }  

     if ($this->authUser()['user_type'] !='Admin') {
        $this->redirect("index.php"); 
    } 
} 

public function associatedEventTypes($eventId){
    $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); 
        $sql = "SELECT * FROM get_event_types where event_id ='$eventId'";
               $result = $conn->query($sql);

      return $result;
}

public function fetchEventTypeValue($eventTypeId)
{
   $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); 
        $sql = "SELECT * FROM event_types where id ='$eventTypeId'";
               $result = $conn->query($sql);

          $data =   mysqli_fetch_array($result);

      return $data;
}

}
?>