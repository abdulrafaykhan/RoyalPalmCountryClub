<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
<title>The Royal Palm</title>
<h1>Member Login</h1>

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

<h2>Please enter Member ID and Password</h2>

<form action="login_validation.php" method ="post">

  <div class="container">
    <label style = "text-align : left;"><p>Member ID</p></label>
    <input type="text" placeholder="Enter ID" name="member_id" required>

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