<?php   
    include_once('dbFunction.php');

     $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);  
     
      $funObj = new dbFunction(); 
    
      $funObj->isAdmin();

include ('includes/admin_header.php');


      if (isset($_GET['destrol'])) {
      $id = $_GET['destrol'];
      $sql="DELETE FROM events WHERE id='$id'";
      $result = $conn->query($sql);
      if($result){
      $_SESSION['success_message'] = "Event deleted successfully!"; 
      }
    }
?>  

<div class="card">
  <div class="card-header">
      <h2 class="pull-left">Events</h2>

      <a href="create_event.php" class="btn btn-success pull-right btn-sm">Add New Event</a>
 
  </div>
  <div class="card-body">
    <div class="table-responsive">

 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php

                    $sql = "SELECT * FROM events ORDER BY id desc";
                    $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped' id='data_table'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>S/N</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Venue</th>";
                                        echo "<th>Description</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $index = 1;
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $index . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['venue'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>";
                                            echo "<a class='text-success' href='view_event.php?event_id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><i class='fas fa-eye'></i></a>";
                                            echo "&nbsp;&nbsp;&nbsp;&nbsp;";

                                            echo "<a class='text-info' href='update_event.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><i class='fas fa-edit'></i></a>";
                                            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                            echo "<a class='text-danger' href='list_events.php?destrol=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><i class='fas fa-trash'></i></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                    $index++;
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                  $conn->close();
                    ?>
                </div>
            </div>        
        </div>
    </div>
</div>
  </div>
</div>



 <?php
   include ('includes/admin_footer.php');
?>  