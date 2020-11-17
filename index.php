<?php  
    include_once('dbFunction.php'); 
    include_once('models/Event.php');  

      $event = new Event(); 
      $events = $event->listEvents(); 

      
      if(isset($_POST['searchkey'])){  

      $searchkey = $_POST['searchkey'];  

           
        $events = $event->searchEvents($searchkey);
           
       

      }

  include ('includes/header.php'); 
?>
      <section >
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome To The <strong class="color">INIT EVENTS PLATFORM</strong></h1>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="assets/images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome To The <strong class="color">INIT EVENTS PLATFORM</strong></h1>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="assets/images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome To The <strong class="color">INIT EVENTS PLATFORM</strong></h1>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="assets/images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>

  <?php include ('search_event.php'); ?>
  
      <!-- plant -->
      <div id="plant" class="plants">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Our Wonderful Events</h2>
                     <span>Welcome to Inits Event platform!. The best platform to schedule your event</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">

                     <?php
                     if ($events) {
                        # code...
                     
              while($row = mysqli_fetch_array($events)){

            ?>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
               <a href="event_details.php?id=<?php echo $row['id'] ?>">
                  <div class="plants-box">
                     <figure><img src="assets/images/plant1.jpg" alt="img"/></figure>
                     <h3> <?php echo mb_strimwidth($row['name'], 0, 20, "...");?></h3>
                     <div style="margin: 0px 20px; color: red; font-size: 10px;">
                        <span class="pull-left"><?php echo date("F j, Y, g:i a", strtotime($row['start_date'])) ?></span>    
                        <span class="pull-right">  <?php echo date("F j, Y, g:i a", strtotime($row['end_date'])); ?></span>
                     </div>
                     <br>
                     <p> <?php echo mb_strimwidth($row['description'], 0, 20, "...");; ?>
                     <br>
                     <small style="color: gray;"> <?php echo  mb_strimwidth($row['venue'], 0, 20, "..."); ?></small>
                        
                     </p>
                  </div>
                  </a>
               </div>

            <?php
          }
       }else{
         echo "No result found";
       }
  ?>
            
            </div>
         </div>
      </div>
  
     
<?php
   include ('includes/footer.php');
?> 