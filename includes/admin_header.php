<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../admin_dashboard_assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../admin_dashboard_assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="admin_dashboard_assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="admin_dashboard_assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="admin_dashboard_assets/demo/demo.css" rel="stylesheet" />

  <link href="admin_dashboard_assets/admin_custom.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- datetime picker css -->
 <link rel="stylesheet" type="text/css" href="datepicker/css/bootstrap-datetimepicker.css" />  
     <link rel="stylesheet" type="text/css" href="datepicker/css/bootstrap-datetimepicker.min.css" /> 
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="dark">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->

      <div class="logo">
        <a href="#" class="simple-text logo-normal">
         <img src="/img/lc_logo.png" alt="App Logo" style="width: 100px; height: 40px;">
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
         
        
          <li>
            <a href="list_event_types.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Event Types</p>
            </a>
          </li>
          <li>
            <a href="list_events.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Events</p>
            </a>
          </li>
        
          
         
        </ul>
      </div>
    </div>



    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Welcome to Admin Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
           
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">
                  <i class="now-ui-icons users_single-02" title="View Profile"></i>
                View Profile</a>

                  <a class="dropdown-item" href="Logout.php">
                     <i class="fa fa-lock" aria-hidden="true" title="Log Out"></i>
                   Logout
            </a>    
          

                </div>
              </li>
              
                
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
 <div class="container">
<?php if (isset($_SESSION['success_message'])): ?>
 
    <?php 
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success! </strong>' .$_SESSION['success_message'].'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
      unset($_SESSION['success_message']);
    ?>
 
<?php endif ?>.

<?php if (isset($_SESSION['error_message'])): ?>
 
    <?php 
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error! </strong>' .$_SESSION['error_message'].'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
      unset($_SESSION['error_message']);
    ?>
 
<?php endif ?>.
</div>