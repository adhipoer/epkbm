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
  <script src="style/js/w3data.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="style/js/jquery.min.js"></script>
  <script src="style/js/bootstrap.min.js"></script>
</head>
<body>

<div class="w3-content w3-section" style="width:100%; z-index:-4; position:absolute;">
  <img class="mySlides" src="images/1.jpg.jpg" style="width:100%; height:50%">
  <img class="mySlides" src="images/2.jpg.jpg" style="width:100%; height:50%">
  <img class="mySlides" src="images/3.jpg.jpg" style="width:100%; height:50%">
  <img class="mySlides" src="images/4.jpg.jpg" style="width:100%; height:50%">
</div>
  
<!-- header bar -->
<div w3-include-html="head.html"></div>

<div class="content" style="padding-top:20%">
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-2">
        <!-- <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p> -->
      </div>
      <div class="col-sm-8 text-left"> 
        <!-- <h1 style="color:white">Selamat Datang di e-pkbm</h1> -->
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-body" >
              <div class="row">
                <div class="col-sm-10"> 
                  <input class="search" type="text" name="search" placeholder="Cari PKBM..">
                </div>
                <div class="col-sm-2"> 
                  <button type="button" class="button" style="height:100%; width:100%">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-group">

        <!-- query -->
          <?php

          $sql = "SELECT * FROM pkbm";
          $pkbm = $conn->query($sql);

          if($pkbm->num_rows > 0) {
            // output data of each row
            while($row = $pkbm->fetch_assoc()){
              if (substr($row["nama_pkbm"], 0,8) == "BPPAUDNI") {
              ?>
            
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-4" style="padding-left: 20px;">
                      <?php if (substr($row["nama_pkbm"], 0,4) == "PKBM") { echo "<b>" .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;}  else { echo "<b>" .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;} ?>
                    </div>
                    <div class="col-sm-8">
                      <div class="row">
                        <?php if ($row["website"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["website"], 0,4) == "http") echo $row["website"]; else echo "http://".$row["website"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-web.png" alt="web" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["edmodo"] != NULL) { ?>
                        <div class="col-sm-2">
                          <a href="<?php if (substr($row["edmodo"], 0,4) == "http") echo $row["edmodo"]; else echo "http://".$row["edmodo"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-edmodo.png" alt="edmodo" width="45px"></a>
                        </div>
                        <?php } 
                        if ($row["moodle"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["moodle"], 0,4) == "http") echo $row["moodle"]; else echo "http://".$row["moodle"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-moodle.png" alt="moodle" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["google_class"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["google_class"], 0,4) == "http") echo $row["google_class"]; else echo "http://".$row["google_class"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-gclass.png" alt="google_class" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["elearning"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["elearning"], 0,4) == "http") echo $row["elearning"]; else echo "http://".$row["elearning"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-elearning.png" alt="elearning" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["youtube"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["youtube"], 0,4) == "http") echo $row["youtube"]; else echo "http://".$row["youtube"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-youtube.png" alt="youtube" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["google_drive"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["google_drive"], 0,4) == "http") echo $row["google_drive"]; else echo "http://".$row["google_drive"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-gdrive.png" alt="gdrive" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["skype"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["skype"], 0,4) == "http") echo $row["skype"]; else echo "http://".$row["skype"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/skype.png" alt="skype" width="45px"></a>
                          </div>
                        <?php } 
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <div class="row">
              <hr>
            </div>

            <?php } else {
            if($row["status"]==1){?>

            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-4" style="padding-left: 20px;">
                      <?php if (substr($row["nama_pkbm"], 0,4) == "PKBM") { echo "<b>" .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;}  else { echo "<b>PKBM " .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;} ?>
                    </div>
                    <div class="col-sm-8">
                      <div class="row">
                        <?php if ($row["website"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["website"], 0,4) == "http") echo $row["website"]; else echo "http://".$row["website"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-web.png" alt="web" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["edmodo"] != NULL) { ?>
                        <div class="col-sm-2">
                          <a href="<?php if (substr($row["edmodo"], 0,4) == "http") echo $row["edmodo"]; else echo "http://".$row["edmodo"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-edmodo.png" alt="edmodo" width="45px"></a>
                        </div>
                        <?php } 
                        if ($row["moodle"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["moodle"], 0,4) == "http") echo $row["moodle"]; else echo "http://".$row["moodle"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-moodle.png" alt="moodle" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["google_class"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["google_class"], 0,4) == "http") echo $row["google_class"]; else echo "http://".$row["google_class"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-gclass.png" alt="google_class" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["elearning"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["elearning"], 0,4) == "http") echo $row["elearning"]; else echo "http://".$row["elearning"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-elearning.png" alt="elearning" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["youtube"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["youtube"], 0,4) == "http") echo $row["youtube"]; else echo "http://".$row["youtube"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-youtube.png" alt="youtube" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["google_drive"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["google_drive"], 0,4) == "http") echo $row["google_drive"]; else echo "http://".$row["google_drive"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/epkbm-gdrive.png" alt="gdrive" width="45px"></a>
                          </div>
                        <?php } 
                        if ($row["skype"] != NULL) { ?>
                          <div class="col-sm-2">
                             <a href="<?php if (substr($row["skype"], 0,4) == "http") echo $row["skype"]; else echo "http://".$row["skype"].""; ?> " target="_blank"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="icon/skype.png" alt="skype" width="45px"></a>
                          </div>
                        <?php } 
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php ;}
              }}
            } else {
                echo "0 results";
            }
            $conn->close();  

            ?>

        </div>
        <hr>        
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