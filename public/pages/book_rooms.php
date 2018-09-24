<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_member(); ?>
<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/book_rooms_styling.css">
<?php
	if(logged_in_member())
	{	
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
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
	$member_id = $_SESSION["member_id"];
	$query1 = "SELECT TYPE FROM members WHERE ID = {$member_id}";
	$result1 = mysqli_query($connection, $query1);
	while ($row = mysqli_fetch_assoc($result1))
	{
		$type = $row["TYPE"];
	}
	if($type != "PRV")
	{
		$_SESSION["message"] = "This facility is only available to Privileged Members";
		redirect_to("index.php");
	}
	else
	{
?>
<head>

<title>Book Rooms</title>
<h1>Book Rooms</h1>
<?php	include_once("../../includes/layouts/navbar_member.php"); ?>
</head>

<body>
<br>
<img src = "../images/book_rooms.jpg"alt = "Some fine livin'!" height = "100%" width = "100%" style = "border = 2px solid black;"/>
<p>Please select the room that you want to book</p>

<form action = "selected_rooms.php" method = "post">
	<p>Types:<br></p>
		<select name = "type">
		<?php
			$count = 1;
			$query2 = "SELECT DISTINCT TYPE FROM rooms";
			$result2 = mysqli_query($connection, $query2);
			while($row2 = mysqli_fetch_assoc($result2))
			{
				$room_type = $row2["TYPE"];
		?>
		<option value = "<?php echo $count;?>"><?php echo $room_type;?></option>
		<?php $count++; ?>
		<?php } ?>
		</select>
	<p>From Date: (Enter date in the format "YYYY-MM-DD")</p>
	<input type = "date" name = "fromdate" value = ""/>
	<p>Till Date: </p>
	<input type = "date" name = "tilldate" value = ""/>
	<br>
	<p style = "text-align : center;"><input type="submit" name = "submit" value="Submit"/> 
	<button type="reset" value="Reset" action = "book_rooms.php">Reset</button></p>
</form>
</body>
<?php } ?>
<?php	include_once("../../includes/footer.php"); ?>
</html>
<?php	require_once("../../includes/db_conn_close.php"); ?>