<!DOCTYPE html>
<html lang="en">
    <head>
      <title>e-pkbm</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </br></br>

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

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image

            if ($_SERVER['REQUEST_METHOD']=="POST"){

              try {
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  // set the PDO error mode to exception
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $stmt = $conn->prepare("INSERT INTO artikel (gambar, tulisan)
                  VALUES (:gambar, :tulisan)");
                  $stmt->bindParam(':gambar', $gambar);
                  $stmt->bindParam(':tulisan', $tulisan);

                  // $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));

                  echo "Data berhasil disimpan!</br>";
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

                  $gambar = $_FILES["gambar"]["name"];
                  $tulisan = getParameter("tulisan");

                  // $image = addslashes(file_get_contents($_FILES['images']['tmp_name']));

                  $stmt->execute();
                  
                  echo " - Clear ";
              flush();
            }

            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["gambar"]["tmp_name"]);
                if($check !== false) {
                    echo "File adalah gambar - " . $check["mime"] . ". ";
                    $uploadOk = 1;
                } else {
                    echo "File bukan sebuah gambar. ";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Maaf, file dengan nama yang sama sudah ada. ";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["gambar"]["size"] > 500000) {
                echo "Sorry, your file is too large. ";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan. ";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Maaf, File anda gagal diupload. ";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    echo "File ". basename( $_FILES["gambar"]["name"]). " telah diupload.";
                } else {
                    echo "Maaf, terdapat error saat upload file. ";
                }
            }
            ?>
        
            </br></br>
            <a href=/epkbm/artikel.php><button type="button">Kembali Ke Menu Sebelumnya</button></a>
        </div>
    </body>
</html>