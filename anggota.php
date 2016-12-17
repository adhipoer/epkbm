<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "epkbm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

<div class="content">
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8 text-left">
        <h1></h1>
        <table>
           <tr>
              <th>NILEM</th>
              <th>Nama PKBM/Alamat</th>
              <th>Nomor Telepon</th>
              <th>Nomor WA</th>
            </tr>
            <!-- query -->
            <?php

            $sql = "SELECT * FROM pkbm";
            $pkbm = $conn->query($sql);

            if($pkbm->num_rows > 0) {
            // output data of each row
              while($row = $pkbm->fetch_assoc()){
                if (substr($row["nama_pkbm"], 0,8) != "BPPAUDNI") {
                ?>

                  <tr>
                    <td>
                      <?php echo $row["nilem"] ?>
                    </td>
                    <td>
                      <?php if (substr($row["nama_pkbm"], 0,4) == "PKBM") { echo "<b>" .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;}  else { echo "<b>" .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;} ?>
                    </td>
                    <td>
                      <?php echo $row["telepon"] ?>
                    </td>
                    <td>
                      <?php echo $row["whatsapp"] ?>
                    </td>
                  </tr>
                  <?php }}
                  } else {
                    echo "0 results";
                  }
                  $conn->close();  

                  ?>
         </table>
      </div>
      <div class="col-sm-2">
    </div>
  </div>
</div>

<!-- footer bar -->
<div w3-include-html="foot.html"></div>


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
function bigImg(x) {
    x.style.width = "50px";
}

function normalImg(x) {
    x.style.width = "45px";
}
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