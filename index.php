<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" type="text/css" href="css/animate/animate.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="icon" href="images/logo.png" type="image/x-icon"/> 
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css"> 
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-grid.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-grid.min.css.map">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-grid.css.map">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-grid.min.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-reboot.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-reboot.css.map">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-reboot.min.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap-reboot.min.css.map">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css.map">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css.map">
    <title>Zalego</title>
</head>
<body>
<!-- nav -->
<?php include "./includes/nav.html" ?>
<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/4.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/6.jpg">
    </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<!-- core values -->
<div class="row mt-5">
    <div class="container text-center">
      <h6>Our Values</h6>
        <p class="description info-color">
        Zalego academy is an Industrial, skill-based ICT training center . 
        
        Our focus is on building capacity, creating job opportunities and
         mentoring upcoming entrepreneurs.Our goal is to significantly reduce 
         the rate of UN-Employment in East & Central Africa.
        </p>

    </div>
</div>

<!-- mission & vision -->
<div class="container mt-5">
<div class="row">
   <div class="col-md-6"> 
  <img src="images/vision.png" class="mr-3 mb-3" >Vision
    <p>
    To foster an enabling breeding ground that will produce the best of the best software engineers who will innovate and aspire to be self-employed as we endeavour to reduce the rate of un-employment and poverty in East and Central Africa
    </p>
    </div>
<div class="col-md-6">
    <img src="images/mission.png" class="mr-3 mb-3">Mission
        <p>
        Offering skills that enable our graduates to lead productive lives and become contributing members of the global community
        </p>
    </div>

</div>
</div>

<!-- footer -->

<?php include "./includes/footer.html" ?>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
