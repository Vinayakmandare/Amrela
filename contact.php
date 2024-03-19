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
      <title>Amarela Restaurant with Bar</title>
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
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo3.jpg" alt="#"/></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
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
                                 <a class="nav-link" href="room.php">Our room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.php">Gallery</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="blog.php">Blog</a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link active" href="contact.php">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container contact_page">
            <div class="row">
               <div class="col-md-6">
               <form id="request" method="POST" action="send_mail2.php"  class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="text" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="text" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="text" name="phone">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" Message="Name" name="msg">Message</textarea>
                        </div>
                        <div class="col-md-12 ">
                        <span class="placeholder">Arrival Date(DD-MM-YYYY)</span>
                           <input class="contactus" placeholder="Arrival Date(DD-MM-YYYY)" type="text" id="arrival" name="f_date"> 
                        </div>
                        <div class="col-md-12">
                        <span class="placeholder">Departure Date(DD-MM-YYYY)</span>
                           <input class="contactus" placeholder="Departure Date(DD-MM-YYYY)" type="text" id="departure" name="t_date"> 
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                           <button class="send_btn" type="submit" name="submit">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15402.35362292178!2d73.966392!3d15.1809324!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbe4d746ace5313%3A0x867aee9f08b7c18!2sAmarela%20Restaurant%20with%20Bar!5e0!3m2!1sen!2sin!4v1710309810509!5m2!1sen!2sin" width="600" height="570" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer" style="margin-top: -100px;">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> H.no 44/D, ...Passagem, Tariwaddo, Assolna Salcete Goa, India</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +91 84110 25938</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> info@dasilvasgroup.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Quick Link</h3>
                     <ul class="link_menu">
                        <li ><a href="index.php">Home</a></li>
                        <li><a href="about.php"> About</a></li>
                        <li><a href="room.php">Our Room</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <!-- <li><a href="blog.php">Blog</a></li> -->
                        <li class="active"><a href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form" action="send_mail2.php" method="POST">
                        <input class="enter" placeholder="Enter your email" type="text" name="sub">
                        <button class="sub_btn" type="submit" name="subscribe">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="https://www.facebook.com/amarelagoa" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/amarela_restaurant/?r=nametag" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://maps.app.goo.gl/p7eh5AqVomrn8VnT8" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-" aria-hidden="true"></i></a></li> -->
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p></p>
                       <p>©  All Rights Reserved.<br>Designed by <a href="https://xpresshotelerp.com/" target="_blank"><strong>RN Softwares & Consultors</strong></p></a>
                        <?php echo date('Y')?>
                        <p>
                        <!-- © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a>
                        <br><br>
                        Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p> -->

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
      <script src="js/custom.js"></script>
      <script>
          var saledatePicker = flatpickr('#arrival', {
    dateFormat: "d-m-Y",
    minDate:"today"

          })
          var saledatePicker = flatpickr('#departure', {
    dateFormat: "d-m-Y",
    minDate:"today"

          })

      </script>
   </body>
</html>