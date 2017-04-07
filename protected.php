<?php
// Start the session
session_name('Unique_ID');
session_start();

// Only be able to access this page is user has logged in
if(empty($_SESSION['userName'])){
	//echo $_SESSION['userName'];
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags needed for the responsive webpage using bootstrap -->
	<!-- Required bootstrap CDN links for style sheet and required scripts -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content=" Josh Loehr" >
	<meta name="description" content="Josh's Bootstrap Login Page">
	<meta name="keywords" content="HTML,CSS,JS,Responsive,Bootstrap">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css'>
	<link rel="stylesheet" href="styles/proj01styles.css">
	<title>Dashboard</title>
</head>
<body>
	<?php
    include('common/navbarOnline.php');
    include('common/header.html');
	?>
	<!-- Three coulumn -->
	<div class="container-fluid">
		<!-- Main Content here -->
		<div class="col-md-4 col-md-offset-4">
		<div class="row visible-lg visible-md visible-sm visible-xs">
			<center><h3>Session Connection Successful</h3></center>
			<center>
			<?php
			$currentSession_name = session_name();
			echo "The current session name is: $currentSession_name <br>";
			echo "User Name: " . $_SESSION["userName"]  . "<br>";
			echo $_SESSION["lastTimeStamp"]  . "<br>";
			?>
			<h1>Welcome to the User Dashboard</h1>
			<img src="images/uDash.png" class="img-thumbnailAlt1">
			</center>
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
