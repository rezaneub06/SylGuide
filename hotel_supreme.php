<!DOCTYPE html>
<html>
<head>
    <title>SylGuide</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .carousel-item{
            height: 400px;
            background-color: black;
    
        } 
        .carousel-item img{
            height: 400px;
            width: 100%;
            margin: auto;
        }
        #hotelCarosel{
            padding-top: 100px;
            padding-bottom: 50px;
        }
        
    </style>
</head>

<body>

    <header id="header">   
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg full-width">
                    <a class="navbar-brand" href="index.html">SylGuide</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="ToggleNavigation">
                     <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav">
                            <li class="nav-item "><a href="toursight.html" class="nav-link">Tour Sight</a></li>
                            <li class="nav-item"><a href="hotel.html" class="nav-link">Hotel Booking</a></li>
                            <li class="nav-item"><a href="cars.html" class="nav-link">Transportation</a></li>
                            <li class="nav-item"><a href="food_gallery.php" class="nav-link">Food Gallery</a></li>
                            <li class="nav-item"><a href="medical_emergency.html" class="nav-link">Medical Emergency</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div> 
    </header>

    <!-- ======================================== carousel Slider Start ================================================-->
    <section id="hotelCarosel">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="images/HSR_queensuit.jpg" alt="First slide" width="700" height="500">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="images/HSR_deluxedouble.jpg" alt="Second slide" width="700" height="500">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="images/HSR_familyroom.jpg" alt="Third slide" width="700" height="500">
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
    </section>
    <!-- ======================================== carousel Slider End ================================================-->

    <!-- ======================================== Hotel Rooms Section Start ================================================-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="hotel-content">
                        <div class="hotel-grid" style="background-image: url(images/HSR_familyroom.jpg);">
                            <div class="price"><small>Price</small><span>BDT 1,700/night</span></div>
                            <a class="book-now text-center" href="room_reserve.html" target="_blank"><i class="ti-calendar"></i> Reserve Room</a>
                        </div>
                        <div class="desc">
                            <h3>Deluxe Family room</h3>
                            <p>This family room has a sofa, air conditioning and tile/marble floor.</iframe></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    <!-- ======================================== Hotel Rooms Section End ================================================-->

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


    <script type="text/javascript">
        function slideshow() {

            var x = document.getElementById('class-check');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

        }
    </script>


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>