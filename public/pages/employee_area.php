<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_employee(); ?>

<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/member_area_styling.css">
<head>

<title>Employees' Area</title>
<?php
	if(isset($_SESSION["message"]))
	{ ?>
<div><p style = "text-align:center;">
<?php
		echo $_SESSION["message"]; ?>
	</div></p>
	<?php
	}
?>
<?php
	if(logged_in_employee())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
</head>

<body>

<h1>Welcome Employee No. <?php echo $employee_id = $_SESSION["employee_id"]; ?></h1>
<?php	include_once("../../includes/layouts/navbar_employee.php"); ?>
<br>
<img src = "../images/member_area.jpg" alt = "Enjoy a luxurious living at The Royal Palm" height = "100%" width = "100%" style = "border = 2px solid black;"/>
<br>
<p>Please select any one of the following options:</p>
<ul id = "select_options">
<p><li><a href = "view_information_emp.php">View/Update your information</li></a>
<li><a href = "password_update.php?employee_id=<?php echo $employee_id; ?>">Change Your Password</li></a>
<li><a href = "delete_employee.php">Deactivate Your Account</a></li></p>
</ul>
</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>
<?php	require_once("../../includes/db_conn_close.php"); ?>