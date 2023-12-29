<!DOCTYPE html>
<html lang="en">
<head>

     <title>DWAB</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/landing-home.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
             <img src="/image/logo.png" alt="logo" width="140" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#service" class="nav-link">Service & Support</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/register') }}" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link contact">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">MEET YOUR FRIEND, FIND YOUR TRIBE</h1>

                                   <a href="{{ url('/login') }}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="image/comunity.png" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>

     <!-- ABOUT -->
     <section class="about section-padding pb-0">
        <div class="container">
             <div class="row">

                  <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">

                        <h2 class="mb-4" data-aos="fade-up">Experience the enchantment of <strong>musical harmony</strong> in our vibrant community!</h2>

                        <p class="mb-0" data-aos="fade-up">Delve into the magic of music with us. Join our community to share your musical passion, craft harmonious melodies, and forge enduring musical connections!
                        <br><br>You are <strong>welcome</strong> to participate in our community for personal or professional purposes. However, redistribution of our community content without permission is prohibited.</p>
                    </div>

                       <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                        <img src="image/office.png" class="img-fluid" alt="office">
                      </div>
                  </div>

             </div>
        </div>
   </section>

   <footer class="site-footer" id="service">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">
            We cultivate imaginative <strong>identities</strong> exclusively.
        </h1>
          </h1>
        </div>

        <div
          class="col-lg-3 col-md-6 col-12"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <h4 class="my-4">Contact Info</h4>

          <p class="mb-1">
            <i class="fa fa-phone mr-2 footer-icon"></i>
            +62 812 6059 1970
          </p>

          <p>
            <a href="#">
              <i class="fa fa-envelope mr-2 footer-icon"></i>
              dwab@gmail.com
            </a>
          </p>
        </div>

        <div
          class="col-lg-3 col-md-6 col-12"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <h4 class="my-4">Our Studio</h4>

          <p class="mb-1">
            <i class="fa fa-home mr-2 footer-icon"></i>
            Jl. Sitoluama, Kec. Balige, Kab. Toba, Institut Teknologi Del, Sumatera Utara - Indonesia
          </p>
        </div>

        <div
          class="col-lg-4 mx-lg-auto text-center col-md-8 col-12"
          data-aos="fade-up"
          data-aos-delay="400"
        >
        </div>
      </div>
    </div>
  </footer>



     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
