<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	confirm_logged_in_member(); ?>

<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/delete_member_styling.css">
<head>

<title>Are you sure?</title>

</head>

<body>
<p style = "text-align: center;"><?php
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
	}

?></p>
<?php
	if(isset($_POST["member_id"]))
	{
		$member_id = $_SESSION["member_id"];
	}
	else
	{
		$member_id = $_GET["memberid"];
	}
 ?>
<h1>Leave The Royal Palm</h1>
<p style = "text-align : center;">Are you sure you want to delete your membership?</p>

	
	<p style = "text-align:center;"><a href = "deleted_member.php?member_id=<?php echo $member_id; ?>"><input type="button" name="confirm"onClick="return confirm('Are you sure? This action is irreversible!')" value="Yes"></a>
	<a href = "member_area.php?member_id=<?php echo $member_id; ?>"><input type="button" name = "cancel" onClick = "member_area.php?member_id={$member_id}" value = "No"></a></p>
</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>