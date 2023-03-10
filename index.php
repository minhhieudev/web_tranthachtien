  <?php
  session_start();
  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <meta name="viewport" container="width=device-width, initial-scale=1.0">
    <title>THREET</title>
    <link rel="stylesheet" type="text/css" href="./css/test6.css">
    <link rel="stylesheet" href="./css/view8.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="./images/logo-title-removebg-preview.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <style>
      .menu_left img {
        display: block;
        transition: all .3s ease;
      }

      .menu_left img:hover {
        transform: scale(1.05);
      }

      .menu_left p {
        display: block;
        overflow: hidden;
      }
    </style>
    </style>

  </head>

  <body style="background-color: #fff;">
    <header>
      <div class="logo">
        <h1>THREET</h1>
      </div>
      <div class="search-container">
        <form action="index.php?page=search" method="post">
          <input style="border-radius:5px;" type="text" placeholder="Search.." name="timkiem" required>
          <button style="background-color:midnightblue;border:0px;" type="submit" name="ok"></button>
        </form>
      </div>

      <div class="logo-cham"></div>
      <div class="logo-cham"></div>
      <div class="logo-cham"></div>
      <div class="logo-cham1"></div>
      <div class="logo-cham2"></div>
      <div class="logo-cham3"></div>

    </header>


    <nav style="height: 42px;margin-top:3px;">
      <div class="w3-bar w3-light-black">
        <a href="index.php?page=home" class="w3-bar-item w3-button w3-red" style="margin-left: 10%; width: 5%;   background: rgb(221, 13, 13);border-top-left-radius: 10px;"> <i class="fa fa-home fa-lg"></i> <Strong> </a>

        <a href="index.php?page=hot" class="w3-bar-item w3-button w3-green" style="width: 10%;">M???I NH???T</a>
        <a href="index.php?page=hay" class="w3-bar-item w3-button w3-green" style="width: 10%;">N???I B???T</a>
        <a href="index.php?page=danhgia" class="w3-bar-item w3-button w3-green" style="width: 10%;">????NH GI??</a>
        <div class="w3-dropdown-hover">
          <button class="w3-button w3-green" style="width: 100%; padding: 8px 30px 8px 30px; ">H??NG XE</button>


          <div class="dropdown-content ">
            <div class="column">
              <a href="index.php?page=audi">AUDI</a>
              <a href="index.php?page=ferrari">FERRARI</a>
              <a href="index.php?page=ford">FORD</a>
              <a href="index.php?page=toyota">TOYOTA</a>

            </div>
            <div class="column">
              <a href="index.php?page=tesla">TESLA</a>
              <a href="index.php?page=porsche">PORSCHE</a>
              <a href="index.php?page=wmotors">W MOTORS</a>
              <a href="index.php?page=lamborghin">LAMBORGHINI</a>

            </div>
            <div class="column">
              <a href="index.php?page=pagani">PAGANI</a>
              <a href="index.php?page=saleen">SALEEN</a>
              <a href="index.php?page=koenigsegg">KOENIGSEGG</a>
              <a href="index.php?page=arrinera">ARRINERA</a>

            </div>

            <div class="column">
              <a href="index.php?page=hennessey">HENNESSEY</a>
              <a href="index.php?page=mclaren">MCLAREN</a>
              <a href="index.php?page=mercedes">MERCEDES</a>
              <a href="index.php?page=bugatti">BUGATTI</a>

            </div>

            <div class="column">
              <a href="index.php?page=spyker">SPYKER</a>
              <a href="index.php?page=noble">NOBLE</a>
              <a href="index.php?page=jaguar">JAGUAR</a>
              <a href="index.php?page=bmw">BMW</a>

            </div>
          </div>
        </div>





        <a href="index.php?page=bac" class="w3-bar-item w3-button w3-green" style="width: 10%;">B???C</a>
        <a href="index.php?page=trung" class="w3-bar-item w3-button w3-green" style="width: 10%;">TRUNG</a>
        <a href="index.php?page=nam" class="w3-bar-item w3-button w3-green" style="width: 10%;">NAM</a>

        </strong>
        <a href="admin" class="w3-bar-item w3-button w3-red" style=" width: 5%;   background: rgb(221, 13, 13);border-top-right-radius: 10px;"> <i class="fa fa-user fa-lg"></i> <Strong> </a>
      </div>
      </div>
      </div>

    </nav>
    <section class="section">
      <div class="w3-content w3-display-container">
        <img class="mySlides w3-animate-left" src="./images/slides01.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides w3-animate-left" src="./images/slides02.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides w3-animate-left" src="./images/slides03.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides w3-animate-left" src="./images/slides04.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides w3-animate-left" src="./images/slides05.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides w3-animate-left" src="./images/slides06.jpeg" style="width:100% ;height: 400px; ">
        <img class="mySlides w3-animate-left" src="./images/slides07.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides w3-animate-left" src="./images/slides08.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides w3-animate-left" src="./images/slides09.jpg" style="width:100% ;height: 400px; ">
        <img class="mySlides w3-animate-left" src="./images/slides10.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides w3-animate-left" src="./images/slides11.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides w3-animate-left" src="./images/slides12.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides w3-animate-left" src="./images/slides13.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides w3-animate-left" src="./images/slides14.jpg" style="width:100% ;height: 400px;">
        <img class="mySlides w3-animate-left" src="./images/slides15.jpg" style="width:100% ;height: 400px;">

      </div>
      <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {
            slideIndex = 1
          }
          if (n < 1) {
            slideIndex = x.length
          };
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          x[slideIndex - 1].style.display = "block";
        }
        var slideIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > x.length) {
            slideIndex = 1
          }
          x[slideIndex - 1].style.display = "block";
          setTimeout(carousel, 5000);
        }
      </script>
    </section>
    <div class="main" style="height: 850px;">


      <?php

      if (isset($_GET['page'])) {

        $pagePath = "./section/{$_GET['page']}.php";
        if (isset($_REQUEST['ok'])) {
          $pagePath = "./section/{$_GET['page']}.php";
          $_SESSION['search'] = $_POST['timkiem'];
          if ($_SESSION['search'] == "") {
            $pagePath = "./section/home.php";
          }
        }


        include_once($pagePath);
      } else
        include_once './section/home.php';
      ?>




    </div>



    </div>

    <footer style="background-image: repeating-linear-gradient(190deg, rgb(90, 88, 88), black 7%, gray 15%);padding-bottom:10%">
    <p style="text-align: center; color:#fff; margin-top:5% ;font-size:20px">Gi???y ch???ng nh???n ??KDN: s??? 0123456789 c???p b???i Ph??ng ??KKD Ph?? Y??n ng??y 01/01/2023 </p> 
    <p style="text-align: center; color:#fff ;font-size:20px">?? B???n quy???n thu???c v??? c??ng ty change THREET</p> 

  </footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>