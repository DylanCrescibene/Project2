<?php
  session_name('Unique_ID');
  session_start();
  $comment = array();
  if(!empty($_POST['usercomment'])){
    $santizeInput = filter_var($_POST['usercomment'],FILTER_SANITIZE_STRING);
    array_push($comment,$santizeInput);  }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
	<meta name="author" content="Victor Fuentes Sangabriel, Josh Loehr">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href='styles/bootstrap-social.css'>
  <link rel="stylesheet" href="styles/proj01styles.css">
  <title>Radish</title>
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
        <div class="media">
          <div class="media-left media-middle">
            <img class="media-object img-thumbnail" src="images/radish.jpg" style="width:150px; height:100px;">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Some information about radishes...</h4>
            <p>The radish (Raphanus raphanistrum subsp. sativus) is an edible root vegetable of the Brassicaceae
             family that was domesticated in Europe in pre-Roman times. Radishes are grown and consumed throughout
             the world, being mostly eaten raw as a crunchy salad vegetable. They have numerous varieties,
             varying in size, flavor, color, and length of time they take to mature. Radishes owe their sharp flavor
             to the various chemical compounds produced by the plants, including glucosinolate, myrosinase, and isothiocyanate.</p>
          </div>
        </div>
      </div>
    </div>
    <?php if(sizeof($comment)>0):?>
      <div class="well">
        <h3>User: BYLOGIN SESSION UNAME</h3>
        <p><?php echo $comment[0]?></p>
      </div>
    <?php endif; ?>
    <?php if(!empty($_SESSION['userName'])):?>
    <form action="artichoke.php" method="post">
      <div class="form-group">
        <label for="usercomment">Comment</label>
        <textarea class="form-control" name="usercomment" id="usercomment" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-success btn-circle text-uppercase"><span class="glyphicon glyphicon-send"></span>&nbsp; Submit Comment</button>
      <p style="padding:10px;"></p>
    </form>
  <?php endif; ?>
  </div>
  <?php include('common/footer.html'); ?>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/325191292d.js"></script>
</body>
</html>
