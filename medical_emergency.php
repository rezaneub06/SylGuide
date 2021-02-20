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

    <!-- 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css">
    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_hotel.css"> 

    <title>SylGuide | Medical Emergency</title>
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
              <li class="nav-item"><a href="food_gallery.php" class="nav-link">Food Gallery</a></li>
              <li class="nav-item"><a href="medical_emergency.php" class="nav-link active">Medical Emergency</a>
                <ul class="subMenu">
                                <li><a href="#specialist" class="nav-link">Specialist</a></li>
                                <li><a href="#hospitals" class="nav-link">Hospitals</a></li>
                                <li><a href="#ambulance" class="nav-link">Ambulance Service</a></li>
                                 <li><a href="#section-counter" class="nav-link">Appointment & Booking</a></li>
                            </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div> 
  </header>
    
  <!---------------------------- Slider ---------------------------->

    <div id="fh5co-page">
      <div id="fh5co-header">
      </div>
      <div class="fh5co-parallax" style="background-image: url(images/slide_head.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
              <div class="fh5co-intro fh5co-table-cell">
                <h1 class="mb-4">Medical Emergency <span>Stay Happy Stay Healthy</span></h1>
              <h3 class="text-white">Everyday We Try To Bring Hope and Smile to the Patient We Serve</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

            
    <!--===================================== End of Slider =====================================-->
    <!-- ====================================Service Section========================================-->

    <section class="ftco-services ftco-no-pb">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span><img src="images/doctor.png" alt="" class="img-circle"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Qualitfied Doctors</h3>
                <p>We provide a list of qualified doctors which also includes contact information,
                 department,and their outdoor checkup information. </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span><img src="images/emergencyCare.jpg" alt="" class="img-circle"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Emergency Care</h3>
                <p>For any medical emergency call 999 immediately.A list of ambulance service information
                is also provided.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span><img src="images/progressive2.png" alt="" class="img-circle"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Progressive</h3>
                <p>We are Progressive in service to our patients and local communities, and a national leader in healthcare service provision.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span><img src="images/247.jpg" alt="" class="img-circle"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">24 Hours Service</h3>
                <p>We are always here to provide round-the-clock emergency and hospitalization services,contact us at any moment and we'll reach to you as soon as possible</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <!-- ====================================End of Service Section==================================-->

    <!-- ========================================Specialist=================================== -->

    <section id="specialist" class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">SPECIALIST</span>
            <h2 class="mb-4">Best Specialists In  Town</h2>
            <p>To see a specialist, you will need to get serial number of referral from the doctor's Assistant first. Specialists work in clinics, and in both private and public hospitals. When you see a specialist, prepare by noting down your symptoms and by wearing easily removable clothing. Make sure you understand everything the specialist tells you. Ask questions, take notes or take someone with you.</p>
          </div>
        </div>

        
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="our-departments-wrap">
                <h2 class="text-center">Specialists With Departments</h2>

                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="our-departments-cont">
                      <header class="entry-header d-flex flex-wrap align-items-center">

                        <h3><b>Cardiologist</b></h3>
                      </header>

                      <footer class="entry-footer">
                        <a>DR. AJOY KUMAR DATTA</a>
                      </footer>

                      <div class="entry-content">
                        <p>Chamber:
                          Medi Aid Diagnostic And Consultation Center,
                          Madhu Shahid, Medical Road, Sylhet.
                        </p>
                        <p>Qualifications: MBBS, MD (Cardiology), NICVD.</p>

                      </div>

                      <footer class="entry-footer">
                        <a>DR. K M AKHTARUZZAMAN</a>
                      </footer>

                      <div class="entry-content">
                        <p>Chamber:
                          Mount Adora Hospital
                          Mirboxtula, New Road, Sylhet,
                        </p>
                        <p>Qualifications: MBBS, DCM, MCPS (Medicine), Md (Cardiology)</p>

                      </div>

                      <footer class="entry-footer">
                        <a>DR. MD AMINUR RAHMAN LASKAR</a>
                      </footer>

                      <div class="entry-content">
                        <p>Chamber:
                         Royal Hospital
                         Zinda Bazar, Lichu Bagan, Airport Road, Sylhet.

                       </p>
                       <p>Qualifications: MBBS, D.Card Member, European Cardiology Society.</p>

                     </div>
                   </div>
                 </div>


                 <div class="col-12 col-md-6 col-lg-4">
                  <div class="our-departments-cont">
                    <header class="entry-header d-flex flex-wrap align-items-center">

                      <h3><b>Medicine</b></h3>
                    </header>
                    <footer class="entry-footer">
                      <a>Dr. MD Jalal Hossen</a>
                    </footer>

                    <div class="entry-content">
                      <p>Chamber: popular  Medical  Center & Hospital  Sylhet</p>
                      <p>Qualifications: MBBS,FCPS(Medicine) BCS (health)</p>
                    </div>

                    <footer class="entry-footer">
                      <a>DR. MD Fojle Bari</a>
                    </footer>

                    <div class="entry-content">
                      <p>Chamber: Popular  Medical  Center & Hospital  Sylhet</p>
                      <p>Qualifications: MBBS,MD(Medicine)</p>
                    </div>

                    <footer class="entry-footer">
                      <a>Dr. MD Fayzul Islam Chowdhury</a>
                    </footer>

                    <div class="entry-content">
                      <p>Chamber: Ibn Sina Hospital Sylhet Ltd,Sylhet.</p>
                      <p>Qualifications: MBBS,FCPS(Medicine),PHD(America) Member,American collage of physician felo(WHO,THAILAND)
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                  <div class="our-departments-cont">
                    <header class="entry-header d-flex flex-wrap align-items-center">

                      <h3><b>Orthopaedist</b></h3>
                    </header>
                    <footer class="entry-footer">
                      <a>DR. MD. MOSTAFIZUR RAHMAN RAKIB</a>
                    </footer>
                    <div class="entry-content">
                      <p>Chamber: 49 stadium Market, 1st Floor, Sylhet.</p>
                      <p>Qualifications: MBBS (DMC), BCS (Health) FCPS (Medicine- Final Part) MD (Neuro Medicine Thesis)</p>
                    </div>

                    <footer class="entry-footer">
                      <a>DR. MD. SHAFIULLAH</a>
                    </footer>
                    <div class="entry-content">
                      <p>Chamber: The Lab Aid 61/63 Stadium Market, Ground Floor, Sylhet.</p>
                      <p>Qualifications: MBBS, DEM, MD (Medicine)</p>
                    </div>

                    <footer class="entry-footer">
                      <a>Dr.  Bilkis Sultana</a>
                    </footer>

                    <div class="entry-content">
                      <p>Chamber: Al Haramain Hospital Pvt. Ltd,Sylhet.</p>
                      <p>Qualifications: M.B.B.S, MD (Internal Medicine)</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>


    <!-- =====================================End of Specialists====================================== -->

    <!--====================================== Hospital list=========================================== -->
    
    <section id="hospitals" class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">HOSPITALS</span>
            <h2 class="mb-4">Our Best Hospitals In Town</h2>
            <p>There are both private and government hospitals in sylhet city which are  ultra-modern, multi-storey and multi-specialty.They provide quality health care to the people of Sylhet in particular, and people of the division and beyond in general.</p>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/oasis.png);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Oasis Hospital</h3>
                <span class="position mb-2">01611990000</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.294828585027!2d91.87757481431606!3d24.887923084040953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab2decf85137%3A0x26f5c13c01bdc33e!2sOasis%20Hospital!5e0!3m2!1sen!2sbd!4v1573720010884!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/alharamain.jpg);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>AL Haramain Hospital PVT Limited</h3>
                <span class="position mb-2">01931225555</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.265803668131!2d91.87753581431596!3d24.888913484040533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab2d9985f76f%3A0x5f56b6ff53d48aa6!2sAl%20Haramain%20Hospital%20Private%20Limited!5e0!3m2!1sen!2sbd!4v1573720763185!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100004571835201"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/ibnsina.jpg);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>IBN Sina Hospital LTD</h3>
                <span class="position mb-2">01938865257</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.1854607868677!2d91.87534351431606!3d24.8916547840392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab2cd07daf7b%3A0x6b15e9357e82b123!2sIbn%20Sina%20Hospital%20Sylhet%20Ltd!5e0!3m2!1sen!2sbd!4v1573721285268!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100004571835201"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/mountadora.jpg);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Mount Adora Hospital</h3>
                <span class="position mb-2">01786637476</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.0894769226284!2d91.86651761431617!3d24.894929384037656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055be49c8275d%3A0xc925d90de1aafef6!2sMount%20Adora%20Hospital%2C%20Nayasarak!5e0!3m2!1sen!2sbd!4v1573721629125!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100004571835201"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/womensmedical.jpg);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Women's Medical College Hospital</h3>
                <span class="position mb-2">0821-720123</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.9834664699724!2d91.87034891431624!3d24.898545584035997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d67663f2fb%3A0xdcda02b3f1e7750d!2sSylhet%20Women&#39;s%20Medical%20College%20Hospital!5e0!3m2!1sen!2sbd!4v1573721919659!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100004571835201"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/ragibrabeya.jpg);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Jalalabad Ragib-Rabeya medical college & Hospital</h3>
                <span class="position mb-2">0821-719090</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.548052629061!2d91.8502124144786!3d24.91339314927072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750553f0bb112bf%3A0x609ec1bb21b3706a!2sJalalabad%20Ragib-Rabeya%20Medical%20College%20%26%20Hospital!5e0!3m2!1sen!2sbd!4v1573825746504!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>



          

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/osmani.jpg);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>M.A.G. Osmani Medical College</h3>
                <span class="position mb-2">0821-713667</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.896683077428!2d91.85173871447842!3d24.901505549745085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505536fc295c15%3A0xb1ba8a7f7a0c7a90!2sSylhet%20M.A.G.%20Osmani%20Medical%20College!5e0!3m2!1sen!2sbd!4v1573826048755!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(images/n2.jpg);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>North East Medical College</h3>
                <span class="position mb-2">0821-728587</span>
                <div class="faded">
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.5485894371914!2d91.8993523144786!3d24.913374849271474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054a2e6decdcf%3A0xe196bec14aa030bf!2sNorth%20East%20Medical%20College!5e0!3m2!1sen!2sbd!4v1573826349477!5m2!1sen!2sbd" width="300" height="100" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                  <ul class="ftco-social text-center">
                    <li class="list-inline-item"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>



                    
        </div>
      </div>
    </section>

    <!--================================End of hospital list=======================================  -->

    <!-- ==========================================Ambulance Section======================================== -->

    <section id="ambulance" class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            
            <h2 class="mb-4">Ambulance Service</h2>
            <p>Need Ambulance? 24 hours very Fast and Comfortable ambulance service with low rate. Low Cost. Quality Services.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              
              <ul>
                 <li class="colorfulText"><span>Name:</span>Masum Traders Ambulance Service Ltd.</li>
                            <li><span>Addtress:</span>Osmani Medical Road, Kajolshah, Sylhet.</li>
                            <li><span>Contact No:</span>  01711-300196, 01714-628544.</li>
              </ul>
              
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              
              <ul>
                 <li class="colorfulText"><span>Name:</span>Parapar Enterprise Ambulance Service.</li>
                            <li><span>Addtress:</span>Al-Mokkah Shopping City, 116, Kajolshah, Sylhet.</li>
                            <li><span>Contact No:</span>01716-055680, 0821-720132.</li>
              </ul>
              
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              
              <ul>
                  <li class="colorfulText"><span>Name:</span>Joruri Ambulance Service Limited.</li>
                            <li><span>Addtress:</span>Al-Modina Shopping City, 176, Modina Market, Sylhet.</li>
                            <li><span>Contact No:</span>01795-871929.</li>
              </ul>
              
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              
              <ul>
              <li class="colorfulText"><span>Name:</span>Nurani Ambulance Service Limited.</li>
                            <li><span>Addtress:</span>Electric Supply Road,Kazitula,Sylhet.</li>
                            <li><span>Contact No:</span>0821-722000, 0821-719241</li>
              </ul>
              
            </div>
          </div>


        </div>
      </div>
    </section>


    <!-- ===========================================End of Hospital Section===================================== -->

    <!-- ===========================================Appoint Section========================================== -->
        <!-- Appointment -->

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 py-5 pr-md-5">
            <div class="heading-section heading-section-white ftco-animate mb-5">
              
              <h2 class="mb-4">APPOINTMENT</h2>
              <p>Make an appointment to visit doctor. Here you can easily book an appointment to visit any
              particular doctor in shortest amount of time without any hectics.</p>
            </div>

            <form action="db/medical_confirm.php" method="post" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required="required">
                </div>
                <div class="form-group ml-md-4">
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="required">
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-between">
                <div class="form-group">
                  <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone" required="required">
                </div>
              </div>


               <form class="d-flex flex-wrap justify-content-between">
                            
                          <div class="form-group">
                            <select class="select-doctor" name="doctor" required="required">
                                <option>Select doctor</option>
                                <option value="DR. AJOY KUMAR DATTA">DR. AJOY KUMAR DATTA</option>
                                <option value="DR. K M AKHTARUZZAMAN">DR. K M AKHTARUZZAMAN</option>
                                <option value="DR. MD AMINUR RAHMAN LASKAR">DR. MD AMINUR RAHMAN LASKAR</option>
                                <option value="Dr. MD Jalal Hossen">Dr. MD Jalal Hossen</option>
                                <option value="DR. MD Fojle Bari">DR. MD Fojle Bari</option>
                                <option value="Dr. MD Fayzul Islam Chowdhury">Dr. MD Fayzul Islam Chowdhury</option>
                                <option value="DR. MD. MOSTAFIZUR RAHMAN RAKIB">DR. MD. MOSTAFIZUR RAHMAN RAKIB</option>
                                <option value="DR. MD. SHAFIULLAH">DR. MD. SHAFIULLAH</option>
                                <option value="Dr. Bilkis Sultana">Dr. Bilkis Sultana</option>
                            </select>
                          </div>


              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="date" name="bookingDate" id="" required="required" class="form-control appointment_date" placeholder="Date" min="<?php echo date('Y-m-d'); ?>">
                  </div>
               </div>
                
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" name="drConfirm" value="Appointment" class="btn btn-info py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter">
                </div>
              </div>
            </form>
          </div>


          <!-- End of Appointment -->
                
                <!-- Cabin Booking -->

          <div class="col-md-6 py-5 pr-md-5">
            <div class="heading-section heading-section-white ftco-animate mb-5">
              
              <h2 class="mb-4">Cabin Booking</h2>
              <p>Book your cabin fast and without any complexity in emergency.You can book a cabin from the best 
              hospital in sylhet town with various range of budget.</p>
            </div>
            <form action="db/medical_confirm.php" method="post" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required="required">
                </div>
                <div class="form-group ml-md-4">
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required="required">
                </div>
              </div>
              <div class="d-flex flex-wrap justify-content-between">
                <div class="form-group">
                  <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone" required="required">
                </div>
              </div>


               <form class="d-flex flex-wrap justify-content-between">
                          <div class="form-group">
                            <select class="select-doctor" name="hospital" required="required">
                                <option>Select Hospital</option>
                                <option value="Oasis Hospital">Oasis Hospital</option>
                                <option value="AL Haramain Hospital">AL Haramain Hospital</option>
                                <option value="IBN Sina Hospital Limited">IBN Sina Hospital Limited</option>
                                <option value="Popular Medical Centre">Popular Medical Centre</option>
                                <option value="Mount Adora Hospital">Mount Adora Hospital</option>
                                <option value="Women's Medical College">Women's Medical College.</option>
                                <option value="Park View Medical Hospital">Park View Medical Hospital</option>
                                <option value="Jalalabad Ragib-Rabeya medical Hospital">Jalalabad Ragib-Rabeya medical Hospital</option>

                            </select>
                          </div>

                            


              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="date" name="bookingDate" id="pickDate" class="form-control appointment_date" required="required" placeholder="Date" min="<?php echo date('Y-m-d'); ?>">
                  </div>
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" name="cabinConfirm" value="Booking" class="btn btn-info py-3 px-4">
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>

    <!-- End of cabin -->

<!-- ================================================End of Appointment Section=============================== -->
    

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
            <p>"Your request for Appointment is accepted. We will contact you within 2 hours"</p>
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