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
  <script src="/style/js/w3data.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<!-- header bar -->
<div w3-include-html="head.html"></div>

<div class=" w3-section" style="width:100% !important; padding-top:10px !important;">
  <img class="mySlides w3-animate-right slider" src="images/1.jpg.jpg" >
  <img class="mySlides w3-animate-right slider" src="images/2.jpg.jpg" >
  <img class="mySlides w3-animate-right slider" src="images/5.jpg" >
  <img class="mySlides w3-animate-right slider" src="images/3.jpg.jpg" >
  <img class="mySlides w3-animate-right slider" src="images/4.jpg.jpg" >
</div>

<div class="content petunjuk">
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8">
        <!-- <div class="col-sm-1">
        </div> -->

        <?php
        $sql = "SELECT * FROM artikel ORDER BY ID desc LIMIT 3";
        $artikel = $conn->query($sql);

        if($artikel->num_rows > 0) {
        // output data of each row
          while($row = $artikel->fetch_assoc()){        
        ?>
            <div class="col-sm-4">
              <div class="panel-group">
                <a href="">
                  <div class="panel panel-default">
                    <div class="panel-body" >
                      <div class="row">
                        <img class="content" src="uploads/<?php echo $row["gambar"] ?>" style="width:100%; padding:5px;">
                          <div style="text-align:left; padding:10px;">
                            <?php echo $row["tulisan"]?>
                          </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        <?php
        }}
        ?>

        <!-- <div class="col-sm-4">
          <div class="panel-group">
            <a href="">
              <div class="panel panel-default">
                <div class="panel-body" >
                  <div class="row">
                    <img class="content" src="uploads/Pictures/ESWE.jpg" style="width:100%; padding:10px;">
                      <div style="text-align:left; padding:10px;">
                        lorem ipsum dolor sit amet.
                      </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div> -->
      </div>

      <div class="col-sm-2">
      </div>

    </div>
  </div>
</div>

<!-- footer bar -->
<div w3-include-html="foot.html" style="bottom:0;"></div>

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
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>