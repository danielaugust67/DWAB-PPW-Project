<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>VertiCard by TemplateMo</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min2.css') }}">
  <link rel="stylesheet" href="{{ asset('css/show.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" >
  <script src="https://kit.fontawesome.com/9f5880d0c8.js" crossorigin="anonymous"></script>
<!--
Verticard Template
https://templatemo.com/tm-533-verticard
-->
</head>

<body>
  <div class="tm-page-container mx-auto">
    <header class="tm-header text-center">
        <h1 class="tm-title text-uppercase" style="font-weight: bold;">
            {{$community->title}}
          </h1>
      <p class="tm-primary-color"><i></i></p>
    </header>

    <section class="tm-section">
      <div class="tm-content-container">
        <figure class="mb-0">
          <img src="{{url('uploads/community/' .$community->image)}}" alt="Image" class="img-fluid tm-img" style="width: 1000px; height:400px; />
        </figure>
        <div class="tm-content">
          <h2 class="tm-page-title" style="margin-left: 50px; margin-top:30px; font-weight: bold; font-size:30px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{$community->title}}</h2>
          <p class="mb-4" style="margin-left: 25px; font-size: 14px; text-align: justify; word-wrap: break-word; padding-right: 25px;">
            {{$community->Description}}
            <br /><br /><!-- Memberikan space di bawah kata terakhir -->
            <a href="{{$community->whatsapp}}" style="text-decoration: none; color: inherit;">
                <i class="fa-brands fa-whatsapp fa-xl" style="color: #999999;"></i>
                <span style="font-size: 15px; margin-left: 5px;">Join Us!</span>
              </a>
            <br /><br />

          </p>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
