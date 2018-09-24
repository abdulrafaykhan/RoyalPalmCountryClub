<?php
	require_once("../includes/functions.php");
	require_once("../includes/session.php");
?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
<link rel="shortcut icon" href="images/index.png" type="image/x-icon" />
<title>The Royal Palm</title>
<?php
	if(logged_in_member() || logged_in_employee() || logged_in_admin())
	{
		
	?>
<a href = "pages/logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
	else
	{
		
?>
<a href = "pages/admin_login.php" style = "float : right; top 0;">Admins, click here!</a>
<?php
	}
?>
<link rel = "stylesheet" href = "stylesheets/styling.css">
<!-- Home Page -->
<h1>The Royal Palm Country Club</h1>
<?php
	if(logged_in_member())
	{
		include_once("../includes/layouts/navbar_member_homepage.php");
	}
	elseif(logged_in_employee())
	{
		include_once("../includes/layouts/navbar_employee_homepage.php");
	}
	elseif(logged_in_admin())
	{
		include_once("../includes/layouts/navbar_admin_homepage.php");
	}
	else
	{
		include_once("../includes/layouts/navbar_homepage.php");
	}
?>
<!-- end of navigation bar-->

</head>
<body>
<br> 
<div id="slider" >
<figure>
<img src="images/1ed.jpg" alt = "img1" width = "20%">
<img src="images/2ed.jpg" alt = "img2" width = "20%">
<img src="images/3ed.jpg" alt = "img3" width = "20%">
<img src="images/4ed.jpg" alt = "img4" width = "20%">
<img src="images/5ed.jpg" alt = "img5" width = "20%">
</figure>
</div>

<hr>
<table id = "t01" style = "width : 100%">
	<tr>
		<th style = "text-align : left;">OPENING HOURS</th>
		<th style = "text-align:right;">ADDRESS</th>
	</tr>
	<tr>
		<td>Monday-Friday</td>
		<td style = "text-align:right;">Nathia Gali Road</td>
	</tr>
	<tr>
		<td>11am-11pm</td>
		<td style = "text-align:right;">Nathia Gali, Murree</td>
	</tr>
	<tr>
		<td>Saturday-Sunday</td>
		<td style = "text-align:right;">Pakistan</td>
	</tr>
	<tr>
		<td>10am-12am</td>
		<td style = "text-align:right;">65899468</td>
	</tr>
</table>
</body>
<!--Including Footer-->
<?php
	include_once("../includes/footer.php");
?>


</html>