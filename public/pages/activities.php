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
<h1 style = "text-align : left;">Activities</h1>
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

<!--End of Navigation Bar-->
<h2>1. Tennis</h2>
<table>
<tr>
<td><img src="../images/index5454.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Tennis is an Olympic sport and is played at all levels of society and at all ages. The sport can be played by anyone who can hold a racket, including wheelchair users. <br><br>
When:<br>
Saturdays between 1-3pm</p></td>
</tr>
</table>
<hr>
<h2>2. Swimming</h2>
<table>
<tr>
<td><img src="../images/index45.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Located right next to the Clubhouse with panoramic views of the city and countryside, the Olympic-sized pool is the center for summer events. From Junior swim training and poolside lounging to evening cocktail parties, the pool is the hub of summer social activity at Royal Palm.<br>

A certified swim instructor and guards provide opportunities for our Members to enjoy summer at the pool. Swim lessons, group or private, for all ages, are available throughout the season. Lap lanes are provided for those wishing to use the pool for exercise.  Adult swim times are scheduled on the hour every hour from 1pm to 5pm.<br><br>
When:<br>
Everyday between 8 am-5pm  </p></td>
</tr>
</table>
<hr>
<h2>3. Golf</h2>
<table>
<tr>
<td><img src="../images/golf.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>The Royal Palm club offers golf club to the interested members. Members can play as a team and winning team get the trophy. There is only a single golf ground in our club, and only one trainer is training this game.  </p></td>
</tr>
</table>
<hr>
<h2>4. Club House (Only for Privileged Members)</h2>
<table>
<tr>
<td><img src="../images/room.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Rich in Tradition and Contemporary in Feel...

From Ballroom to gathering spaces, dining areas to poolside, Royal Palm Country Club is a comfortable place to retreat, relax and enjoy life with friends and family.  Business meetings and wedding receptions are equally at home in Royal Club's beautiful Clubhouse. <br><br>

Rich fabrics, unique wall coverings, mood lighting, fireplaces and a mix of both contemporary and traditional furniture inside the Clubhouse have all been selected to reward and relax you after you have made your way through the demands of daily life.<br><br>

Excellent food and outstanding service greet Members and their guests in five unique dining areas.   </p></td>
</tr>
</table>
<hr>
<h2>5. Dining</h2>
<div id="menu"><table>
<tr>
<td><img src="../images/food.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Royal Palm Country Club has a spot for everyone to enjoy, from the spacious Ballroom, to multiple Dining Rooms, to Poolside service.  The Club is a comfortable place for Members and guests to retreat, relax and enjoy life.  The Dining Rooms are all unique in their own way.Excellent food and service are provided in all dining areas of the Club.  The food and beverage team at Royal Palm strives to make every visit a great visit!<br><br>
For Details:<br><br><a href="food.pdf">Lunch,Dinner</a><br>
<a href="Breakfast.pdf">BreakFast</a></p></td>
</tr>
</table></div>
<hr>
<h2>6. Sunday Brunch</h2>
<table>
<tr>
<td><img src="../images/sunday.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>
Royal Palm makes your Sunday a great day with the special Sunday breakfast and lunch.<br><br>
When:<br>
From 9am-1pm we serve your favorite Sunday roast </p></td>
</tr>
</table>
<hr>
<h2>7. Yoga and Fitness Center</h2>
<table>
<tr>
<td><img src="../images/fitness.jpg" height="200" width="350" style = "border : 2px solid black;"/></td>
<td><p>Health is one of the most valuable things in life. Here at The Royal Palm, we care about the health and wellbeing of our members. Our Yoga and Training Gyms are State-of-the-Art, and are under the super-vision of top ranking
professional trainers. Our gyms are second to none, and are a favorite of several world-famous athletes, like Dwayne "The Rock" Johnson, and Roger Federer. Our clients trust us, that is why we take
extra care in providing the best possible services to them!</p></td>
</tr>
</table>


</body>
</head>
<!--Including Footer-->
<?php
	include_once("../../includes/footer.php");
?>

</html>