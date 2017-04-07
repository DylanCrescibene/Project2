<?php
// Start the session
session_name('Unique_ID');
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Victor Fuentes Sangabriel, Josh Loehr">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>
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
        <h1>Welcome to the Homepage</h1>
        <p>Unlike other online food shopping experiences you may have tried, our store relies on only the best farmers
           that bring consistently high quality produce to our stores year after year. We believe that both new and
           existing customers return to our stores time and again because we like to provide as much up front information 
           regarding the products we sell and their nutritional value. 
        </p>
        <p> 
           Currently, the online shopping experience that we plan to offer on this website is under construction. However,
           please take a look at some of the products below that we plan to offer in the near future.
           Check back with us in the next few weeks, as we will be opening up the site for customer registration
           when our database comes online.  Thank you for your patronage, and we hope to see you soon!
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <center><a href="artichoke.php"><img src="images/artichoke.jpg" class="img-thumbnail"></a>
          <h1>Artichoke</h1></center>
          <p>The artichoke is boiled or steamed. A cooked, unseasoned artichoke has a delicate flavour, reminiscent of fried
           egg white. The core of the stem tastes similar to the artichoke heart, and is edible.</p>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <center><a href="garlic.php"><img src="images/garlic.jpg" class="img-thumbnail"></a>
        <h1>Garlic</h1></center>
        <p>Garlic cloves are used for consumption (raw or cooked) or for medicinal purposes. They have a characteristic pungent,
         spicy flavor that mellows and sweetens considerably with cooking.</p>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <center><a href="radish.php"><img src="images/radish.jpg" class="img-thumbnail"></a>
        <h1>Radish</h1></center>
        <p>The bulb of the radish is usually eaten raw, although tougher specimens can be steamed. The raw flesh has a crisp texture
         and a pungent, peppery flavor. Radishes are mostly used in salads, but also appear in many European dishes.</p>
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
