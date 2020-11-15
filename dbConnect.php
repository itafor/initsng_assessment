<?php  
    class dbConnect {  
        function __construct() {  
      require_once('config/constants.php'); 
            $conn =new  mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);  
            // mysqli_select_db($conn,'inits_test');  
            if($conn->connect_error)// testing the connection  
            {  
                die("Connection failed: " . $conn->connect_error); 
            }   
            return $conn;  
        }  

        
        public function Close(){  
            mysqli_close();  
        }  
    }  
?>  