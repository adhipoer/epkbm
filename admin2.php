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
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10 text-left">
          <div class="col-sm-8">
              <h1>PKBM Terverifikasi</h1>
          </div>
          <div class="col-sm-2">
              <a href="/epkbm/admin2.php"><button type="button" class="button" style="height:100%; width:100%; background-color:gray; border-radius:4px; margin-bottom:10px;">
                  Sudah Terverifikasi
              </button></a>
          </div>
          <div class="col-sm-2">
              <a href="/epkbm/admin.php"><button type="button" class="button" style="height:100%; width:100%; background-color:gray; border-radius:4px; margin-bottom:10px;">
                  Belum Terverifikasi
              </button></a>
          </div>

        <h1></h1>
        <table>
           <tr>
              <th>NILEM</th>
              <th>Nama PKBM/Alamat</th>
              <th>Kontak</th>
              <th>Daftar Link</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            <!-- query -->
            <?php

            $sql = "SELECT * FROM pkbm WHERE status=1";
            $pkbm = $conn->query($sql);

            if($pkbm->num_rows > 0) {
            // output data of each row
              while($row = $pkbm->fetch_assoc()){
                if (substr($row["nama_pkbm"], 0,8) != "BPPAUDNI") {
                ?>

                  <tr>
                    <td class="nilem">
                      <?php echo $row["nilem"]; 
                      $value=$row["nilem"] ?>
                    </td>
                    <td>
                      <?php if (substr($row["nama_pkbm"], 0,4) == "PKBM") { echo "<b>" .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;}  else { echo "<b>" .$row["nama_pkbm"]. "</b></br>" .$row["alamat"]."" ;} ?>
                    </td>
                    <td>
                      <?php echo "<b>Telp: </b>" .$row["telepon"]. "</br><b>WA: </b>" .$row["whatsapp"]. "</br><b>Email: </b>" .$row["email"]. "" ?>
                    </td>
                    <td>
                      <?php echo "<b>Web: </b>" .$row["website"]. "</br><b>Edmodo: </b>" .$row["edmodo"]. "</br><b>Moodle: </b>" .$row["moodle"]. "</br><b>Google Class: </b>" .$row["google_class"]. "</br><b>Elarning lain: </b>" .$row["elearning"]. "</br><b>Youtube: </b>" .$row["youtube"]. "</br><b>Drive: </b>" .$row["google_drive"]. "</br><b>Skype: </b>" .$row["skype"]. "" ?>
                    </td>
                    <td>
                      <?php if ($row["status"]==0) 
                        {echo "Belum Terverifikasi";} 
                        else {echo "Sudah Terverifikasi";} ?>
                    </td>
                    <td>
                      <button type="button" class="button unverifybutton" style="height:100%; width:100%;background-color:darkred; border-radius:4px;">
                        <span class="glyphicon glyphicon-trash"></span>
                      </button>
                      </br>
                      </br>
                      <!--<button type="button" class="button" style="height:100%; width:100%; background-color:red; border-radius:4px;">
                        <span class="glyphicon glyphicon-trash"></span>
                      </button>-->
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
      <div class="col-sm-1">
    </div>
   </div>
</div>

<!-- footer bar -->
<!-- <div w3-include-html="foot.html"></div> -->


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
function changestatus(value){
  <?php
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare("UPDATE pkbm SET status='0' WHERE nilem='value'");
      echo value;
      print_r();
      // SELECT * FROM pkbm WHERE nilem = '$row["nilem"]'
      
      $stmt->execute();
  }
  catch(PDOException $e){
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
?>
}
</script>

<script>
$(document).ready(function(){
  $(".unverifybutton").click(function() {
    var nilem = $(this).closest('tr').find(".nilem").text();
    var form = $('<form action="unverify.php" method="POST"></form>').appendTo('body');
    form.append("<input type='text' value='"+nilem+"' name='nilem'>");
    form.submit();

    // console.log(form);
  });
});
</script>