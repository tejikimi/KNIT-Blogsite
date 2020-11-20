<?php
include 'admin/connect.php';
$query = "select * from categories";
$rs = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="bootstrap/custom.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:500" rel="stylesheet">
  <script src="https://rawgit.com/mattboldt/typed.js/master/lib/typed.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Owl Theme Default CSS -->
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- Boxicons CSS -->
  <link rel="stylesheet" href="assets/css/boxicons.min.css">
  <!-- Meanmenu CSS -->
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!-- Odometer CSS-->
  <link rel="stylesheet" href="assets/css/odometer.css">
  <!-- Corporate Style CSS -->
  <link rel="stylesheet" href="assets/css/corporate-style.css">
  <!-- Common CSS -->
  <link rel="stylesheet" href="assets/css/common.css">
  <!-- Corporate Responsive CSS -->
  <link rel="stylesheet" href="assets/css/corporate-responsive.css">
  <!-- Common Responsive CSS -->
  <link rel="stylesheet" href="assets/css/common-responsive.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <!-- TITLE -->
  <title>Krishnaag IT Solutions | About</title>
  <script>
    var w = window;
    var p = w.location.protocol;
    if (p.indexOf("http") < 0) {
      p = "http" + ":";
    }
    var d = document;
    var f = d.getElementsByTagName('script')[0],
      s = d.createElement('script');
    s.type = 'text/javascript';
    s.async = false;
    if (s.readyState) {
      s.onreadystatechange = function() {
        if (s.readyState == "loaded" || s.readyState == "complete") {
          s.onreadystatechange = null;
          try {
            loadwaprops('2573bc7da3e92eab5c2de2935621879ae', '29b4dc78a4518458829d179a3f27c66c4', '231767431606c2029b275818bc1c4041e1185630859ca1fd0', '27c3da7b0eadd7549e5d52eb2be66bf17', 0.0);
          } catch (e) {}
        }
      };
    } else {
      s.onload = function() {
        try {
          loadwaprops('2573bc7da3e92eab5c2de2935621879ae', '29b4dc78a4518458829d179a3f27c66c4', '231767431606c2029b275818bc1c4041e1185630859ca1fd0', '27c3da7b0eadd7549e5d52eb2be66bf17', 0.0);
        } catch (e) {}
      };
    };
    s.src = p + '//mh.zoho.in/hub/js/WebsiteAutomation.js';
    f.parentNode.insertBefore(s, f);

    $(function() {
      'use strict'

      $("[data-trigger]").on("click", function() {
        var trigger_id = $(this).attr('data-trigger');
        $(trigger_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
      });

      // close if press ESC button 
      $(document).on('keydown', function(event) {
        if (event.keyCode === 27) {
          $(".navbar-collapse").removeClass("show");
          $("body").removeClass("overlay-active");
        }
      });

      // close button 
      $(".btn-close").click(function(e) {
        $(".navbar-collapse").removeClass("show");
        $("body").removeClass("offcanvas-active");
      });


    })
  </script>
  <!-- New design styles -->

  <script>
    new Typed('#matt', {
      strings: ["Geeks Byte"],
      typeSpeed: 80,
      onComplete: function() {
        var cursor = document.getElementsByClassName('typed-cursor')[0];
        setTimeout(function() {
          cursor.style.animationIterationCount = 0;
        }, 2000);
      }
    })
  </script>
  <style>
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    ul,
    li,
    a {
      font-family: 'Poppins', sans-serif;
    }

    .offcanvas-header {
      display: none;
    }

    @media (max-width: 768px) {
      .offcanvas-header {
        display: block;
      }

      .mob-nav {
        z-index: 1;
        top: 50px;
      }

      .form-control-search {
        margin-left: -15px !important;
      }

      .desk-sign {
        display: none;
      }

      .navbar-collapse {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 100%;
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        overflow-y: auto;
        visibility: hidden;
        background-color: black;
        transition: visibility .2s ease-in-out, -webkit-transform .2s ease-in-out;
      }

      .navbar-collapse.show {
        visibility: visible;
        transform: translateX(-100%);
      }
    }

    .desk-sign {
      right: 0;
      position: absolute;
      margin-right: 80px;
    }

    .mob-sign {
      display: none;
    }

    .start {
      padding-left: 35px;
    }
  </style>
</head>

<body>
  <!-- Start Inner Navbar Area -->
  <?php include("includes/header.php"); ?>
  <!-- End Inner Navbar Area -->

  <!-- Start Page Title Area -->
  <div class="page-title-area item-bg-1">
    <div class="container">
      <div class="page-title-content">
        <h2>Blogs</h2>
        <ul>
          <li>
            <a href="index.php">
              Home
              <i class='bx bx-chevrons-right bx-fade-right'></i>
            </a>
          </li>
          <li>Blogs
          </li>
        </ul>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg bg-black mob-nav">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-trigger="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse" id="main_nav" style="margin: 0 50px;">

      <div class="offcanvas-header mt-3">
        <button class="btn btn-outline-danger btn-close float-right"> &times Close </button>
      </div>

      <ul class="navbar-nav align-center">
        <li class="nav-item active start"> <a class="nav-link color-white" href="#">HOME</a> </li>
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle color-white" href="#" data-toggle="dropdown"> CATEGORIES </a>
          <ul class="dropdown-menu bg-black">
            <?php if (mysqli_num_rows($rs) > 0) {
              while ($row = mysqli_fetch_array($rs)) {
            ?>
                <li class="dropdown-item"><strong><a class="color-white" href="index.php?category=<?php echo $row['id']; ?>"> <?php echo $row['text']; ?></a></strong></li>
            <?php }
            } ?>
          </ul>
        </li>
        <li>
          <form class="navbar-form navbar-left" role="search" action="index.php?search=<?php echo $search; ?>" method="get">
            <div class="input-group">
              <input type="text" class="form-control form-control-search" placeholder="Search" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default search-button-height" name="submit"> .
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </form>
        </li>
        <li><a class="btn btn-info navbar-btn bg-blue mob-sign" id="logout" href="admin/login.php"><span class="glyphicon glyphicon-user"></span> Sign in</a>
        </li>
      </ul>
      <a class="btn btn-info navbar-btn bg-blue desk-sign" id="logout" href="admin/login.php"><span class="glyphicon glyphicon-user"></span> Sign in</a>
      <!-- right: 0;
    position: absolute;
    margin-right: 10px; -->
    </div> <!-- navbar-collapse.// -->
  </nav>