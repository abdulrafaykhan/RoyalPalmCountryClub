<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	confirm_logged_in_admin(); ?>

<!DOCTYPE html>

<html>

<head>
<link rel = "stylesheet" href = "../stylesheets/admin_area_styling.css">

<title>Admins' Area</title>
<?php
	if(logged_in_admin())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
</head>

<body>


<h1>Welcome Admin</h1>
<p style = "text-align: center;"><?php
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
	}

?></p>
<?php	include_once("../../includes/layouts/navbar_admin.php"); ?>
<br>
<img src = "../images/admin.jpg" alt = "Admins unite!" height = "100%" width = "100%" style = "border = 2px solid black;"/>
<br>
<p>Please select any one of the following options:</p>
<ul id = "select_options">

<p><li><a href = "select_member.php?id=1">View/Update Members' Information</li></a>
<li><a href = "mem_reg.php">Register A New Member (REG.)</li></a>
<li><a href = "mem_prv.php">Register A New Member (PRV.)</li></a>
<li><a href = "select_employee.php?id=1">View/Update Employees' Information</li></a>
<li><a href = "employee_registration.php">Register A New Employee</li></a>
<li><a href = "select_member.php?id=2">Delete A Member</li></a>
<li><a href = "select_employee.php?id=2">Delete An Employee</li></a></p>
</ul>


</body>

</html>
<?php	include_once("../../includes/footer.php"); ?>