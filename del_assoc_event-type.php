<?php
 include_once('dbFunction.php');
      $funObj = new dbFunction(); 

     $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);  
     
       if (isset($_GET['assc_event_type_id'])) {
      $assoc_evnt_id = $_GET['assc_event_type_id'];
    $sql="DELETE FROM  get_event_types WHERE id='$assoc_evnt_id'";
      $result = $conn->query($sql);
      if($result){
      $_SESSION['success_message'] = "Associated Event type deleted successfully!";
      
          $funObj->redirect('list_events.php');

      }
    }

?>