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
      <div class="col-sm-5">
      </div>
      <div class="col-sm-2 text-left"> 
         <form role="form">
          <div class="form-group">
            <label for="nilem">Nomor Induk Lembaga</label>
            <input type="nilem" class="form-control" id="nilem">
          </div>
          <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd">
          </div>

          <button type="submit" class="btn btn-success">Edit Data</button>
        </form>
      </div>
      <div class="col-sm-5">
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