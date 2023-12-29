<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Find Your Community</title>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Additional CSS Files -->
  <script src="https://kit.fontawesome.com/9f5880d0c8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css/findyourcommunity.css">
  <link rel="stylesheet" href="css/owl2.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
  </head>

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="image/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/home">Home</a></li>
                        <li>
                            <a href="#service" class="nav-link">
                                <div style="display: flex; align-items: center;">
                                    Service & Support
                                </div>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item dropdown" style="position: relative; margin-left:10px">
                        <a class="nav-link" style="margin-top: 15px" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('uploads/profile_path/' . auth()->user()->profile_path) }}" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <span style="color:white">{{ Auth::user()->name }} </span><i class="fa-solid fa-caret-down fa-2xs" style="color: #ffffff; margin-left:5px"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-left: 20px;">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('user.edit', auth()->user()) }}">Edit Profile</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>


                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Take a Glimpse Into The Beautiful Country Of:</h2>
              <h1>Caribbean</h1>
              <div class="border-button"><a href="#community">Go There</a></div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <nav>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <div class="visit-country">
    <div class="container" id="community">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Visit One Of Our Countries Now</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <div class="main-button">
                <a style="margin-top:20px; margin-right:5px" href="/community/create">Create Community</a>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($community as $community )
        <div class="col-lg-8">
          <div class="items">
            <div class="row">
              <div class="col-lg-12">
                <div class="item">
                  <div class="row">
                    <div class="col-lg-4 col-sm-5">
                      <div class="image">
                        <img src="{{ url('uploads/community/' . $community->image) }}" alt="Community Image">
                      </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                      <div class="right-content">
                        <h4>{{$community->title}}</h4>
                        <div class="main-button">
                          <a href="{{ url('community/' . $community->slug) }}">Explore More</a>
                        </div>
                        <p>{{ substr($community->Description, 0, 150) }}{{ strlen($community->Description) > 150 ? "..." : "" }}</p>
                        <ul class="info">
                            <i class="fa-solid fa-tags" style="color: #ababab;"></i><span style="display: inline-block; margin-left: 10px;" >{{$community->category_name}}</span>
                        </ul>
                        <div class="text-button">
                          <a href="{{$community->whatsapp}}">join Community <i class="fa fa-arrow-right"></i><i class="fa-brands fa-whatsapp fa-beat" style="color: #22b3c1;"></i></a>
                        </div></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
<footer>
            <div class="container" id="service">
              <div class="row">
                <!-- Kolom pertama -->
                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                  <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">
                    We cultivate imaginative identities exclusively.
                  </h1>
                </div>

                <!-- Kolom kedua -->
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                  <h4 class="my-4" style="color:white">Contact Info</h4>
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

                <!-- Kolom ketiga -->
                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                  <h4 class="my-4" style="color:white">Our Studio</h4>
                  <p class="mb-1">
                    <i class="fa fa-home mr-2 footer-icon"></i>
                    Jl. Sitoluama, Kec. Balige, Kab. Toba, Institut Teknologi Del, Sumatera Utara - Indonesia
                  </p>
                </div>

              </div>
            </div>
</footer>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom2.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
