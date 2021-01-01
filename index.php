
<?php 
require 'navbar.php';
?>
<style type="text/css">
/* jumbotron */
.jumbotron {
    background-image: url(img/car5.jpg) !important;
    background-size: cover;
    height: 540px;
    text-align: center;
    position: relative;
}

</style> 
<link rel="stylesheet" type="text/css" href="style2.css">

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4" style="color: white"> Ayo dolan, awakmu ki butuh <span> refreshing </span> <br> ora mung sekedar <span> ngising!</span> </h1>
      </div>
    </div>
  <!-- akhir jumbotron -->

<!-- container -->
<div class="container">
  <!-- info panel -->
  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-lg">
          <a href="lokal.php">
            <img src="img/map.jpg "  alt="employee" class="float-left" style="height: 130px">
            <h4>DESTINASI LOKAL</h4>
            <p>Informasi Tempat Wisata Dalam Negri</p>
          </a>
        </div>
        <div class="col-lg">
          <a href="Mancanegara.php">
            <img src="img/map2.jpg" alt="hires" class="float-left" style="height: 130px">
            <h4>WISATA MANCANEGARA</h4>
            <p>Informasi Tempat Wisata Luar Negri</p>
          </a>
        </div>
        <div class="col-lg">
          <a href="pendakian.php">
            <img src="img/map3.jpg" alt="security" class="float-left" style="height: 110px">
            <h4>PERJALANAN PENDAKIAN</h4>
            <p>Informasi Tempat Pendakian</p>
          </a>
          </div>
      </div>
    </div>
  </div>
  <!-- akhir info panel -->

  <!-- workingspace -->
  <div class="row workingspace">
    <div class="col">
      <img src="img/car4.jpg" alt="workingspace" class="img-fluid">
    </div>
    <div class="col">
      <h3>"Dadi wong kok <span> turu </span> teros,<br> <span>dolan</span> kono loh!"
        <br>
        -emak
      </h3>
      <a href="" class="btn btn-primary tombol"> Gallery</a>
    </div>
  </div>
  <!-- akhir workingspace -->

</div>
<!-- akhir container -->
    

<!-- footer -->
<?php 
require 'footer.php';
?>