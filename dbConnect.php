<?php  
    class dbConnect {  
        function __construct() {  
      require_once('config/constants.php'); 
            $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);  
            mysqli_select_db($conn,'inits_test');  
            if(!$conn)// testing the connection  
            {  
                die ("Cannot connect to the database");  
            }   
            return $conn;  
        }  
        public function Close(){  
            mysqli_close();  
        }  
    }  
?>  