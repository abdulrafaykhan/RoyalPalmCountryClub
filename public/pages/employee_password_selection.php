<?php	require_once("../../includes/session.php"); ?>

<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/successful_styling.css"/>
<head>
<link rel="shortcut icon" href="images/index.png" type="image/x-icon" />
<title>Password Selection</title>

<h1>Password Selection</h1>
<hr>

<!--Including Navigation Bar-->
<?php	include_once("../../includes/layouts/navbar.php"); ?>

</head>
<?php
	if(logged_in_employee() || logged_in_admin())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
<body>
<p style = "text-align: center;"><?php
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
	}

?></p>

<br>

<form  action = "employee_password_insertion.php" method = "post">
	<fieldset>
		<legend>Please select a proper password : (min 10 characters)</legend>
			<p><label>TRP Employee ID:</label></p>
			<input type = "number" name = "employee_id" value = "2">
			<p><label>Type your password:</label></p>
			<input type = "Password" name = "password" id = "password">
			<p><label>Please re-type the password: </label></p>
			<input type = "password" name = "confirmpassword" id = "password">
			<br><br>
	</fieldset>
	<br>
	<input type="submit" name = "submit" value="Submit"/>   
	<button type="reset" value="Reset" action = "password_selection.php">Reset</button>
</form>


</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>