<?php
// Start the session
ob_start();
session_name('Unique_ID');
session_start();
date_default_timezone_set('America/Denver');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags needed for the responsive webpage using bootstrap -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Josh Loehr" >
	<meta name="description" content="Login Page">
	<meta name="keywords" content="HTML,CSS,JS,Responsive,Bootstrap">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Required bootstrap CDN links for style sheet and required scripts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css'>
	<link rel="stylesheet" href="styles/proj01styles.css">
	<title>Login Page</title>
</head>
<body>
<?php
include('common/navbar.html');
include('common/header.html');

	// define variables and hardcode values
	$userName;
	$password;
	$dbUserName1 = "jloehr";
	$dbUserName2 = "vfuentes";
	$dbUserName3 = "ct310";
	$md5Password1 = "5f4dcc3b5aa765d61d8327deb882cf99";//password
	$md5Password2 = "3aaec86181ee6974b99d893b4c1eb5b5";// IFY_hortus

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Sanitize user input!
		$userName = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
		$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
		$password = convert($password);

		if ($userName == $dbUserName1 && $password == $md5Password1){
			$_SESSION["userName"] = $dbUserName1;
			$_SESSION["lastTimeStamp"] = " Login Successful on: " . date("m-d-Y") . " at " . date("h:i:sa")  . "<br>";
			redirect('protected.php');
		}
		else if ($userName == $dbUserName2 && $password == $md5Password1){
			$_SESSION["userName"] = $dbUserName2;
			$_SESSION["lastTimeStamp"] = " Login Successful on: " . date("m-d-Y") . " at " . date("h:i:sa")  . "<br>";
			redirect('protected.php');
		}
		else if ($userName == $dbUserName3 && $password == $md5Password2){
			$_SESSION["userName"] = $dbUserName3;
			$_SESSION["lastTimeStamp"] = " Login Successful on: " . date("m-d-Y") . " at " . date("h:i:sa")  . "<br>";
			redirect('protected.php');
		}
		else{
		echo "Login Failed on: " . date("m-d-Y") . " at " . date("h:i:sa")  . "<br>";
	}
	}

	// *** Helper functions ***
	// convert user input to md5
	function convert($data) {
		$data = md5($data);
			return $data;
	}

	// redirects to url
	function redirect($url) {
		header('Location: '.$url);
		ob_end_flush();
		die();
	}
	// *** End Helper functions ***

	// If no redirection occurs then remove all session variables
	session_unset();
	session_destroy();
	// Debug purposes
	//echo "All session variables are now removed, and the session is destroyed." . "<br><br>";
?>
	<!-- Three coulumn -->
	<div class="container-fluid">
		<div class="row visible-lg visible-md visible-sm visible-xs">
			<div class="col-md-4 col-md-offset-4">
				<center>
					<h3>Please Login</h3>
					<img src="images/person.png" height="65" width="65">
				</center>
				<br>
				<center>
					<form action="login.php" method="post">
					 <h5>User Name</h5> <input type="text" name="name"> <br/>
					 <h5>Password:</h5> <input type="password" name="password"> <br/>
					 <br>
					 <input type="submit" value="Submit">
					</form>
					<br>
					<img src="images/cyber1.png" class="img-thumbnailAlt">
					<img src="images/check.png" class="img-thumbnailAlt">
					<img src="images/cyber2.png" class="img-thumbnailAlt">
				</center-->
			</div>
		</div>
	</div>
  <?php include('common/footer.html'); ?>
  <!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/325191292d.js"></script>
</body>
</html>
