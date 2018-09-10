<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SISTEM PEMINJAMAN BARANG DI LAB</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="guest/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="guest/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="guest/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="guest/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="guest/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="guest/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="guest/css/style.css">
<link rel="stylesheet" type="text/css" href="guest/css/prettyPhoto.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
<script type="text/javascript" src="guest/js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-moon-o fa-rotate-90"></i> SIRETOLAB</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll">Home</a></li>
        <li><a href="#services" class="page-scroll">Informasi</a></li>
        <li><a href="#about" class="page-scroll">Profil</a></li>
        <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
        <li><a href="{{ route('login') }}" >Login</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Welcome to <span class="brand">SIReToLaB</span></h1>
            <p>System Rental Tools Laboratorium</p>
            <a href="#services" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2>SIRETOLAB INFORMASI</h2>
      <p> Digunakan untuk mengelola administrasi laboratorium di SMK ASSALAAM BANDUNG.</p>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-3"> <i class="fa fa-desktop"></i>
        <h4>Info Laboratorium</h4>
        <p>Informasi Umum tentang Laboratorium terkait. Berisi tentang profil singkat laboratorium dengan dilengkapi keterangan pengelola.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-gears"></i>
        <h4>Penggunaan ALat</h4>
        <p>Sistem penggunaan alat atau fasilitas laboratorium bagi siswa SMK ASSALAAM BANDUNG dan pengguna dilingkungan kampus.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-home"></i>
        <h4>Kunjungi Laboratorium</h4>
        <p>Ingin tahu tentang lab terkait lebih jauh? Anda dapat menghubungi kami atau lab terkait, sesuai dengan rencana kunjungan Anda</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-exclamation-circle"></i>
        <h4>Ingatlah</h4>
        <p>Jagalah sebaik-baiknya barang itu karena perbuatan merupakan cerminan isi hati.Jika hati dipenuhi kebaikan,maka sikap dan tindakan baik.Begitu juga sebaliknya</p>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title text-center">
      <h2>About SMK ASSALAAM BANDUNG</h2>
      <p>Sekolah berkualitas dengan program pembelajaran yang berkualitas, sumber daya pengajar yang berkualitas, dan sarana prasarana yang lengkap dan mutakhir.</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="guest/img/sakola.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat) plus sepeda motor dalam proses pendidikan pelatihan. Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusannya siap menghadapi perubahan.</p>

    <P>SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi dan improvisasi, mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.</P>

    <P>Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang  lengkap UP TO DATE, waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title text-center">
      <h2>Our Portfolio</h2>
      <p>Beautiful Design and Comfortable Study Facillities.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Barang</a></li>
            <li><a href="#" data-filter=".app">Keadaan</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/terminal.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Barang</small> </div>
              <img src="guest/img/portfolio/terminal.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/1.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/1.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/keyboard.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Barang</small> </div>
              <img src="guest/img/portfolio/keyboard.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/mouse.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Barang</small> </div>
              <img src="guest/img/portfolio/mouse.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/2.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/2.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/4.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/4.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/6.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/6.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/8.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/8.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/7.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/7.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/11.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/11.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/12.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/12.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/13.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/13.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/14.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/14.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
         <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/15.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Keadaan</small> </div>
              <img src="guest/img/portfolio/15.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/speaker.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Barang</small> </div>
              <img src="guest/img/portfolio/speaker.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
           <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/tang.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Barang</small> </div>
              <img src="guest/img/portfolio/tang.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
           <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/lan tester.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Barang</small> </div>
              <img src="guest/img/portfolio/lan tester.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
          </div>
        </div>
           <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="guest/img/portfolio/kecil.jpg" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>SIRETOLAB</h4>
                <small>Barang</small> </div>
              <img src="guest/img/portfolio/kecil.jpg" class="img-responsive" alt="SIRETOLAB"> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
        <h2>Get In Touch</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor apibus lornare diam commodo nibh.</p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Send Message</button>
        </form>
        <div class="social">
          <ul>
            <li><a href="{{ url ('https://facebook.com') }}"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="{{ url('https://github.com/') }}"> <i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 Studio7. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="guest/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="guest/js/bootstrap.js"></script> 
<script type="text/javascript" src="guest/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="guest/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="guest/js/jquery.isotope.js"></script> 
<script type="text/javascript" src="guest/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="guest/js/contact_me.js"></script> 
<script type="text/javascript" src="guest/js/main.js"></script>
</body>
</html>