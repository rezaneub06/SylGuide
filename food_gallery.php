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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_hotel.css"> 

    <title>SylGuide | Food Gallery</title>
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
              <li class="nav-item"><a href="food_gallery.php" class="nav-link active">Food Gallery</a>
                 <ul class="subMenu">
                               
                                <li><a href="#section-offer" class="nav-link">Trending Restaurents</a></li>
                                <li><a href="#section-news" class="nav-link">Traditional Food</a></li>
                               
                            </ul>
              </li>
              <li class="nav-item"><a href="medical_emergency.php" class="nav-link">Medical Emergency</a>
               
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div> 
  </header>

  <section class="site-cover" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To Sylhety Food</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Come and eat well with our delicious &amp; healthy foods.</h2>    
            <p><a href="https://colorlib.com/" target="_blank" class="btn btn-info btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p>

            <?php
              if ($success_message):
                  echo "<div class='alert alert-success container text-center'><h3>Hurray! Your request for booking a table is accepted.We will notify you all the information regarding this form within 2 hours via email</h3></div>";
              elseif ($error_message):
                  echo "<div class='alert alert-danger container text-center'><h3>Oppps Something Went Wrong</h3></div>";
              else:
                  echo "<div class='Alert' style='display:none'>Thank You</div>";
              endif;
            ?>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    

    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Dear Foodies</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>Sylheti’s are mainly rice and fish eaters and their choice and method of cooking is distinctly different to non-Sylheti’s.</p>

            <p class="mb-4"> Food varieties included many types of meat dishes including chicken, beef and goat cooked Moghlai, Middle-Eastern, and Northern Indian style. Such dishes include Moghlai Porota, Pilau, Korma, Kalia, Roast, Biriyani, Kofta curry, and for desserts, the likes of Zardah, Firni and Kheer.Most attractive dish in Sylhet is Shatkora with Beef.</p>
          
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/header.png" alt="Free Template by colorlib.com" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-offer">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-3 site-animate">
      
            <h3 class="display-4">Our Trending Restaurants In Town </h3>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Here are the most popular restaurant in Sylhet.This restaurants are 
                frequently visited by adults,students,families and specially youngsters.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurent_madgrill.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">01954-556677</h5>
                    <h5 class="mt-0 h4">The Mad Grill</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.952269177293!2d91.87295601431627!3d24.899609684035543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d6b9d9076d%3A0x86917f7de300bb40!2sThe%20Mad%20Grill!5e0!3m2!1sen!2sbd!4v1574666799563!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                   
                  </div>
                </div>
              </div>

                 <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurent_woondal.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">01717-020505</h5>
                    <h5 class="mt-0 h4">Woondaal King Kebab</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0788653868403!2d91.86869341431618!3d24.89529138403748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d57e3993d1%3A0xb1d8b48c003c486a!2sWoondaal%20King%20Kabab!5e0!3m2!1sen!2sbd!4v1574667123807!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                   
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurent_spicy.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">01714-630060</h5>
                    <h5 class="mt-0 h4">Spicy Restaurant</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0684383862317!2d91.86598501500352!3d24.895647084037364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552afbd01633%3A0xf1f9fd3da7c98952!2sSpicy%20Restaurant%20%26%20Party%20Center!5e0!3m2!1sen!2sbd!4v1574711219741!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_etopia.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">01617-123321</h5>
                    <h5 class="mt-0 h4">Etopia</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.07583386288!2d91.86746771447825!3d24.89539479998885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d55d9d297d%3A0xd5beea6c78ee14e1!2sEatopia%20Kabab%20%26%20Curry!5e0!3m2!1sen!2sbd!4v1574711552669!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    <                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_platinum.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">01710-272539</h5>
                    <h5 class="mt-0 h4">Platinum Lounge</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57901.15583934498!2d91.87389122069011!3d24.90404435693921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055592bfdccb5%3A0xf96f68d1ceaa4835!2sPlatinum%20Lounge!5e0!3m2!1sen!2sbd!4v1574711947779!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_mughal.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">01742-033333</h5>
                    <h5 class="mt-0 h4">Mughal Masala</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14475.593007539042!2d91.86637108071986!3d24.90145204455183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505528f84cbd1b%3A0x53e3e2f94ca7eb04!2sMughal%20Masala!5e0!3m2!1sen!2sbd!4v1574712493131!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_nawab.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">01730-721734</h5>
                    <h5 class="mt-0 h4">Nawab's Kitchen</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0538954628287!2d91.87103421431615!3d24.896143184037093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055aef6da29f5%3A0x1a11d8c47f5f4417!2sNawabs%20Kitchen!5e0!3m2!1sen!2sbd!4v1574713409242!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_kfc.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary">09613-777666</h5>
                    <h5 class="mt-0 h4">KFC Sylhet</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0469448990757!2d91.86601741431623!3d24.896380284037008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552bb3c8cef5%3A0x31b7248be29d16b3!2sKFC%20Sylhet!5e0!3m2!1sen!2sbd!4v1574714169551!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                                    
                </div>
                </div>
              </div>
              
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_pizza.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary"> 0821-720405</h5>
                    <h5 class="mt-0 h4">Pizza HUt</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0468159129136!2d91.8660357143162!3d24.896384684036942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552bb28c6e01%3A0x97b12b869d0828a!2sPizza%20Hut!5e0!3m2!1sen!2sbd!4v1574714319394!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_palki.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary"> 0821-720405</h5>
                    <h5 class="mt-0 h4">Palki restaurant </h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0977549927793!2d91.86737731500351!3d24.894646984037774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552af2da5329%3A0x512a3dde5dca7d1!2sPalki%20Restaurant!5e0!3m2!1sen!2sbd!4v1574867199572!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_vujon.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary"> 0821-720405</h5>
                    <h5 class="mt-0 h4">Vujon Bari HUt</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.095744109883!2d91.86532451431616!3d24.894715584037797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552b11cb62bd%3A0x74d93d2521787a1a!2sBhojon%20Bari%20Restaurant!5e0!3m2!1sen!2sbd!4v1574867318221!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="images/restaurant_panshi.jpg" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-4">
                    <h5 class="text-primary"> 0821-720405</h5>
                    <h5 class="mt-0 h4">Panshi Restaurant</h5>
                    <p class="mb-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0977549927793!2d91.86737731431617!3d24.89464698403777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552af2da5329%3A0x512a3dde5dca7d1!2sPalki%20Restaurant!5e0!3m2!1sen!2sbd!4v1574869386708!5m2!1sen!2sbd"  width="300" height="100" frameborder="0" style="border:;" allowfullscreen=""></iframe></p>

                   
                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-news">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Traditionl Food In Sylhet</h2>
            <div class="row justify-content-center">
              <div class="col-md-10">
                <p class="lead">Sylheti’s are mainly rice and fish eaters and their choice and method of cooking is distinctly different to non-Sylheti’s. Traditional dishes will include sour dishes such as tengha cooked with vegetables such as Amra, Defal, Olives, Dewwaa, Amshi, Mango Choti, KulBoroi, Hatkhora,Ada Zamir,and any other sour lemon-like tasty vegetable.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate bg-light">
              <img src="images/traditional_satkora.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Shatkhora</h5>
                <p class="mb-4"> A shatkora is a citrus fruit growing in the Sylhet region and used in cooking.</p>

                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate bg-light">
              <img src="images/traditional1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">shutki</h5>
                <p class="mb-4">“ Hoootki sira” is famous food, it is cooked as a curry by rooten dry fish. </p>

                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate bg-light">
              <img src="images/traditional2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Vorta</h5>
                <p class="mb-4">Vorta is also famous and delicious food.The famous restaurant such as Panshi,Bhojon Bari,Palki,Pach vai they provide lots of vora iteam</p>

                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate bg-light">
              <img src="images/traditional_saat.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Saat Rong Cha</h5>
                <p class="mb-4"> সাত রং চা is a well-known hot beverage in Bangladesh.Each layer contrasts in color and taste, ranging from syrupy sweet to spicy clove. The seven-color tea is available in the Nilkantha Tea Cabin, a tea shop in Srimongol, Moulvibazar.</p>

                
              </div>
            </div>


          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate bg-light">
              <img src="images/traditional_komla.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">komla lebu</h5>
                <p class="mb-4">Orange farmers in Beanibazar, Golapganj, Gowainghat, Companiganj and Jaintapur in Sylhet and Kulaura, Barolekha, Juri, Srimangal and Komolganj of Moulvibazar and Chhatak and Doarabazar upazilas of Sunamganj in the region used to enjoy bountiful yields of this seasonal fruit. </p>

                
              </div>
            </div>


          </div>



           <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate bg-light">
              <img src="images/beef-shatkora.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Goru With Shatkora</h5>
                <p class="mb-4">A citrus fruit similar in size and flavour to a grapefruit and unique to the countryside around that area. This fruit makes a very special beef curry.</p>

                
              </div>
            </div>


          </div>


        </div>
      </div>
    </section>
    <!-- END section -->

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
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h2 class="text-center mb-4">Reserve A Table</h2>  
                <form action="db/food_confirm.php" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Please enter your name" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="Enter your Email" name="email" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="tel" placeholder="Enter you Phone" name="phone" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <select class="form-control" required name="restaurant">
                          <option value="" selected hidden>Choose Your Restaurent</option>
                          <option value="Panshi_Restaurant">Panshi Restaurant</option>
                          <option value="Vujonbari_Restaurant">Vujonbari Restaurant</option>
                          <option value="Palki_Restaurant">Eatopia</option>
                          <option value="Kazi_Asparagus_Restaurant">The mad grill</option>
                          <option value="Kazi_Asparagus_Restaurant">Spicy Restaurant</option>
                          <option value="Kazi_Asparagus_Restaurant">Woondaal king kaba</option>
                          <option value="Kazi_Asparagus_Restaurant">Mughal Masala</option>
                          <option value="Kazi_Asparagus_Restaurant">Platinum lounge</option>
                          <option value="Kazi_Asparagus_Restaurant">Nawabs kitchen</option>
                          <option value="Kazi_Asparagus_Restaurant">Kfc Restaurant</option>
                          <option value="Kazi_Asparagus_Restaurant">pzza hut Restaurant</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select class="form-control" required name="person">
                          <option value="" selected hidden>No of Person</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3+</option>
                          <option value="4andMore">4+</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input class="form-control" type="date" name="bookingDate" required id="m_datein" min="<?php echo date('Y-m-d'); ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select class="form-control" required name="bookingTime">
                          <option value="" selected hidden>Pick Your Desire Time</option>
                          <option value="7AM">10 AM</option>
                          <option value="8AM">11 AM</option>
                          <option value="2PM">12 PM</option>
                          <option value="2PM">1 PM</option>
                          <option value="2PM">2 PM</option>
                          <option value="2PM">3 PM</option>
                          <option value="2PM">4 PM</option>
                          <option value="2PM">5 PM</option>
                          <option value="2PM">6 PM</option>
                          <option value="2PM">7 PM</option>
                          <option value="3PM">8 PM</option>
                  
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Write Your Message Here"></textarea>
                      </div>
                    </div>
                  </div>
              
                  <div class="form-btn">
                    <div class="form-group">
                      <button type="submit" name="foodConfirm" class="submit-btn btn btn-learn btn-block">Book Now</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->




  

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