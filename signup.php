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
  
<div class="content-signup">
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4 text-left">
        <h2>Daftarkan PKBM Anda Menjadi Anggota e<b>pkbm</b></h2>
        
        <h5 style="color:Gray; text-align: center;">Sudah mendaftar? Silahkan <a href="/epkbm/signin.php">masuk</a></h5>
        <h5 style="color:Gray; text-align: center;">Keterangan: Data dengan tanda bintang (<span class="error">*</span>) merah harus diisi</h5>
        <!-- form1 -->
        <div id="form">
          <form role="form" method="post">
            <div class="form-group">
              <label for="nilem">Nomor Induk Lembaga<span class="error">*</span></label>
              <input type="text" class="form-control" name="nilem" id="nilem" onchange="pkbm()" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password<span class="error">*</span></label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <label for="pwd">Ulangi Password<span class="error">*</span></label>
              <input type="password" class="form-control" name="password2" required>
            </div>
            <div class="form-group">
              <label for="nama">Nama PKBM<span class="error">*</span></label>
              <input type="text" class="form-control" name="nama_pkbm" id="nama_pkbm" required>
            </div>
            <div class="form-group">
              <label for="nama">Nama Penanggung Jawab<span class="error">*</span></label>
              <input type="text" class="form-control" name="nama_pj" required>
            </div>
            <div class="form-group">
              <label for="prov">Provinsi<span class="error">*</span></label>
              <select class="form-control" name="provinsi">
                <option>Jawa Timur</option>
                <option>Nusa Tenggara Timur</option>
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="prov">Kabupaten/Kota<span class="error">*</span></label>
              <select class="form-control" name="kabupaten_kota">
                <option>Surabaya</option>
                <option>Sidoarjo</option>
              </select>
            </div> -->
            <!-- <div class="form-group">
              <label for="prov">Kecamatan:</label>
              <select class="form-control" name="kecamatan">
                <option>Sukolilo</option>
                <option>Rungkut</option>
              </select>
            </div> -->
            <div class="form-group">
              <label for="alamat">Alamat PKBM<span class="error">*</span></label>
              <input type="alamat" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
              <label for="email">Alamat Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" class="form-control" name="telepon" id="telepon" >
            </div>
            <div class="form-group">
              <label for="wa">Nomor WhatsApp</label>
              <input type="text" class="form-control" name="whatsapp">
            </div>
            <div class="form-group">
              <label for="web">Link Website</label>
              <input type="text" class="form-control" name="website">
            </div>
            <div class="form-group">
              <label for="edmodo">Link Edmodo</label>
              <input type="text" class="form-control" name="edmodo">
            </div>
            <div class="form-group">
              <label for="moodle">Link Moodle</label>
              <input type="text" class="form-control" name="moodle">
            </div>
            <div class="form-group">
              <label for="google_class">Link Google Class</label>
              <input type="text" class="form-control" name="google_class">
            </div>
            <div class="form-group">
              <label for="elearning">Link E-Learning Lain</label>
              <input type="text" class="form-control" name="elearning">
            </div>
            <div class="form-group">
              <label for="youtube">Link Youtube</label>
              <input type="text" class="form-control" name="youtube">
            </div>
            <div class="form-group">
              <label for="drive">Link Google Drive</label>
              <input type="text" class="form-control" name="google_drive">
            </div>
            <div class="form-group">
              <label for="skype">Link Skype</label>
              <input type="text" class="form-control" name="skype">
            </div>
            <!-- <input type="submit" onclick="getdata()"> -->
            <button class="btn btn-success" type="submit">Daftar</button>
          </form>
          <!-- <button class="btn btn-default" onclick="beforeForm()">Sebelumnya</button> -->
          <!-- <button class="btn btn-success" type="submit" onclick="getdata()">Daftar</button> -->
        </div>

        </br></br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="myModal" role="dialog" >
  <div class="modal-dialog modal-sm" position="center">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title">e-pkbm</h4> -->
      <!-- </div>
      <div class="modal-body" align="center">
        <h3>Data PKBM Baru Berhasil Disimpan!</h3>
      </div>
    </div>
  </div>
</div>  -->

<!-- footer bar -->
<div w3-include-html="foot.html"></div>

</body>
</html>

<script>
  w3IncludeHTML();


function pkbm(){
  var cek = $("#nilem").val();
  if (cek.length == 8){
    $.get("getdatas.php?par="+cek, function(data, status){
        console.log(data);

        $("#nama_pkbm").val(data.nama_pkbm);
        $("#alamat").val(data.alamat);
        $("#telepon").val(data.telepon);
    });
  }
}
</script>

<script>

function nextForm() {
    var x = document.getElementById('form2');
    var y = document.getElementById('form1');

    x.style.visibility = 'visible';
    y.style.visibility = 'hidden';
    // } else {
    //     x.style.visibility = 'hidden';
    // }
}

function beforeForm() {
    var x = document.getElementById('form1');
    var y = document.getElementById('form2');
    
    x.style.visibility = 'visible';
    y.style.visibility = 'hidden';
}

// function getdata(){

// }

</script>

<?php 

if ($_SERVER['REQUEST_METHOD']=="POST"){

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare("INSERT INTO pkbm (nilem, nama_pkbm, nama_pj, provinsi, alamat, telepon, whatsapp, website, email, edmodo, moodle, google_class, elearning, youtube, google_drive, skype)
      VALUES (:nilem, :nama_pkbm, :nama_pj, :provinsi, :alamat, :telepon, :whatsapp, :website, :email, :edmodo, :moodle, :google_class, :elearning, :youtube, :google_drive, :skype)");
      $stmt->bindParam(':nilem', $nilem);
      $stmt->bindParam(':nama_pkbm', $nama_pkbm);
      $stmt->bindParam(':nama_pj', $nama_pj);
      $stmt->bindParam(':provinsi', $provinsi);
      // $stmt->bindParam(':kabupaten_kota', $kabupaten_kota);
      // $stmt->bindParam(':kecamatan', $kecamatan);
      $stmt->bindParam(':alamat', $alamat);
      $stmt->bindParam(':telepon', $telepon);
      $stmt->bindParam(':whatsapp', $whatsapp);
      $stmt->bindParam(':website', $website);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':edmodo', $edmodo);
      $stmt->bindParam(':moodle', $moodle);
      $stmt->bindParam(':google_class', $google_class);
      $stmt->bindParam(':elearning', $elearning);
      $stmt->bindParam(':youtube', $youtube);
      $stmt->bindParam(':google_drive', $google_drive);
      $stmt->bindParam(':skype', $skype);

      $stmt2 = $conn->prepare("INSERT INTO akun (nilem, password)
      VALUES (:nilem, :password)");
      $stmt2->bindParam(':nilem', $nilem);
      $stmt2->bindParam(':password', $password);

      echo "New records created successfully";
  }
  catch(PDOException $e)
      {
      echo "Error: " . $e->getMessage();
      }
  $conn = null;

  function getParameter($par, $default = null){
          if (isset($_GET[$par]) && strlen($_GET[$par])) 
              return $_GET[$par];
          elseif (isset($_POST[$par]) && strlen($_POST[$par])) 
              return $_POST[$par];
          else 
              return $default;
      }

      $nilem = getParameter("nilem");
      $password = getParameter("password");
      $nama_pkbm = getParameter("nama_pkbm");
      $nama_pj = getParameter("nama_pj");
      $provinsi = getParameter("provinsi");
      // $kabupaten_kota = getParameter("kabupaten_kota");
      // $kecamatan = getParameter("kecamatan");
      $alamat = getParameter("alamat");
      $telepon = getParameter("telepon");
      $whatsapp = getParameter("whatsapp");
      $website = getParameter("website");
      $email = getParameter("email");
      $edmodo = getParameter("edmodo");
      $moodle = getParameter("moodle");
      $google_class = getParameter("google_class");
      $elearning = getParameter("elearning");
      $youtube = getParameter("youtube");
      $google_drive = getParameter("google_drive");
      $skype = getParameter("skype");

      $stmt->execute();
      $stmt2->execute();
      
      echo " - Clear";
  flush();
}
?>