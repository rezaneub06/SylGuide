<?php 
  $id="";
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
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

    <title>SYLVENTURE | Car Reservation</title>
</head>
<body>
  <header id="header">   
    <div class="container">
      <div class="row">
       
      </div>
    </div> 
  </header>


   <div id="booking" class="section" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.7)), url('images/car_header.jpg'); background size: cover;height: 100vh;background-position: center; position: relative;">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form mt-5">
            <div class="form-header mt-3">
              <h1>Make your Vehicle Ready</h1>
            </div>

            <form autocomplete="off" method="POST" action="db/car_confirm.php">
              
              <input type="hidden" name="id" value=<?php echo $id; ?>>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control" name="pickup" style="height: 60px;">
                      <option value="1" selected hidden>Pickup Point</option>
                      <option value="1">Zindabazr</option>
                      <option value="2">Amborkhana</option>
                      <option value="3">Tilagor</option>
                      <option value="4">Subhanighat</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="date" required name="pickupDate" id="m_datein" min="<?php echo date('Y-m-d'); ?>">
                    <span class="form-label">Date</span>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control" name="dropoff" style="height: 60px;">
                        <option value="1" selected hidden>Drop off Point</option>
                       <option value="1">Zindabazr</option>
                      <option value="2">Amborkhana</option>
                      <option value="3">Tilagor</option>
                      <option value="4">Subhanighat</option>
                      </select>
                    <span class="select-arrow"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="date" required name="dropoffDate" id="m_dateout" min="<?php echo date('Y-m-d'); ?>">
                    <span class="form-label">Date</span>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control txt-field m-2" type="text" name="name" required placeholder="Your name">
                    <span class="form-label">Your Name</span>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control txt-field m-2" type="email" name="email" required placeholder="Email address">
                    <span class="form-label">Your Email</span>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <input class="form-control txt-field m-2" type="tel" name="phone" required placeholder="Phone Number">
                    <span class="form-label">Your Phone Number</span>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 p-0 text-center">
                  <button type="submit" name="carConfirm" class="btn btn-info mt-2 py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter">Confirm Car Booking</button>
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
            <h1 class="text-center text-success"><b>Thank You</b></h1>
            <p>"Your Transportation Reservation Request is Accepted.</b> We will notify you all the information regarding this form within 2 hours via email"</p>
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