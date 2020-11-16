<?php
require_once 'dbConnect.php';  
/**
 * 
 */
class Event
{

	 public function createEvent($event_type_id, $start_date,$end_date,$name,$venue,$description,$photo,$photo_name){ 
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

          if (empty($name)) {
              $_SESSION['error_message'] = "Name cannot be empty!"; 

                    return false;  
          }
         

                $sql = "INSERT INTO events(start_date, end_date, name, venue, description,photo,photo_name)
                       values('".$start_date."',  '".$end_date."',  '".$name."',  '".$venue."', '".$description."','".mysqli_real_escape_string($photo)."','".$photo_name."')" ;
                  
                   if($conn->query($sql) === true){
                    $last_event_id = $conn->insert_id;
                  $this->storeAssociatedEventType($event_type_id,$last_event_id);
                  return true;
			       }else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				  }  
               
        }

      public function updateEvent($event_type_id, $start_date,$end_date,$name,$venue,$description,$eventId){ 
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

          if (empty($name)) {
              $_SESSION['error_message'] = "Name cannot be empty!"; 

                    return false;  
          }
                $sql = "UPDATE events SET name='$name', description='$description', start_date='$start_date', end_date='$end_date', venue='$venue' WHERE id='$eventId'";                  
                   if($conn->query($sql) === true){
                    if (isset($event_type_id)) {
                  $this->storeAssociatedEventType($event_type_id,$eventId);
                    }
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

  public function listEvents()
  {
    $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); 
    $sql = "SELECT * FROM events ORDER BY id desc";
          $result = $conn->query($sql);
          if($result->num_rows >=1){

            return $result;
        } 
  }

    public function searchEvents($searchkey)
  {
    $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE); 
    $sql = "SELECT * FROM events WHERE name LIKE '%$searchkey%' OR description LIKE '%$searchkey%' ORDER BY id desc";
          $result = $conn->query($sql);
          if($result->num_rows >=1){

            return $result;
        } 
  }

      public function registerForEvent($emailid, $password,$first_name,$last_name,$phone,$eventId){ 
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    

                $password = md5($password);  
               
                $sql = "INSERT INTO users(emailid, password, first_name,last_name,phone)
                       values('".$emailid."','".$password."','".$first_name."','".$last_name."','".$phone."')";
                
                if($conn->query($sql) === true){
                    $userId = $conn->insert_id;
                  $this->saveUserApplication($eventId,$userId);
                    return true;
                   }else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
            }  
               
        }

       public function saveUserApplication($ventId,$userId){
          $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);    
        
            $sql = "INSERT INTO event_applications(event_id, user_id)
                       values('".$ventId."',  '".$userId."')" ;
            $conn->query($sql);
       } 

}

?>