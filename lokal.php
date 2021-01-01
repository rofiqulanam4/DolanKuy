
<?php
// memanggil function
Require'functions.php'; 
 //manggil navbar 
require 'navbar.php';
// ambil data dari tabel
$wisata_lokal = query( "SELECT * FROM wisata_lokal");


?>
<link rel="stylesheet" href="style2.css">
<style type="text/css">
	.jumbotron {
    background-image: url(img/car2.jpg) !important;
    background-size: cover;
    height: 60px;
    text-align: center;
    position: relative;
    }
    .info-panel {
    margin-top:-70px;
    margin-left: -930px;
    }
    .info-panel img{
    margin-left: 40px;
    }
    .card{
      margin-left: -6px;
      margin-top: 20px;
      box-shadow: 10px 10px 25px black;
      transition: 1s;
      display: flex;
      flex-wrap: wrap;
    }
    .card:hover{
      transform: 1;
    }

    .container-card{
      display:grid;
      grid-template-columns: 1fr 1fr 1fr;
    }
    @media(min-width: 500px) {
    .container-card {
        width: 25%;
    }
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
    <div class="col-2 info-panel">
      <div class="row">
        <div class="col">
          <a href="lokal.php">
            <img src="img/map.jpg"  alt="employee" class="float-left" width="130" height="130" style="margin-left:-2px; margin-bottom:-10px; margin-top: -5px;" >
            <!-- <h4 class="text-center">DESTINASI LOKAL</h4> -->
            <!-- <p class="text-center">Informasi tempat wisata dalam negri</p> -->
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- akhir info panel -->

  <!-- text -->
<div class="container">
  <div class="row workspace">
    <div class="col" style="margin-top: -120px; margin-left: 210px;">
      <h1>Destinasi Lokal</h1>
      <br>
      <h3 style="margin-top: -30px;">Informasi tempat wisata yang ada dalam negri</h3>
    </div>
  </div>    
</div>
<!-- akhir text -->

  <!-- card -->

<div class="container-card" >
  <div class="row">
    <?php foreach ($wisata_lokal as $row):?>
    <div class="col card-group col-md-2">
      <a href="halamanprov.php">
        <div class="card text-center mb-3 "  >
          <img src="img/logoprov/<?= $row["logoprov"];?>" class="card-img-top"  width="158" height="210">
      </a>
          <div class="card-body ">
              <p class="card-text"><?= $row["namaprov"];?></p>
          </div>
        </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

  <!-- akhir card -->

<!--manggil footer -->
<?php 
require 'footer.php';
?>