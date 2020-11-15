<?php
require_once 'dbConnect.php';  
/**
 * 
 */
class Event
{

	 public function createEvent($event_type_id, $start_date,$end_date,$name,$venue,$description){ 
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

          if (empty($name)) {
                    echo "<script>alert('Name cannot be empty')</script>";
                    return false;  
          }
                $sql = "INSERT INTO events(event_type_id, start_date, end_date, name, venue, description)
                       values('".$event_type_id."', '".$start_date."',  '".$end_date."',  '".$name."',  '".$venue."', '".$description."')" ;

                   if($conn->query($sql) === true){
                   	return true;
			       }else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				  }  
               
        } 

}

?>