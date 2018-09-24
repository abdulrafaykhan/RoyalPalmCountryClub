<?php	require_once("../../includes/session.php"); ?>
<!DOCTYPE html>
<p>
<?php
		if(isset($_SESSION['message']))
		{
			echo $_SESSION['message'];
		}
?>
 </p>
<html>
<link rel = "stylesheet" href = "../stylesheets/successful_styling.css"/>
<head>
<link rel="shortcut icon" href="images/index.png" type="image/x-icon" />
<title>Welcome</title>

<h1>Welcome to The Royal Palm</h1>

<!--Including Navigation Bar-->
<?php	include_once("../../includes/layouts/navbar.php"); ?>

</head>

<body>
<br>
<img src = "../images/successful3.jpg" alt = "Welcome" height = "350px" width = "1265px">

<p>Thank you for choosing the best in luxury retreats. We hope your experience here will be a unique one! We are looking forward to serving you!</p>

<p>Your Member ID is <?php echo $_GET["member_id"]; ?>.</p>

</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>