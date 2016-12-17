<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epkbm";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-pkbm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" id="default-style-css"  href="css/style.css" type="text/css" media="all" />
  <script src="http://www.w3schools.com/lib/w3data.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- header bar -->
<div w3-include-html="head.html"></div>

<div class="w3-content w3-section" style="max-width:100%; z-index:-4; position:fixed;">
  <img class="mySlides" src="images/1.jpg.jpg" style="width:100%">
  <img class="mySlides" src="images/2.jpg.jpg" style="width:100%">
  <img class="mySlides" src="images/3.jpg.jpg" style="width:100%">
</div>

<div class="modal fade" id="myModal" role="dialog" >
  <div class="modal-dialog modal-sm" position="center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">e-pkbm</h4> -->
      </div>
      <div class="modal-body" align="center">
        <h3>Data PKBM Berhasil Disimpan!</h3>
      </div>
    </div>
  </div>
</div>
  
<div class="content-signup">
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4 text-left"> 
        <h2>Daftarkan PKBM Anda Menjadi Anggota e<b>pkbm</b></h2>
        </br>
        <!-- form1 -->
        <div id="form1">
          <form role="form" method="post">
            <div class="form-group">
              <label for="nilem">Nomor Induk Lembaga:</label>
              <input type="text" class="form-control" name="nilem">
            </div>
            <div class="form-group">
              <label for="nama_pkbm">Nama PKBM:</label>
              <input type="text" class="form-control" name="nama_pkbm">
            </div>
            <!-- <input type="submit" onclick="getdata()">
            <button class="btn btn-success" type="submit">Daftar</button> -->
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn">Open Modal</button>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>
          </form>
          <!-- <button class="btn btn-default" onclick="nextForm()">Berikutnya</button> -->
        </div>

        </br></br>
      </div>
      <div class="col-sm-4">
    </div>
  </div>
</div>



<footer id="section-contact" class="container-fluid">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <h2>e<b>pkbm</b></h2>
      <p>Pembelajaran Paket C Jarak Jauh
      </br>Balai Pengembangan Anak Usia Dini dan 
      </br>Pendidikan Masyarakat Provinsi Jawa Timur</p>
    </div>
    <div class="col-sm-4">
      <h3>Kontak</h3>
      <p>Balai Pengembangan Anak Usia Dini dan 
      </br>Pendidikan Masyarakat Provinsi Jawa Timur
      </br><span class="glyphicon glyphicon-home"></span> Jl. Gebang Putih No.10, Sukolilo, Surabaya 60117 Indonesia
      </br><span class="glyphicon glyphicon-phone"></span> (+6231)5945101/5925972
      </br><span class="glyphicon glyphicon-envelope"></span> bppaudni2@kemdikbud.go.id</p>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
  <div class="row">
  <hr>
  <!-- <div class="copyright"><small>Copyright &copy; 2016 Developed by <a href="https://www.linkedin.com/in/putu-adhi-purwanto-438150110">Pur</a></small></div> -->
  </div>
</footer>


<!-- <div class="info">
  <h3>Pendaftaran PKBM!
  <button type="button" class="btn btn-success">Daftar</button>
  </h3>
</div> -->

</body>
</html>

<script>

w3IncludeHTML();

</script>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>