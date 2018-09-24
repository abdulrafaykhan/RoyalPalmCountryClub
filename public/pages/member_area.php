<?php	require_once("../../includes/session.php"); ?>
<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/db_connection.php"); ?>
<?php	confirm_logged_in_member(); ?>

<!DOCTYPE html>

<html>
<link rel = "stylesheet" href = "../stylesheets/member_area_styling.css">
<head>

<title>Members' Area</title>
<?php
	if(logged_in_member())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
</head>

<body>

<h1>Welcome Member No. <?php echo $member_id = $_SESSION["member_id"]; ?></h1>
<?php	include_once("../../includes/layouts/navbar_member.php"); ?>
<br>
<img src = "../images/member_area.jpg" alt = "Enjoy a luxurious living at The Royal Palm" height = "100%" width = "100%" style = "border = 2px solid black;"/>
<br>
<p>Please select any one of the following options:</p>
<ul id = "select_options">
<p><li><a href = "view_information.php">View/Update your information</li></a>
<li><a href = "password_update.php?member_id=<?php echo $member_id; ?>">Change Your Password</li></a>
<li><a href = "select_activities.php">Book the activities</li></a>
<?php
	$query = "SELECT TYPE FROM members WHERE ID = {$member_id}";
	$result = mysqli_query($connection, $query);
	while ($type = mysqli_fetch_assoc($result))
	{
		$member_type = $type['TYPE'];
	}
	$_SESSION["member_type"] = $member_type;
	$_SESSION["member_id"] = $member_id;
	if($member_type == 'PRV')
		{			
?>
<?php 
	$query2 = "SELECT * FROM rents WHERE MEMBER_ID = {$member_id}";
	$result2 = mysqli_query($connection, $query2);
	while($row2 = mysqli_fetch_assoc($result2))
	{
		$member_room_id  = $row2["MEMBER_ID"];
		$room_no = $row2["ROOM_ID"];
		$fromdate = $row2["FROM_DATE"];
		$tilldate = $row2["TILL_DATE"];
	}
	if(!isset($member_room_id))
	{
?>
<li><a href = "book_rooms.php">Book Rooms</a></li>
<?php 
	} 
else
{
	?>
Your Room Number is <?php echo $room_no; ?> which is assigned to you from <?php echo $fromdate; ?> till <?php echo $tilldate; ?>
<?php
}
?>
<li><a href = "select_privileged_activities.php">Select one of your free activities</a></li>
<?php
		} 
?>
<li><a href = "delete_member.php">Deactivate Your Account</a></li></p>
</ul>
</body>
<?php	include_once("../../includes/footer.php"); ?>
</html>
<?php	require_once("../../includes/db_conn_close.php"); ?>