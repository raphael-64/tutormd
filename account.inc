
<!--display welcome message with name -->
<?php	
	if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		echo "<h2>" .  $_SESSION['account']['fname'] . " " . $_SESSION['account']['lname'] . "'s Account</h2>";
	}
?>

<!--form with autofilled values -->

<form method="post" action="index.php?formId=form" enctype="multipart/form-data"> 
	First name: <input type="text" name="fname" value="<?php echo $_SESSION['account']['fname'];?>">
	<span class="error"><?php echo $fnameErr;?></span><br>

	Last name: <input type="text" name="lname" value="<?php echo $_SESSION['account']['lname'];?>">
	<span class="error"><?php echo $lnameErr;?></span><br>
	<br>

	Email: <input type="text" name="email" value="<?php echo $_SESSION['account']['email'];?>">
	<span class="error"><?php echo $emailErr;?></span><br>
	<br><br>
	
	<?php	
	if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		echo "<img src='thumbnails/" . $_SESSION['account']['uid'] . "." .  $_SESSION['account']['imagetype'] . "' alt='thumbnail image'>";
	}
	?><br>
	Change your profile pic: <br>
	<input type="file" name="pfp" id="pfp">
	<span class="error"><?php echo $pfpErr;?></span>
	<br><br>

	Change your current grade:
	<span class="error"><?php echo $gradeErr;?></span><br>
	<input type="radio" id="gr9" name="grade" value="9" <?php if (isset($_SESSION['account']['grade']) && $_SESSION['account']['grade']=="9") echo "checked";?>>
	<label for="gr9">Grade 9</label><br>
	<input type="radio" id="gr10" name="grade" value="10" <?php if (isset($_SESSION['account']['grade']) && $_SESSION['account']['grade']=="10") echo "checked";?>>
	<label for="gr10">Grade 10</label><br>
	<input type="radio" id="gr11" name="grade" value="11" <?php if (isset($_SESSION['account']['grade']) && $_SESSION['account']['grade']=="11") echo "checked";?>>
	<label for="gr11">Grade 11</label><br>
	<input type="radio" id="gr12" name="grade" value="12" <?php if (isset($_SESSION['account']['grade']) && $_SESSION['account']['grade']=="12") echo "checked";?>>
	<label for="gr12">Grade 12</label>
	<br><br>

	Update Courses you can Tutor:
	<span class="error"><?php echo $coursesErr;?></span><br>
	<?php
		foreach($allCourses as $key => $value) {
			if($key =="ma9"){
				echo "Mathematics";
				echo "<div class='courseContainer math'>";
			} else if($key == "bell9"){
				echo "</div>";
				echo "<div class='courseContainer bell9'>";
			} else if($key == "cf9"){
				echo "</div>";
				echo "<div class='courseContainer languages'>";
			} else if($key == "ro9"){
				echo "</div>";
				echo "<div class='courseContainer sciences'>";
			} else if($key == "ss9"){
				echo "</div>";
				echo "<div class='courseContainer socials'>";
			} else if($key == "di9"){
				echo "</div>";
				echo "<div class='courseContainer digital-studies'>";
			} else if($key == "ae9"){
				echo "</div>";
				echo "<div class='courseContainer digital-studies'>";
			}
			echo "<div class='courseCheckbox'><label for='" . $key . "'><input type='checkbox' id='" . $key . "' name='courses[]' value='" . $key . "'";
			foreach($_SESSION['account']['courses'] as $course){
				if($course == $key){
					echo " checked";
				}
			}
			echo "><span>" . $value . "</span></label></div>";
			if($key == "se12"){
				echo "</div>";
			} 

		}
	?><br>

	About Me:
	<span class="error"><?php echo $aboutmeErr;?></span><br>
	<textarea id = "aboutme" name="aboutme"><?php echo $_SESSION['account']['aboutme'];?></textarea> <br><br>

	Change Password: 
	<span class="error"><?php echo $pswErr;?></span><br>
	<input type="password" name="psw">
	<br><br>

	<button type="submit" formmethod="post">Update Account Information</button><br>
</form>