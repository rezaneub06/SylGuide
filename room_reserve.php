<?php 
  $id="";
  if (isset($_GET['id'])) {
    $id = $_GET['id'];//$_POST['id']
    // echo $id;
  }

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

    <!-- 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_hotel.css"> 
    <link rel="stylesheet" href="css/reserve_style.css">


    <title>Room Reserve</title>
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

   <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form mt-5">
            <div class="form-header mt-5">
              <h1>Make your reservation</h1>
            </div>
            <form action="db/room_confirm.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Please enter your name" required>
                <span class="form-label">Name</span>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="date" name="datein" required id="m_datein" min="<?php echo date('Y-m-d'); ?>">
                    <span class="form-label">Check In</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="date" required  name="dateout" id="m_dateout" min="<?php echo date('Y-m-d'); ?>">
                    <span class="form-label">Check out</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="form-control" required name="rooms">
                      <option value="" selected hidden>no of rooms</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3+</option>
                    </select>
                    <span class="select-arrow"></span>
                    <span class="form-label">Rooms</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="form-control" required name="adults">
                      <option value="" selected hidden>no of adults</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4+</option>
                    </select>
                    <span class="select-arrow"></span>
                    <span class="form-label">Adults</span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <select class="form-control" required name="children">
                      <option value="" selected hidden>no of children</option>
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4+</option>

                    </select>
                    <span class="select-arrow"></span>
                    <span class="form-label">Children</span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Enter your Email" name="email" required>
                    <span class="form-label">Email</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="tel" placeholder="Enter you Phone" name="phone" required>
                    <span class="form-label">Phone</span>
                  </div>
                </div>
              </div>
              <div class="form-btn">
                <div class="form-group">
                  <button type="submit" name="confirm" class="submit-btn" data-toggle="modal" data-target="#exampleModalCenter">Hotel Book Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
          <?php if ($success_message): ?>
            <h1 class="text-center text-success"><b>Hurray!!!</b></h1>
            <p>"<b>Your Hotel Reservation Request is Accepted.</b> We will notify you all the information regarding this form within 2 hours via email"</p>
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

  <script type="text/javascript">
    var url = window.location.href;
    if(url.indexOf('?success_message') != -1 || url.IndexOf('/error_message') != -1) {
        $('#exampleModalCenter').modal('show');
    }else{
      $('#exampleModalCenter').modal('hide');
    }
  </script>
</body>
</html>