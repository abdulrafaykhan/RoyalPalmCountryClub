<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_member(); ?>

<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/select_activities_styling.css">
<head>

<title>Activities Selection</title>
<?php
	if(logged_in_member())
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
</head>

<body>

<h1>Activities' Selection</h1>
<?php	include_once("../../includes/layouts/navbar_member.php"); ?>
<br>
<img src = "../images/activities.jpg" alt = "Book the activites!" height = "100%" width = "100%" style = "border : 2px solid black"/>
<br>
<?php
	$member_type = $_SESSION["member_type"];
	$member_id = $_SESSION["member_id"];
?>
<p>Please select the activities that you want to book:</p><hr>
<form action = "select_activities_confirm.php" method = "post">
<table>
<?php
	$query = "SELECT NAME FROM activities";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($result))
	{
		$activity = $row["NAME"];
	?>
	<tr><td><input type = "checkbox" name = "<?php echo strtolower($activity); ?>" value = ""/><?php echo ucwords(strtolower($activity)); ?></td></tr>
<?php
	}
?>
</table>
<input type="submit" name="submit" value = "Submit" style = "align : right;"/>
<button type="reset" value="Reset" value = "select_activities.php" style = "align : right;">Reset</button>
</form>

<!--<form action = "select_activities_confirm.php" method = "post">
		<table>
			<tr>
			<td><input type="checkbox" name="tennis" value="">Tennis</td>
			</tr>
			<tr>
			<td> <input type="checkbox" name="swimming" value="">Swimming</td>
			</tr>
			<tr>
			<td> <input type="checkbox" name="golf" value="">Golf</td>
			</tr>
			<tr>
			<td><input type="checkbox" name="yoga" value="">Yoga</td>
			</tr>
			<tr>
			<td><input type="checkbox" name="fitness" value = "">Fitness Center</p></td>
			</tr>
		</table>
				<input type="submit" name="submit" value = "Submit"/>
		<button type="reset" value="Reset" value = "select_activities.php">Reset</button>
</form>-->

</body>

<?php	include_once("../../includes/footer.php"); ?>
</html>
<?php	require_once("../../includes/db_conn_close.php"); ?>