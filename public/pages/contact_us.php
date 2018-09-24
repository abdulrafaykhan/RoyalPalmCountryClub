<?php	require_once("../../includes/functions.php"); ?>
<?php	require_once("../../includes/session.php"); ?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
<link rel="shortcut icon" href="images/index.png" type="image/x-icon" />
<title>The Royal Palm</title>
<link rel = "stylesheet" href = "../stylesheets/contact_us_styling.css">
<?php
	if(logged_in_member() || logged_in_employee() || logged_in_admin())
	{
		
	?>
<a href = "logout.php" style = "float : right;">Logout</a>
<?php
	}
?>
<h1>Contact Information</h1>

<!--Including Navigation Bar-->
<?php
	if(logged_in_member())
	{
		include_once("../../includes/layouts/navbar_member.php");
	}
	elseif(logged_in_employee())
	{
		include_once("../../includes/layouts/navbar_employee.php");
	}
	elseif(logged_in_admin())
	{
		include_once("../../includes/layouts/navbar_admin.php");
	}
	else
	{
		include_once("../../includes/layouts/navbar.php");
	}
?>
<!--End of Navigation Bar-->

</head>
<body>
<br>
<img src = "../images/imagessdf.jpg" alt = "TheRoyalPalm" style = "border : 2px solid black;" height = "350px" width = "1245px">
<p>Now is the time to enjoy life. And life at Royal Palm is about friendships, families, personalized service and relaxation. The breathtaking beauty of the Maxwell 18 Hole course, framed by the Rocky Mountains on the West and the skyline of downtown Denver to the Northeast, complemented by the lush, green fairways of the Pfluger 9 Hole golf course, is sure to please.<br></p>
<p>The deep blue water in the Olympic-sized swimming pool provides an aesthetic beauty to the Clubhouse as Members watch the Swim and Dive Team sharpen their skills from the spacious patio in the summer. The Club provides a variety of activities throughout the year with emphasis on Holiday activities and parties.<br></p>
<p> The Members Grille, Family Grille and Royal Room provides a rich, traditional atmosphere for couples and families.
The front entrance of the Clubhouse provides a warm welcome to all with rich warm woods and exquisite carpets leading to meeting and banquet facilities that can accommodate groups from 20 to 500 people. The Men's and Ladies Locker Rooms feature wood lockers with comfortable lounges in each area for Members' use.<br></p>
<h2>CONTACT US</h2>
<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<p><label for="name">Your name:</label></p>
		<p><input id="name" class="input" name="name" type="text" value="" size="30" /></p><br />
	</div>
	<div class="row">
		<p><label for="email">Your email:</label></p>
		<p><input id="email" class="input" name="email" type="text" value="" size="30" /></p><br />
	</div>
	<div class="row">
		<p><label for="message">Your message:</p></label>
		<p><textarea id="message" class="input" name="message" rows="7" cols="30">
		</textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
</form>						
</body>
<!--Including Footer-->
<?php	include_once("../../includes/footer.php"); ?>

</html>


