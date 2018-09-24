<?php
	require_once("../../includes/functions.php");
	require_once("../../includes/session.php");
?>
<!DOCTYPE html>
<html lang = "en-US">
<head>
<link rel="shortcut icon" href="images/index.png" type="image/x-icon" />
<title>The Royal Palm</title>
<link rel = "stylesheet" href = "../stylesheets/activities_styling.css">
<?php
	if(logged_in_member() || logged_in_employee() || logged_in_admin())
	{
		
	?>
<a href = "logout.php" style = "float : right; top 0;">Logout</a>
<?php
	}
?>
<h1 style = "text-align : left;">Rooms</h1>
<body>
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
<p>The Royal Palm Country Club offers you a choice of executive rooms, studios, spa rooms, suites and self-contained serviced apartments for your next The Royal Palm holiday and to suit just about all accommodation needs for a trip to the Palm! Our accommodation is perfect for families, couples, groups, corporate & business travellers, self-drive, coach groups and golf holidays.</p>
<!--End of Navigation Bar-->
<h2>1. Executive Suite</h2>
<table>
<tr>
<td><img src="../images/room1.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Executive Rooms are the lead-in room type at the resort. They are a spacious hotel room with a recently refurbished ensuite bathroom and a queen size bed. Executive Rooms differ in their outlook and position around our resort, some featuring a sliding door opening onto manicured gardens, and some with a small balcony. Executive rooms may also have an additional single bed, or a sofa bed, for twin or triple share. Suitable for up to 3 people.<br><br>
</p></td>
</tr>
</table>
<hr>
<h2>2. Superior Club Suite</h2>
<table>
<tr>
<td><img src="../images/room7.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Upgrade to a Superior Cub Room featuring a recently refurbished ensuite bathroom with spa bath for a little added luxury! Rooms vary in their positioning with glorious views to the golf course, lake or overlooking our picturesque resort grounds. Some superior spa rooms also have an additional single bed, or a sofa bed, for twin or triple share. Suitable for up to 3 people.<br>
</p></td>
</tr>
</table>
<hr>
<h2>3. Kichnette Suite</h2>
<table>
<tr>
<td><img src="../images/room8.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>When you stay in a Kitchenette Spa Suite, enjoy a bedroom area featuring queen size bed, separate living area and recently refurbished ensuite bathroom with spa bath. Your kitchenette has also been refurbished and offers basic cooking facilities. There is an additional single bed and a double sofa in the living area, making it ideal for couples travelling with a child. Suitable for up to 5 people.</p></td>
</tr>
</table>
<hr>
<h2>4. Family Suite</h2>
<table>
<tr>
<td><img src="../images/room3.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Family Spa Suites each feature two queen size beds – one in a separate bedroom area, one in the living area. The ensuite bathroom has a spa bath and there is an additional single bed in the living area. Suitable for up to 5 people.</p></td>
</tr>
</table>
<hr>
<h2>5. King Suite</h2>
<div id="menu"><table>
<tr>
<td><img src="../images/room9.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Located on the 1st floor of the main resort building, this is one of our more spacious resort rooms. Featuring a king size bed in a dedicated bedroom area, separate living area with basic kitchenette facilities, recently refurbished ensuite with spa bath and a private balcony with views of the picturesque resorts grounds and Lake Inchiquin.  Suitable for 2people.<br><br></p></td>
</tr>
</table></div>
<hr>
<h2>6. Studio Suite</h2>
<table>
<tr>
<td><img src="../images/room4.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>
Situated in our apartment block, enjoy uninterrupted  views of  the lake from the shared terrace of your room. This is a modern hotel-style room that offers an ensuite bathroom with spa bath, a king size bed and a microwave & sink as an additional feature. King bed can be split into two singles for twin share, if required. Suitable for 2 people. </p></td>
</tr>
</table>
<hr>
<h2>7. Two Bedroom Apartment</h2>
<table>
<tr>
<td><img src="../images/room10.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Spacious 2 bedroom apartments are serviced daily and feature two bedrooms with king size beds, a spacious living area, dining table and fully equipped kitchen.  Bathroom with spa bath, laundry facilities and a shared outdoor terrace with Lake views, an outdoor setting & mini barbeque. King beds can be split into two singles in each room, if required. Suitable for up to 4 people</td>
</tr>
</table>
<hr>
<h2>8. Three Bedroom Apartment</h2>
<table>
<tr>
<td><img src="../images/room5.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Combine a 2 bedroom apartment with an adjacent studio spa room and you have an extra spacious 3 bedroom apartment that’s serviced daily. 3 bedrooms with king size beds, two bathrooms both with spa baths, a spacious living area, dining table, fully equipped kitchen, laundry facilities and a balcony overlooking the pond to the golf course with outdoor setting & mini barbeque. King beds can be split into two singles in each room, if required. Suitable for up to 6 people.

Get the best rate available by booking direct with us! Phone the resort directly on 08 8842 1060 for 3 Bedroom Apartments special offers & availability.</td>
</tr>
</table>
<p style="text-align:right;"><button href = "book_rooms.php">Book Now!</p></button>

</body>
</head>
<!--Including Footer-->
<?php
	include_once("../../includes/footer.php");
?>

</html>