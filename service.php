<?php 
include_once "./includes/connection.php";

if(isset($_REQUEST['subscribe'])){
   $subEmail = $_REQUEST['subEmail'];
   // check email
   $checkemail = "SELECT * FROM subscribe WHERE subEmail = '$subEmail'";
   $checkQuery = mysqli_query($conn, $checkemail);
   $email_show = mysqli_fetch_array($checkQuery);
   if($email_show){
      header('Location: ./sevice.php');
   }else{
      $insert = "INSERT INTO subscribe(subEmail) VALUES ('$subEmail')";
      $insertQuery = mysqli_query($conn, $insert);
      if($insertQuery){
         header('Location: ./service.php');
      }else{
         echo "Error";
      }
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
   <!-- <link rel="stylesheet" href="css/responsive2.css"> -->
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                     aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li class="nav-item active">
                           <a class="nav-link" href="service.php">Service</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="reservation.php">Reservation</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="reviews.php">Reviews</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="col-md-4 re_no">
               <ul class="infomaco">
                  <li><i class="fa fa-phone" aria-hidden="true"></i>0323_7626705</li>
                  <li><a href="Javascript:void(0)"><i class="fa fa-envelope-o"
                           aria-hidden="true"></i>chassaan12@gmail.com</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- end header inner -->
   <!-- service -->
   <div class="service">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center">
                  <h2>Coffee Services</h2>
                  <p>"Experience pure, organic coffee in a warm atmosphere, featuring eco-friendly
                      <br> practices and fresh, locally sourced ingredients for every cup."
                  </p>
               </div>
            </div>
         </div>
         <div class="container featured no-gutter">
            <div class="row posts">
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-1.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 500
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-2.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                     Vanila Latta
                     </h4>
                     <h6>
                        Rs. 600
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-3.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                     Cappuccino koffee
                     </h4>
                     <h6>
                        Rs. 700
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-4.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                     Regular koffee
                     </h4>
                     <h6>
                        Rs. 800
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-5.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                     Cold koffee
                     </h4>
                     <h6>
                        Rs. 900
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-6.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 1000
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-7.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 1100
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-8.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 1200
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-3.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 1300
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-5.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 1400
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-8.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 1500
                     </h6>
                  </div>
               </div>
               <div id="1" class="item new col-md-3 mt-4">
                  <div class="featured-item" id="product">
                     <img src="images/s-2.jpg" class="productImg" style="height: 250px; width: 330" />
                     <h4>
                        Americano koffee
                     </h4>
                     <h6>
                        Rs. 500
                     </h6>
                  </div>
               </div>
               <div class="col-md-12 mb-4 mt-4">
                  <a class="read_more" href="reservation.php">Book Now Table</a>
               </div>
            </div>

         </div>
      </div>
</div>
      <!-- end service -->
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
                           <li><a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                           </li>
                        </ul>
                        <ul class="conta">
                           <a href="https://maps.app.goo.gl/iR98hAQPTy6RSH6T8" target="_blank">
                              <li><i class="fa fa-map-marker" aria-hidden="true"></i>Kohinoor City</li>
                           </a>
                           <li><i class="fa fa-phone" aria-hidden="true"></i>Call 0323_7626705</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="Javascript:void(0)">
                                 chassaan12@gmail.com</a></li>
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