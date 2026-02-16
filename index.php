<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soul Sip | Coffee Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
  
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    
    <div id="content">
<div id="bg" class=" ">
  <div id="customCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slide2jpg.jpg" class="d-block w-100" style="height: 90vh; object-fit: cover;" alt="Slide 1">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
          <h2 class="display-4 font-weight-bold">SAVOR THE EXCELLENCE OF<br>OUR PREMIUM BLENDS</h2>
          <p class="lead">Sourced from the finest regions</p>
          <a href="products.php" class="btn btn-light btn-lg mt-3">ORDER NOW</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/slide3.jpg" class="d-block w-100" style="height: 90vh; object-fit: cover;" alt="Slide 2">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
          <h2 class="display-4 font-weight-bold">EXPERIENCE RICH INDONESIAN COFFEE</h2>
          <a href="products.php" class="btn btn-light btn-lg mt-3">SHOP NOW</a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/slide4.jpg" class="d-block w-100" style="height: 90vh; object-fit: cover;" alt="Slide 3">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
          <h2 class="display-4 font-weight-bold">TASTE THE ORIGINS</h2>
          <a href="products.php" class="btn btn-light btn-lg mt-3">DISCOVER</a>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#customCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#customCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    </div>
    <div class="text-center pt-4 h3">
        Be Enjoy
    </div>
  
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="products.php#shirt"  >
                  <img src="images/nasi-goreng.png" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                        Food
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#shoes">
                 <img src="images/angle-shot.webp" class="img-fluid   " alt="" style="border-radius:0.5rem">
                <div class="h5 pt-3 font-weight-bolder">
                    Coffee
                 </div>
             </a>
             </div>
        </div>
  </div>

    
    <?php include 'includes/footer.php'?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>