<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	//confirm_logged_in_admin(); ?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
<link rel="shortcut icon" href="../images/index.png" type="image/x-icon" />
<title>The Royal Palm</title>
<link rel = "stylesheet" href = "../stylesheets/mem_reg_styling.css">
<?php
	if(logged_in_employee() || logged_in_admin())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
<h1>Employee Registration</h1>

</head>
<body>
<!--Including Navigation Bar-->
<?php
	if(logged_in_admin())
	{
		include_once("../../includes/layouts/navbar_admin.php");
	}
	elseif(logged_in_employee())
	{
		include_once("../../includes/layouts/navbar_employee.php");
	}
	else
	{
		include_once("../../includes/layouts/navbar.php");
	}
?>

<br>
<p><?php echo message(); ?></p>
<h2>Please enter valid and updated information!
</h2>

<form action = "employee_reg_confirm.php" method = "post">
	<fieldset>
		<legend>Personal Information</legend>
		<p>First name:<br>
		<input type="text" name="firstname" value="" required /></p>
		
		
		<p>Last name:<br>
		<input type="text" name="lastname" value="" required/></p>
		
		
		<p>CNIC Number: (Without dashes)<br>
		<input type = "number" name = "cnicno" value = "" required /></p>
		
		
		<p>House Number:<br>
		<input type = "number" name = "houseno" value = "" required /></p>
		
		
		<p>Block:<br>
		<input type = "text" name = "block" value = "" required /></p>
	
		
		<p>Area:<br>
		<input type = "text" name = "area" value = "" required /></p>
		
		
		<p>City:<br>
		<input type = "text" name = "city" value = "" required /></p>
		
		
		<p>Country:<br>
		<input type = "text" name = "country" value = "" required /></p>
		
		
		<p>Email Address:<br>
		<input type = "email" name="email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required /></p>

		<p>Gender:</p>
		<p><input type="radio" name="gender" value="male"/>Male</p>
		<p><input type="radio" name="gender" value="female"/>Female</p>
	
		<fieldset>
		<legend>Please enter without dashes or special characters. You may enter a single contact number</legend>
		<p>Contact Number 1:<br>
		<input type = "number" name="contactno1" value=""/></p>
		
		<p>Contact Number 2:<br>
		<input type = "number" name="contactno2" value=""/></p>
		</fieldset>
		
		<p>Expertise:<br>
		<input type = "text" name = "expertise" value = "" required /></p>

		<p>Hiredate:<br>
		<input type="date" name = "hiredate" value="<?php echo date('Y-m-d');?>" /></p>
		
		
		<p>Salary:<br>
		<input type = "number" name = "salary" value = "" required /></p>
		
		<p>Bank Name: (Associated with your salary account)<br>
		<input type = "text" name = "bankname" value = "" required /></p>
		
		<p>Account No: (Associated with your salary account)<br>
		<input type = "number" name = "accountno" value = "" required /></p>
		
		<p>Work Hours:<br>
		<input type = "text" name = "workhours" value = "" required /></p>
		
		<p>Designation:<br>
		<input type = "text" name = "designation" value = "" required /></p>
		
		<p>Commission: (if any)<br>
		<input type = "number" name = "commission" value = ""/></p>
		

		<p><input type="checkbox" name="confirmation" value="" required />I have read and agree to the Terms and Conditions of The Royal Palm Country Club given<a href ="Terms and Conditions.pdf"> here</a>, and I promise to abide by them under all and any circumstances. In case of any mishap, I will be solely responsible and I will have no right to blame the Club or any other staff.</p><br>
		<input type="submit" name="submit" value="Submit"/>
		<button type="reset" value="Reset" action = "employee_registration.php">Reset</button>
		</fieldset>
		<br>
		
		
		
		<br>
</form>


</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>
<?php	require_once("../../includes/db_conn_close.php"); ?>