<?php   
   

    include_once('dbFunction.php');

     $conn =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);  
     
      $funObj = new dbFunction(); 
    
      $funObj->isAdmin();

include ('includes/admin_header.php');


      if (isset($_GET['et_id'])) {
      $id = $_GET['et_id'];
    }
?>  

<div class="card">
  <div class="card-header">
      <h2 class="pull-left">Events Type Details</h2>

      <a href="list_event_types.php" class="btn btn-success pull-right btn-sm">Back to List</a>
 
  </div>
  <div class="card-body">
    <div class="table-responsive">

 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php

                    $sql = "SELECT * FROM event_types WHERE id='$id'";
                    $result = $conn->query($sql);
                    $data = mysqli_fetch_array($result);

                        if($result->num_rows >= 1){

                          echo "<a class='text-info' href='update_event_type.php?id=". $data['id'] ."' title='Update Record' data-toggle='tooltip'><i class='fas fa-edit'></i></a>";
                          echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                          echo "<a class='text-danger' href='list_event_types.php?del=". $data['id'] ."' title='Delete Record' data-toggle='tooltip'><i class='fas fa-trash'></i></a>";

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