<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="referrer" content="no-referrer">
  <title>SIG Pesebaran Apotek Pontianak</title>
  <link href="img/icon.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3&" async defer></script> -->  
  <!-- <script type="text/javascript" src="js/maps.js"></script> -->
</head>

<body>
  <?php if (isset($_GET['page'])) : ?>
    <header id="header1">
      <div class="container">
        <div id="logo" class="pull-left d-flex">
          <h1>
            <a href="index.php">
              SIG Pesebaran Apotek
            </a>
          </h1>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li <?php if (($_GET['page'] == '')) {
                  echo "class='menu-active' ";
                } ?>>
              <a href="index.php">
                Dashboard
              </a>
              <i class="fa fa-dashboard" style="color: white;"></i>
            </li>
            <li <?php if (($_GET['page'] == 'informasi')) {
                  echo "class='menu-active' ";
                } ?>>
              <a href="index.php?page=informasi">
                Apotek
              </a>
              <i class="fa fa-hospital-o" style="color: white;"></i>
            </li>
            <li <?php if (($_GET['page'] == 'tentang')) {
                  echo "class='menu-active' ";
                } ?>>
              <a href="index.php?page=tentang">
                Tentang
              </a>
              <i class="fa fa-user-o" style="color: white;"></i>
            </li>
          </ul>
        </nav>
      </div>
    </header><!-- #header -->
  <?php else : ?>
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left d-flex">
          <h1>
            <a href="index.php">
              Pesebaran Apotek
            </a>
          </h1>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#head">Dashboard</a><i class="fa fa-dashboard" style="color: white;"></i></li>
            <li><a href="index.php?page=informasi">Apotek</a><i class="fa fa-hospital-o" style="color: white;"></i></li>
            <li><a href="index.php?page=tentang">Tentang</a><i class="fa fa-user-o" style="color: white;"></i></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="head">
      <div class="head-container">
        <h1>Sistem Informasi Geografis</h1>
        <h2>Persebaran Apotek di Kota Pontianak</h2>
        <a href="#peta" class="btn-get-started">Lihat Peta Persebaran</a>
      </div>
    </section>
  <?php endif; ?>

  <main id="main">
    <section id="peta">
      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
          case 'informasi':
            include "content/informasi.php";
            break;
          case 'tentang':
            include "content/tentang.php";
            break;
        }
      } else { ?>
        <div id="googft-mapCanvas"></div>
      <?php } ?>
    </section>
  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy;<script>
          document.write(new Date().getFullYear());
        </script> | All Rights Reserved
      </div>
      <div class="credits">
        Teknik Informatika, Universitas Tanjungpura
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Map Feature -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-N8cQ98UGLbufnrHGcbloHgNQIQOCVb8"></script>
  <script src="js/katakanpeta.js"></script>

</body>

</html>