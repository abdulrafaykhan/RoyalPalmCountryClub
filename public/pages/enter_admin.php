<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	//confirm_logged_in_admin(); ?>
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
<!DOCTYPE html>

<html lang = "en-US">
<link rel = "stylesheet" href = "../stylesheets/enter_admin_styling.css"/>
<head>

<title>Admin Registration</title>
<?php $admin_id =  0 //$_SESSION["adminid"]; ?>

</head>

<body>
<h1>Admin Registration</h1>
<?php
	if(logged_in_admin())
	{
		
	?>
<a href = "pages/logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
<?php	include_once("../../includes/layouts/navbar_admin.php"); ?>
<p>Welcome to New Admin Registration, admin number<?php echo $admin_id; ?>. Please note that admin has maximum privileges over the whole system. Please be extra cautious in registering new admins, and be sure to take all the necessary clearances from the upper level management.</p>
<form action = "admin_registration.php" method = "post">
	<fieldset>
		<legend>Please enter the following info correctly</legend>
			<p><label for ="adminusername">Admin Username : </p>
			<input type = "text" name = "adminusername" value = ""/>
			<p>Admin Password : </p>
			<input type = "password" name = "adminpassword" value = ""/>
			<p>Confirm Password : </p>
			<input type = "password" name = "confirmpassword" value = ""/>
			<p>Employee ID : </p>
			<input type = "number" name = "employeeid" value = ""/>
			<p style = "text-align : center"><input type = "submit" name = "submit" value = "Submit"/>
			<button type="reset" value="Reset" action = "enter_admin.php">Reset</button></p>
	</fieldset>
</form>
</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>
