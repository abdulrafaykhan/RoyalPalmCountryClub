<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
<title>The Royal Palm</title>
<h1>Employee Login</h1>

<link rel = "stylesheet" href = "../stylesheets/admin_login_styling.css">
</head>
<body>
<!--Including Navigation Bar-->
<?php
	include_once("../../includes/layouts/navbar.php");
?>
<br>
<?php
	if(isset($_SESSION["message"]))
	{ ?>
<div>
<?php
		echo $_SESSION["message"]; ?>
	</div>
	<?php
	}
?>

<p><?php if(isset($_GET["employee_id"]) && isset($_SESSION["password"]))
	{
	echo "Your Employee ID is "  . $_GET["employee_id"]; echo " and your password is " . $_SESSION["password"]; 
	}	?></p>
<h2 style = "text-align : left;">Please enter Employee ID and Password</h2>

<form action="emp_login_validation.php" method ="post">

  <div class="container">
    <label style = "text-align : left;"><p>Employee ID</p></label>
    <input type="text" placeholder="Enter ID" name="employee_id" required>

    <label style = "text-align : left;"><p>Password</p></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name = "submit" value = "submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
	<br> <br>
   
	<br>
  </div>
</form>

</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>