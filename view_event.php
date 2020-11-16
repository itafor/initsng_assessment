<?php   
   

    include_once('dbFunction.php');

     $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);  
     
      $funObj = new dbFunction(); 
    
      $funObj->isAdmin();

include ('includes/admin_header.php');


      if (isset($_GET['event_id'])) {
      $id = $_GET['event_id'];
    }


?>  

<div class="card">
  <div class="card-header">
      <h2 class="pull-left">Event Details</h2>

      <a href="list_events.php" class="btn btn-success pull-right btn-sm">Back to List</a>
 
  </div>
  <div class="card-body">
    <div class="table-responsive">


                <div class="col-md-12">
                    <?php

                    $sql = "SELECT * FROM events WHERE id='$id'";
                    $result = $conn->query($sql);
                    $data = mysqli_fetch_array($result);

                        if($result->num_rows >= 1){

                          echo "<a class='text-info' href='update_event.php?id=". $data['id'] ."' title='Update Record' data-toggle='tooltip'><i class='fas fa-edit'></i></a>";
                          echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                          echo "<a class='text-danger' href='list_events.php?destrol=". $data['id'] ."' title='Delete Record' data-toggle='tooltip'><i class='fas fa-trash'></i></a>";

                          echo "<br><br>";

                            echo "<table class='table table-bordered table-striped' id='data_table'>";
                                echo "<tbody>";
                                    echo "<tr>";
                                        echo "<td style='width: 150px;'>" . '<b>ID</b>' . "</td>";
                                        echo "<td>" . $data['id'] . "</td>";
                                    echo "</tr>";

                                    echo "<tr>";
                                        echo "<td style='width: 150px;'>" . '<b>Name</b>' . "</td>";
                                        echo "<td >" . $data['name'] . "</td>";
                                    echo "</tr>";

                                      echo "<tr>";
                                        echo "<td style='width: 150px;'>" . '<b>Description</b>' . "</td>";
                                        echo "<td >" . $data['description'] . "</td>";
                                    echo "</tr>";

                                    echo "<tr>";
                                        echo "<td style='width: 150px;'>" . '<b>Venue</b>' . "</td>";
                                        echo "<td >" . $data['venue'] . "</td>";
                                    echo "</tr>";

                                     echo "<tr>";
                                        echo "<td style='width: 150px;'>" . '<b>Start Date</b>' . "</td>";
                                        echo "<td >" . $data['start_date'] . "</td>";
                                    echo "</tr>";

                                     echo "<tr>";
                                        echo "<td style='width: 150px;'>" . '<b>End Date</b>' . "</td>";
                                        echo "<td >" . $data['end_date'] . "</td>";
                                    echo "</tr>";
                                
                                echo "</tbody>";                            
                            echo "</table>";
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    ?>
                    <img src="<?php echo $data['photo']; ?>">
                </div>
        
</div>

<hr>
<h4>Event Types</h4>
    <div class="table-responsive">
                <div class="col-md-12">
                    <?php

                $res = $funObj->associatedEventTypes($data['id']);
                    
                        if($res->num_rows > 0){
                            echo "<table class='table table-bordered table-striped' id='data_table'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>S/N</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $index = 1;
                                while($row = mysqli_fetch_array($res)){
                                    echo "<tr>";
                                        echo "<td>" . $index . "</td>";
                                        echo "<td>" . $funObj->fetchEventTypeValue($row['event_type_id'])['name']. "</td>";
                                        echo "<td>";
                                            echo "<a class='text-danger' href='del_assoc_event-type.php?assc_event_type_id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><i class='fas fa-trash'></i></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                    $index++;
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            mysqli_free_result($res);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                  $conn->close();
                    ?>
                </div>
</div>
  

</div>
</div>




 <?php
   include ('includes/admin_footer.php');
?>  