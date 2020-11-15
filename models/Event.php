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
              $_SESSION['error_message'] = "Name cannot be empty!"; 

                    return false;  
          }
                $sql = "INSERT INTO events(start_date, end_date, name, venue, description)
                       values('".$start_date."',  '".$end_date."',  '".$name."',  '".$venue."', '".$description."')" ;
                  
                   if($conn->query($sql) === true){
                    $last_event_id = $conn->insert_id;
                  $this->storeAssociatedEventType($event_type_id,$last_event_id);
                  return true;
			       }else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				  }  
               
        }

        public function storeAssociatedEventType($event_type_ids,$event_id) 
        {
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

           foreach ($event_type_ids as $key => $event_type_id) {
                     
                    $sql = "INSERT INTO get_event_types(event_id, event_type_id)
                       values('".$event_id."',  '".$event_type_id."')" ;
            $conn->query($sql);
        }
  }

}

?>