<?php   
   

    include_once('dbFunction.php');
    
     if(!($_SESSION)){  
        header("Location:index.php");  
    }  
        $funObj = new dbFunction();


     if ($funObj->authUser()['user_type'] !='Admin') {
             $funObj->redirect("index.php"); 
           }
include ('includes/admin_header.php');
?>  

<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <div class="table-responsive">
<table class="table table-bordered display" id="data_table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
       <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
  </div>
</div>

<img src="assets/images/plant2.jpg" alt="img"/>

 <?php
   include ('includes/admin_footer.php');
?>  