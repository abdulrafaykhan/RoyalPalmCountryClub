		<p>Activities</p>
		<p><input type = "checkbox" name = "tennis" value = ""/>Tennis</p>
		<p><input type = "checkbox" name = "swimming" value = ""/>Swimming</p>
		<p><input type = "checkbox" name = "golf" value = ""/>Golf</p>
		<p><input type = "checkbox" name = "dining" value = ""/>Dining</p>
		<p><input type = "checkbox" name = "sundaybrunch" value = ""/>Sunday Brunch</p>
				<p>Select any one of your free activities: <br>
		<select name = "activities">
			<option value = "1">Tennis</option>
			<option value =  "2">Swimming</option>
			<option value = "3">Golf</option>
			<option value = "4">Dining</option>
			<option value = "5">Sunday Brunch</option>
		</select>
		
				//First getting the last ID
					/*$rowSQL = mysqli_query($connection, "SELECT MAX(ID) AS max FROM member");
			if($rowSQL)
			{
					$row = mysqli_fetch_array($rowSQL);
			$largestNumber = $row['max'];
			$largestNumber++;
			
			$id = $largestNumber;
			}
			else
			{
				die("Invalid ID");
			}*/