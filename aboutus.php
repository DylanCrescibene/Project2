<?php
  session_name('Unique_ID');
  session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
	<meta name="author" content="Victor Fuentes Sangabriel, Josh Loehr">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href='styles/bootstrap-social.css'>
  <link rel="stylesheet" href="styles/proj01styles.css">
</head>
<body>
  <?php
  // show logged out navbar
  if (empty($_SESSION["userName"])){
     include('common/navbar.html');
  }else{
    // Show logged in navbar
     include('common/navbarOnline.php');
  }
     include('common/header.html');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1> About us...</h1>
        <p>This is a supermarket chain with stores in the northeastern and southeastern U.S. We carry Krasdale Foods brands.
           The company's headquarters is in New York, and we focus on luxury clientele. The company launched In the early 1990s 
           and today many of our stores are independently owned.
           </p>

      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <img src="images/Avatar.jpg" class="img-thumbnail">
        <h1>Josh Loehr</h1>
        <p>With a career focused on developing high-performance, low-cost web-based software solutions. He holds a Computer Engineering degree
        and has recently taken the Vice-President position.</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <img src="images/Avatar.jpg" class="img-thumbnail">
        <h1>Victor Fuentes</h1>
        <p>With nearly 30 years experience, Victor built upon his computer science education to lead operations at companies including Microsoft, 
        Hewlett-Packard, and Google Development. He is the CEO.
    </div>
  </div>
  </div>
  <?php include('common/footer.html'); ?>
  
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/325191292d.js"></script>
</body>
<html>
