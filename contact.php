<?php 
include_once "./includes/connection.php";

// subscribe
if(isset($_REQUEST['subscribe'])){
   $subEmail = $_REQUEST['subEmail'];
   // check email
   $checkemail = "SELECT * FROM subscribe WHERE subEmail = '$subEmail'";
   $checkQuery = mysqli_query($conn, $checkemail);
   $email_show = mysqli_fetch_array($checkQuery);
   if($email_show){
      header('Location: ./contact.php');
   }else{
      $insert = "INSERT INTO subscribe(subEmail) VALUES ('$subEmail')";
      $insertQuery = mysqli_query($conn, $insert);
      if($insertQuery){
         header('Location: ./contact.php');
      }else{
         echo "Error";
      }
   }
}

// contact us
if(isset($_REQUEST['submit'])){
   $name = $_REQUEST['name'];
   $phoneNumber = $_REQUEST['phoneNumber'];
   $email = $_REQUEST['email'];
   $message = $_REQUEST['message'];

   $insert = "INSERT INTO contact_us(name, phone_no, email, message) VALUES ('$name', '$phoneNumber', '$email', '$message')";
   $insertQuery = mysqli_query($conn, $insert);
   if($insertQuery){
      header('Location: ./contact.php');
   }else{
      echo "Error";
   }

}


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>COFFEE Adda</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-xl-1 col-lg-3 col-sm-2 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.php">Coffee</br>Adda</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="index.php">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="about.php">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="service.php">Service</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="reservation.php">Reservation</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="reviews.php">Reviews</a>
                           </li>
                           <li class="nav-item active">
                              <a class="nav-link" href="contact.php">Contact Us</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <div class="col-md-4 re_no">
                  <ul class="infomaco">
                     <li><i class="fa fa-phone" aria-hidden="true"></i>0323_7626705</li>
                     <li><a href="Javascript:void(0)"><i class="fa fa-envelope-o" aria-hidden="true"></i>chassaan12@gmail.com</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- section blue_bg -->
      <div class="section blue_bg">
         <div class="container-fluid">
            <div class="row">
               <!-- contact -->
               <div class="col-md-12">
                  <div class="contact">
                     <div class="row ">
                        <div class="col-md-12">
                           <div class="titlepage text_align_center">
                              <h2>contact Us</h2>
                           </div>
                        </div>
                        <div class="col-md-6">
                        <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108995.14001184286!2d72.98023089480003!3d31.38385776911979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392243e7585c6141%3A0xf77ed09deac099b0!2sLayers%20Bakeshop%20-%20Faisalabad%20Civil%20Lines!5e0!3m2!1sen!2s!4v1725545033748!5m2!1sen!2s" width="100%" height="500" allowfullscreen loading="lazy"></iframe>
                            </div>
                </div>
                        <div class="col-md-6">
                           <form id="request" class="main_form" action="#" method="get">
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Your name" type="text" name="name"> 
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone Number" type="text" name="phoneNumber">                          
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="email" name="email">                          
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
                                 </div>
                                 <div class="col-md-12">
                                    <button class="send_btn" name="submit">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- contact -->
            </div>
         </div>
      </div>
      <!-- end section blue_bg -->

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <a class="logo_bottom" href="index.php">Coffee Adda</a>
                  </div>
                  <div class="col-md-12">
                     <form class="form_subscri" action="" method="get" id="subscribe">
                        <div class="row">
                           <div class="col-md-12">
                              <input class="subsrib" placeholder="Enter your email" type="email" name="subEmail">
                           </div>
                           <div class="col-md-12">
                              <button class="subsci_btn" name="subscribe">Subscribe</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-lg-9 col-md-8">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="infoma text_align_left">
                              <h3>Menu</h3>
                              <ul class="menu_bottom">
                                 <li><a href="index.php">Home</a></li>
                                 <li><a href="about.php">About </a></li>
                                 <li><a href="service.php">Service</a></li>
                                 <li><a href="reservation.php">Reservation</a></li>
                                 <li><a href="reviews.php">Reviews</a></li>
                                 <li><a href="contact.php">Contact us</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="infoma text_align_left">
                              <h3>Coffee</h3>
                              <ul class="menu_bottom">
                                 <li><a href="Javascript:void(0)">Black Coffee</a></li>
                                 <li><a href="Javascript:void(0)">Read Coffee </a></li>
                                 <li><a href="Javascript:void(0)">Coffee Serviec</a></li>
                                 <li><a href="Javascript:void(0)">Green Tea</a></li>
                                 <li><a href="Javascript:void(0)">Choclate Coffee</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4">
                     <div class="infoma">
                        <h3>Follow Us</h3>
                        <ul class="social_icon">
                           <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <ul class="conta">
                           <a href="https://maps.app.goo.gl/iR98hAQPTy6RSH6T8" target="_blank"><li><i class="fa fa-map-marker" aria-hidden="true"></i>Kohinoor City</li></a>
                           <li><i class="fa fa-phone" aria-hidden="true"></i>Call 0323_7626705</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)"> chassaan12@gmail.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2024 All Rights Reserved. Coffee Adda</p>
                     </div>
                  </div>
               </div>
</div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>