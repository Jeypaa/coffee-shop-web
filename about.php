<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Soul Sip | Coffee Indonesia</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
        <h2 style="color: #6f4e37;">Who We Are ?</h2>
          <hr />
          <div class="row">
  <div class="video-container">
    <video autoplay loop muted>
      <source src="Video/vidio1.mp4" type="video/mp4">
    </video>
  </div>
  <div class="text-container">
  </div>
</div>
          <p class="mt-2">Soul Sip bukan hanya sekadar sebuah kedai kopi, tetapi sebuah perjalanan rasa yang mempertemukan 
            tradisi, kualitas, dan kehangatan. Setiap cangkir kopi yang kami sajikan mengandung lebih dari sekadar bahan baku, 
            tetapi juga cerita tentang petani kopi lokal, proses pemetikan biji yang penuh ketelatenan, hingga cara kami meracik
            kopi dengan penuh cinta. Kami percaya bahwa kopi adalah medium yang menghubungkan manusia, menciptakan kenangan, dan 
            mempererat persahabatan Kami menggunakan biji kopi pilihan yang diproduksi oleh para petani lokal yang berkomitmen pada 
            keberlanjutan dan kualitas. Setiap proses pemanggangan, penyeduhan, dan penyajian dilakukan dengan penuh kehati-hatian, 
            karena bagi kami, setiap langkah adalah bagian dari seni. Kami juga selalu mencari cara untuk berinovasi, mengembangkan 
            menu baru yang selera zaman, namun tetap mempertahankan rasa kopi yang otentik.</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
          <h2 style="color: #a97449;">LIVE SUPPORT</h2>
          <h4 style="color: #ffc107;">24 hours | 7 days a week | 365 days</h4>

          </span>
          <hr>
          <p>Di Soul Sip, kami percaya bahwa pelayanan pelanggan yang luar biasa adalah bagian penting dari pengalaman menikmati 
            secangkir kopi. Karena itu, kami menghadirkan layanan Live Support yang aktif selama 24 jam setiap hari, 7 hari seminggu, 
            tanpa henti bahkan di hari libur sekalipun. Kami memahami bahwa setiap pelanggan memiliki kebutuhan dan pertanyaan yang 
            berbeda, dan kami selalu siap memberikan solusi cepat dan ramah kapan pun Anda membutuhkannya. Tim support kami terdiri dari 
            staf profesional yang berdedikasi untuk membantu Anda, baik itu pertanyaan seputar produk, pemesanan, pengiriman, maupun masukan 
            tentang layanan kami. Dengan satu tujuan: memastikan setiap momen bersama Soul Sip berjalan lancar, nyaman, dan memuaskan. Karena 
            bagi kami, kenyamanan Anda adalah prioritas utama dan tidak ada hal yang lebih penting dari memastikan Anda bisa menikmati kopi favorit 
            Anda tanpa gangguan.
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  </div>

  <?php include 'includes/footer.php'?>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
