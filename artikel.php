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

<div class="content" style="padding-top:40px">
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6 text-left">
      	<div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-body" >
              <div class="row" style="padding:10px;">
                  <!-- <form method="post"> -->
                	<form action="upload.php" method="post" enctype="multipart/form-data">
    Pilih gambar yang ingin dimasukkan
    <input type="file" name="gambar" id="gambar">
    				</br>
                  	<textarea rows="4" cols="50" id="tulisan" name="tulisan"></textarea>
                  	</br></br>
                  	<div class="col-sm-9">
                  	</div>
                  	<div class="col-sm-3">
                  	<input type="submit" value="Upload Image" name="submit" style="height:50px; width:100%; border-radius:4px; right:0px;">
                  	</div>
                  </form>
                  <!-- <div class="col-sm-9"> -->
                  <!-- </div>
                  <div value="Upload Image" value="Upload Image" name="submit" class="col-sm-3" style="padding:0px;">
                  <button type="submit" class="button" style="height:100%; width:100%; background-color:green; border-radius:4px; right:0px;">
                    <span class="glyphicon glyphicon-ok"></span>
                  </button>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="panel-group">

        <h1></h1>
        <!-- <table>
           <tr>
              <th>Gambar</th>
              <th>Artikel</th>              
              <th>Aksi</th>
            </tr> -->
            <!-- query -->
            <?php

            // $sql = "SELECT * FROM pkbm";
            // $pkbm = $conn->query($sql);

            // if($pkbm->num_rows > 0) {
            // // output data of each row
            //   while($row = $pkbm->fetch_assoc()){
            //     if (substr($row["nama_pkbm"], 0,8) != "BPPAUDNI") {
                ?>

                  <!-- <tr>
                    <td>
                      Disini untuk Gambar
                    </td>
                    <td>
                      Disini untuk Artikel
                    </td>
                    <td>
                      <button type="button" class="button" style="height:70%; width:100%;background-color:teal; border-radius:4px;">
                        <span class="glyphicon glyphicon-pencil"></span>
                      </button>
                      </br>
                      </br>
                      <button type="button" class="button" style="height:70%; width:100%; background-color:red; border-radius:4px;">
                        <span class="glyphicon glyphicon-trash"></span>
                      </button>
                    </td>
                  </tr> -->
                  <?php 
                // }}
                //   } else {
                //     echo "0 results";
                //   }
                //   $conn->close();  

                  ?>
         <!-- </table> -->
      </div>
      <div class="col-sm-3">
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
// function changestatus(value){
//   <?php 
//   try {
//       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//       // set the PDO error mode to exception
//       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//       // prepare sql and bind parameters
//       $stmt = $conn->prepare("UPDATE pkbm SET status='1' WHERE nilem='value'");
//       echo value;
//       print_r();
//       // SELECT * FROM pkbm WHERE nilem = '$row["nilem"]'
      
//       $stmt->execute();
//   }
//   catch(PDOException $e){
//     echo "Error: " . $e->getMessage();
//   }
//   $conn = null;
// ?>
// }

<?php 

// if ($_SERVER['REQUEST_METHOD']=="POST"){

//   try {
//       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//       // set the PDO error mode to exception
//       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//       $stmt = $conn->prepare("INSERT INTO artikel (gambar, tulisan)
//       VALUES (:gambar, :tulisan)");
//       $stmt->bindParam(':gambar', $gambar);
//       $stmt->bindParam(':tulisan', $tulisan);

//       // $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));

//       echo "New records created successfully";
//   }
//   catch(PDOException $e)
//       {
//       echo "Error: " . $e->getMessage();
//       }
//   $conn = null;

//   function getParameter($par, $default = null){
//           if (isset($_GET[$par]) && strlen($_GET[$par])) 
//               return $_GET[$par];
//           elseif (isset($_POST[$par]) && strlen($_POST[$par])) 
//               return $_POST[$par];
//           else 
//               return $default;
//       }

//       $gambar = getParameter("gambar");
//       $tulisan = getParameter("tulisan");

//       // $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));

//       $stmt->execute();
      
//       echo " - Clear";
//   flush();
// }
?>

</script>