<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Penerimaan Mahasiswa Baru</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.scss">
  <link rel="stylesheet" href="util.css">
  <link rel="stylesheet" href="main.css">
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-info fixed-top navbar-transparent " color-on-scroll="250">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Made by Framework Team" data-placement="bottom" target="_blank">
            Logo
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">Program Studi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a>
          </li>
          <li class="nav-item">
            @auth
                <a class="nav-link" href="{{ url('/home') }}">Home</a>
            @else
                <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bgAnime.png');"></div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">PENERIMAAN MAHASISWA BARU</h1>
        </div>
      </div>
    </div>
    <!--Tata Cara Pendaftaran-->
    <div class="section text-center" id="carousel">
      <div class="container">
        <h2>Tata Cara Pendaftaran</h2>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block" src="assets/img/bg1.jpg" alt="Slide 1">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 1</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg3.jpg" alt="Slide 2">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 2</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg4.jpg" alt="Slide 3">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 3</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg5.jpg" alt="Slide 4">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 4</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="assets/img/bg6.jpg" alt="Slide 5">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 5</h5>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="now-ui-icons arrows-1_minimal-left"></i>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="now-ui-icons arrows-1_minimal-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Pengumuman-->
    <div class="section section-card text-center">
      <div class="container">
        <h2>Pengumuman</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col mb-5">
            <div class="card h-100 text-end">
              <img class="card-img-top" src="assets/img/bg1.jpg" alt="Slide 1">
              <div class="card-body">
                <h5 class="card-title">Contoh</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100 text-end">
              <img class="card-img-top" src="assets/img/bg1.jpg" alt="Slide 1">
              <div class="card-body">
                <h5 class="card-title">Contoh</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
              </div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="card h-100 text-end">
              <img class="card-img-top" src="assets/img/bg1.jpg" alt="Slide 1">
              <div class="card-body">
                <h5 class="card-title">Contoh</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Contact-->
    <div class="section section-contact-us text-center">
      <div class="container">
        <h2 class="title">Contact Us</h2>
        <p class="description">Your thought is very important to us.</p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="First Name...">
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email...">
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
            </div>
            <div class="send-button">
              <a href="#pablo" class="btn btn-info btn-round btn-block btn-lg">Send Message</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer-->
    <footer class="footer footer-default">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="">
                Framework Team
              </a>
            </li>
            <li>
              <a href="">
                About Us
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by Framework Team
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>