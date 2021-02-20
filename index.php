<?php 

  $success_message = "";
  $error_message = "";

  if (isset($_GET['success_message'])) {

    $success_message = $_GET['success_message'];
  
  } else if (isset($_GET['error_message'])) {
    
    $error_message = $_GET['error_message']; 
  
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_hotel.css">

    <title>SylGuide | Home</title>
</head>
<body>
<header id="header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg full-width">
                <a class="navbar-brand" href="index.php">SylGuide</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="ToggleNavigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item "><a href="tourSight.php" class="nav-link">Tour Sight</a>
                           
                        </li>
                        <li class="nav-item"><a href="hotels.php" class="nav-link">Hotel Booking</a>
                            <ul class="subMenu">
                                <li><a href="supreme_room.php" class="nav-link">Hotel Supreme</a></li>
                                <li><a href="gardenin_room.php" class="nav-link">Hotel Garden Inn</a></li>
                                <li><a href="noorjahan_room.php" class="nav-link">Noorjahan Grand</a></li>
                                <li><a href="nirvana_room.php" class="nav-link">Nirvana Inn</a></li>
                                <li><a href="pacific_room.php" class="nav-link">Star Specific</a></li>
                                <li><a href="roseview_room.php" class="nav-link">Roseview Hotel</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="cars.php" class="nav-link">Transportation</a>
                            
                        </li>
                        <li class="nav-item"><a href="food_gallery.php" class="nav-link">Food Gallery</a>
                         
                        </li>

                        <li class="nav-item"><a href="medical_emergency.php" class="nav-link">Medical Emergency</a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>


<div class="index-header container-fluid">
    <div class="main-content-header">
        <h2> WELCOME TO <span class="colorchange">SylGuide</span>.<br> A SYLHET CITY TOUR GUIDE FOR ADVENTOROUS PEOPLE. </h2>
        <a href="#about-us" class="btn btn-learn">click to learn more</a>
        <a href="#contact" class="btn btn-info">click for contact information</a>
    </div>
    <svg viewBox="0 0 1400 100" class="svg-bottom">
        <polygon points="0,0 200,100 1200,100 1400,0 1400,100 0,100 0,0" style="fill:white";>
    </svg>
</div>

<!-- About US Section -->
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="about-us-header">
                <h1>About Us</h1>
            </div>
            <div class="col-6">
                <div class="about-us-image">
                    <img src="images/about_us.jpg" class="img-fluid" alt="about-us">
                </div>

            </div>
            <div class="col-6">
                <div class="abou-us-content">
                    <p>Each and every expanse of Bangladesh abounds in greenery, but none can compare with Sylhet. From spinning hills covered in lush green tea gardens and gleaming paddy fields to olive marshlands and reserved forests, Sylhet seems to have been blessed with every possible shade of green one can imagine.<br>SylGuide is a platform to inspire people to explore greater Sylhet. Our purpose is to deliver growth for Sylhet by attracting visitors and building Sylhet’s reputation as a true destination.
                        Explore diverse range of tourist destinations from all four districts of Sylhet Division with SylGuide.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- About US Section End -->

<!-- Services section -->
<section id="what-we-do">
    <svg viewBox="0 0 1400 100" class="svg-top">
        <polygon points="0,100 200,0 1200,0 1400,100 1400,0 0,0 0,100" style="fill:white";>
    </svg>
    <div class="container-fluid" style="width:100%">
        <div class="parallax">
            <h2 class="section-title mb-2 text-white">What We Provide</h2>
            <p class="text-center text-white">We Can Make Your Trip Easier</p>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-block block-1">
                            <h3 class="card-title">Hotel Reservation</h3>
                            <p class="card-text">Book your Hotel in Sylhet online. No reservation costs. Great rates.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-block block-2">
                            <h3 class="card-title">Car Rent</h3>
                            <p class="card-text">Compare and Save Big on Sylhet Car Rentals.Unbeatable Rates.Book Now,Pay Later </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-block block-4">
                            <h3 class="card-title">Doctor Appointment Booking</h3>
                            <p class="card-text">Search for doctors booking information.Find a nearby doctor or dentist and book an appointment instantly.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-block block-5">
                            <h3 class="card-title">Hospital Cabin Bookin</h3>
                            <p class="card-text">Book available patient cabin fast in emergency.Book first,pay later.</p>
                            
                        </div>
                    </div>
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-block block-5">
                            <h3 class="card-title">Reserve table at restaurent</h3>
                            <p class="card-text">Rserve table at your choosen restaurent.Eat and enjoy.Book first,pay later.</p>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /Services section -->

<!-- Contact US Section Start -->
<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
        <h3>Contact us for any requering information. We will get in touch with you as soon as possible.</h3>
    </div>
    <div class="contact-section">
        <div class="container">
            <form action="db/contact.php" method="post">
                <div class="row">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="name">Your name</label>
                            <input type="text" name="name" class="form-control" id="" placeholder=" Enter Name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder=" Enter Email id" required="required">
                        </div>
                        <div class="form-group">
                            <label for="phone">Mobile No.</label>
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder=" Enter 10-digit mobile no." required="required" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="msg"> Message</label>
                            <textarea  class="form-control" name="msg" id="msg" placeholder="Enter Your Message" required="required"></textarea>
                        </div>
                        <div>
                            <button type="submit" name="submit" class="btn btn-default submit" id="register" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Contact US section End -->

<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h5>Features</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="toursight.php"><i class="fa fa-angle-double-right"></i>Tourist Spots</a></li>
                    <li><a href="hotels.php"><i class="fa fa-angle-double-right"></i>Accomodation</a></li>
                    <li><a href="food_gallery.php"><i class="fa fa-angle-double-right"></i>Restaurents</a></li>
                    <li><a href="medical_emergency.php"><i class="fa fa-angle-double-right"></i>Medical Emergency</a></li>
                    <li><a href="cars.php"><i class="fa fa-angle-double-right"></i>Transportation Management</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h5>Services</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="hotels.php"><i class="fa fa-angle-double-right"></i>Hotel Room Booking</a></li>
                    <li><a href="medical_emergency.php"><i class="fa fa-angle-double-right"></i>Doctor Appointment Booking</a></li>
                    <li><a href="medical_emergency.php"><i class="fa fa-angle-double-right"></i>Hospital Cabin Booking</a></li>
                    <li><a href="cars.php"><i class="fa fa-angle-double-right"></i>Rent A Car</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p>SylGuide Private Company Limited</p>
                <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="#" target="_blank">SylGuide</a></p>
            </div>
            </hr>
        </div>
    </div>
</section>
<!-- ./Footer -->

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          
        <div class="modal-body">
          <?php if ($success_message): ?>
            <h1 class="text-center text-success"><b>Thank You</b></h1>
            <p>"Thank you for contacting us,we will reply you within 2 hours via email"</p>
          <?php else: ?>
            <h1 class="text-center text-danger"><b>Oooops !!!</b></h1>
            <p>Something Went Wrong. Please Try Again Later</p>
          <?php endif ?>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-learn" data-dismiss="modal">Okay</button>
        </div>
        </div>
      </div>
    </div>



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>


<!-- My Customise JS -->
<script src="js/main.js"></script>


</body>
</html>