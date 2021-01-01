
<?php
 //manggil navbar 
require 'navbar.php';
 ?>
<style type="text/css">
	.jumbotron {
    background-image: url(img/car3.jpg) !important;
    background-size: cover;
    height: 60px;
    text-align: center;
    position: relative;
    }
    .info-panel {
    margin-top:-70px;
    margin-left: -830px;
    }
    .info-panel img{
    margin-left: 40px;
    }
</style>
  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
      
        
      </div>
    </div>
  <!-- akhir jumbotron -->
<!-- container -->
<div class="container">
  <!-- info panel -->
  <div class="row justify-content-center">
    <div class="col-3 info-panel">
      <div class="row">
        <div class="col-lg">
          <a href="lokal.php">
            <img src="img/map3.jpg "  alt="employee" class="float-left" style="height: 130px">
            <h4 class="text-center">PERJALANAN PENDAKIAN</h4>
            <p class="text-center">Informasi Tempat Pendakian</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir info panel -->



 <!--manggil footer -->
<?php 
require 'footer.php';
 ?>