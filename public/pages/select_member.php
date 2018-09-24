<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	confirm_logged_in_admin(); ?>
<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/select_member.css">
<head>

<title>Select a member</title>

</head>

<body>
<h1>Select A Member</h1>
<?php
	if(logged_in_admin())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
<p style = "text-align: center;"><?php
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
	}

?></p>
<?php	include_once("../../includes/layouts/navbar_admin.php"); ?>
<?php	$id = $_GET["id"]; ?> 
<br>
<img src = "../images/452.jpg" alt = "Enjoy a luxurious living at The Royal Palm" height = "100%" width = "100%" style = "border = 5px solid black;"/>
<br>
<form action = "selected_member.php?id=<?php echo $id; ?>" method = "post">
	<legend>Please enter a valid TRP Member ID</legend>
	<p>Enter the ID : </p>
	<input type = "number" name = "member_id" value = ""/>
	<p style = "text-align : right;"><input type = "submit" name = "submit" value = "Submit"/>
	<button type="reset" value="Reset" action = "select_member.php">Reset</button></p>
</form>
</body>

</html>
<?php	include_once("../../includes/footer.php"); ?>