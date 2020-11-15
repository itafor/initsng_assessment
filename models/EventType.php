<?php
require_once 'dbConnect.php'; 

/**
 * 
 */
class EventType
{
          function __construct(){
          }   


	 public function createEventType($name, $description){ 
     $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); 
          if (empty($name)) {
                    echo "<script>alert('Name cannot be empty')</script>";
                    return false;  
          }
                $sql = "INSERT INTO event_types(name, description)
                       values('".$name."','".$description."')" ;

                   if($conn->query($sql) === true){
                   	return true;
			       }else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				  }  
               
        } 



    public function getEventTypes()
    {
$conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); 
       
        $sql = "SELECT * FROM event_types";

               $result = $conn->query($sql);

      return $result;
    }
}


?>