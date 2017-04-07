<nav class="navbar navbar-custom" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
       data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CT310</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false"
    style="height:1px;">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a></li>
        <li><a href="aboutus.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
           role="button" aria-haspopup="true" aria-expanded="false">Ingredients
           <span class="caret"></span>
         </a>
          <ul class="dropdown-menu">
            <li><a href="artichoke.php">Artichoke</a></li>
            <li><a href="garlic.php">Garlic</a></li>
            <li><a href="radish.php">Radish</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="protected.php"><span class="glyphicon"></span><?php echo "<font color='#9d9d9d'>Welcome: ".$_SESSION["userName"]."</font>";?></a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
