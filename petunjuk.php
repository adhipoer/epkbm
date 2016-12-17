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

<div class="content petunjuk" style="padding-top:15%;">
  <div class="container-fluid text-center">    
    <div class="row content">
      <div class="col-sm-1">
      </div>

      <div class="col-sm-2">
        <div class="panel-group">
          <a href="file/edmodotutor.pdf" target="_blank">
            <div class="panel panel-default" onmouseover="bigImg(this)" onmouseout="normalImg(this)" >
              <div class="panel-body" >
                <div class="row">
                  <img src="icon/epkbm-edmodo.png" alt="edmodo">
                  <br>Langkah Menggunakan Edmodo Bagi Tutor</br>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="panel-group">
          <a href="file/edmodosiswa.pdf" target="_blank">
            <div class="panel panel-default" onmouseover="bigImg(this)" onmouseout="normalImg(this)" >
              <div class="panel-body" >
                <div class="row">
                  <img src="icon/epkbm-edmodo.png" alt="edmodo">
                  <br>Langkah Menggunakan Edmodo Bagi Peserta Didik</br>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="panel-group">
          <a href="file/wordpress.pdf" target="_blank">
            <div class="panel panel-default" onmouseover="bigImg(this)" onmouseout="normalImg(this)" >
              <div class="panel-body" >
                <div class="row">
                  <img src="icon/epkbm-wp.png" alt="wp">
                  <br>Langkah Menggunakan WordPress Untuk Membuat Blog/ Website</br>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="panel-group">
          <a href="file/skype.pdf" target="_blank">
            <div class="panel panel-default" onmouseover="bigImg(this)" onmouseout="normalImg(this)" >
              <div class="panel-body" >
                <div class="row">
                  <img src="icon/skype.png" alt="skype">
                  <br>Langkah Menggunakan Skype dan appear.in Untuk Pembelajaran Jarak Jauh</br>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="panel-group">
          <a href="" target="_blank">
            <div class="panel panel-default" onmouseover="bigImg(this)" onmouseout="normalImg(this)" >
              <div class="panel-body" >
                <div class="row">
                  <img src="icon/epkbm-gdrive.png" alt="gd">
                  
                  <br>Langkah Menggunakan Google Drive</br>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>


    </div>
  </div>
</div>

<!-- footer bar -->
<div w3-include-html="foot.html"></div>

</body>
</html>

<script>
  w3IncludeHTML();
</script>

<script>
function bigImg(x) {
  x.style.padding = "20px";
}

function normalImg(x) {
  x.style.padding = "0";
}
</script>