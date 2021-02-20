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

    <!-- 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_hotel.css"> 

    <title>SylGuide | Hotel Rose View</title>
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
              <li class="nav-item"><a href="hotels.php" class="nav-link active">Hotel Booking</a>
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
              <li class="nav-item"><a href="food_gallery.php" class="nav-link">Food Gallery</a></li>
              <li class="nav-item"><a href="medical_emergency.php" class="nav-link">Medical Emergency</a>
                
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div> 
  </header>


	<div id="fh5co-page">
		<div id="fh5co-header">
		</div>
	</div>
	<!-- ======================================== carousel Slider Start ================================================-->
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  	</ol>
			  	<div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block" src="images/RVH_deluxedouble.jpg" alt="First slide" width="700" height="500">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block" src="images/RVH_deluxesuit.jpg" alt="Second slide" width="700" height="500">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block" src="images/RVH_executivesuit.jpg" alt="Third slide" width="700" height="500">
				    </div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div>
		</div>
	<!-- ======================================== carousel Slider End ================================================-->

<div id="fh5co-hotel-section">
	<div class="container">
		<h1 class="text-center SectionHeader pb-2 mb-4">Hotel RoseView</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="hotel-content">
					<div class="hotel-grid" style="background-image: url(images/RVH_deluxedouble.jpg);">
						<div class="price"><small>Price</small><span>BDT 9,857/night</span></div>
						<a class="book-now text-center" href="room_reserve.php?id=roDeluxeTwinRoom" target="_blank"><i class="ti-calendar"></i> Reserve Room</a>
					</div>
  					<div class="desc">
					   	<h3>Deluxe Twin Room</h3>
					   	<p>Each large room here will provide you with air conditioning and a minibar.</iframe></p>
					</div>
 				</div>
 			</div>

			<div class="col-md-4">
  				<div class="hotel-content">
					<div class="hotel-grid" style="background-image: url(images/RVH_deluxesuit.jpg);">
							<div class="price"><small>Price</small><span>BDT 15,068/night</span></div>
							<a class="book-now text-center"  href="room_reserve.php?id=roDeluxeSuit" target="_blank"><i class="ti-calendar"></i> Reserve Romm</a>
					</div>
					<div class="desc">
						<h3>Deluxe Suit</h3>
						<p>Each large room here will provide you with air conditioning and a minibar.</p>
				    </div>
				</div>
  			</div>

  			<div class="col-md-4">
				<div class="hotel-content">
					<div class="hotel-grid" style="background-image: url(images/RVH_executivesuit.jpg);">
						<div class="price"><small>Price</small><span>BDT 17,438/night</span></div>
						<a class="book-now text-center" href="room_reserve.php?id=roExecutiveSuit" target="_blank"><i class="ti-calendar"></i> Reserve Room</a>
			   		</div>
			    	<div class="desc">
						<h3>Executive Suit</h3>
						<p> This suite has a soundproofing, sofa and cable TV.</p>
				  </div>
			  	</div>
			</div>

			<div class="col-md-4">
   				<div class="hotel-content">
   					<div class="hotel-grid" style="background-image: url(images/RVH_familysuit.jpg);">
	 					<div class="price"><small>Price</small><span>BDT 23,215/night</span></div>
	  					<a class="book-now text-center"  href="room_reserve.php?id=roDeluxeFamilySuit" target="_blank"><i class="ti-calendar"></i> Reserve Room</a>
					</div>
  					<div class="desc">
						<h3>Deluxe Family Suit</h3>
						<p>It offers additional space and can accommodate 4 guests.</iframe></p>
					</div>
	  			</div>
		 	</div>

		 	<div class="col-md-4">
				<div class="hotel-content">
			   		<div class="hotel-grid" style="background-image: url(images/RVH_presidentialsuit.jpg);">
			     		<div class="price"><small>Price</small><span>BDT 53,329/night</span></div>
				 		<a class="book-now text-center"  href="room_reserve.php?id=roPresidentialSuit" target="_blank"><i class="ti-calendar"></i> Reseve Room</a>
	      			</div>
		   			<div class="desc">
		    			<h3>Presidential Suit</h3>
			 			<p>This luxarious room is furnished with marbel floor,minibar,seating area and a hot tub</iframe></p>
					</div>
  				</div>
 			</div>	
			
			
			<div class="col-md-4">
				<div class="hotel-content">
					<div class="hotel-grid" style="background-image: url(images/HSR_superiordroom.jpg);">
						<div class="price"><small>Price</small><span>BDT 2,510/night</span></div>
						<a class="book-now text-center"  href="room_reserve.php?id=roSuperiorDoubleRoom" target="_blank"><i class="ti-calendar"></i> Reserve room</a>
					</div>
					<div class="desc">
						<h3>Superior Double room</h3>
						<p> This room is furnished wth tiled/marbel floor,minibar,seating area</iframe></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

 <!-- Footer -->
<section id="footer">
	<div class="container">
		<div class="row text-center text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h5>Features</h5>
				<ul class="list-unstyled quick-links">
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Tourist Spots</a></li>
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Accomodation</a></li>
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Restaurents</a></li>
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Medical Emergency</a></li>
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Transportation Management</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<h5>Services</h5>
				<ul class="list-unstyled quick-links">
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Hotel Room Booking</a></li>
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Doctor Appointment Booking</a></li>
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Hospital Cabin Booking</a></li>
					<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Rent A Car</a></li>
				
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100004571835201"><i class="fa fa-facebook"></i></a></li>
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
				<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="#" target="_blank">Sylvanture</a></p>
			</div>
			</hr>
		</div>  
	</div>
</section>
<!-- ./Footer -->

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