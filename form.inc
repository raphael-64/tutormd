<h1>Join Our Team</h1>
<div>
<form method="post" action="index.php?formId=form" enctype="multipart/form-data">
	
	<div class="textInput">
	<span class="error"><?php echo $fnameErr;?></span> <br>
	First name: <br>
	<input type="text" name="fname" value="<?php echo $fname;?>"><br>
	
	<span class="error"><?php echo $lnameErr;?></span> <br>
	Last name: <br>
	<input type="text" name="lname" value="<?php echo $lname;?>"><br>
	
	<span class="error"><?php echo $emailErr;?></span><br>
	Email: <br>
	<input type="text" name="email" id="emailInput" value="<?php echo $email;?>"><br>
	</div>
	
	
	<span class="error"><?php echo $pfpErr;?></span><br>
	Upload a profile pic: <br>
	<input type="file" name="pfp" id="pfp"><br>
	<br>
	
	<span class="error"><?php echo $gradeErr;?></span><br>
	What grade are you in? <br>
	<div class="gradeContainer">
		<div class="gradeRadio">
			<label for="gr9"><input type="radio" id="gr9" name="grade" value="9" <?php if (isset($grade) && $grade=="9") echo "checked";?>>
			<span>9</span></label>
		</div>
		<div class="gradeRadio">
			<label for="gr10"><input type="radio" id="gr10" name="grade" value="10" <?php if (isset($grade) && $grade=="10") echo "checked";?>>
			<span>10</span></label>
		</div>
		<div class="gradeRadio">
			<label for="gr11"><input type="radio" id="gr11" name="grade" value="11" <?php if (isset($grade) && $grade=="11") echo "checked";?>>
			<span>11</span></label>
		</div>
		<div class="gradeRadio">
			<label for="gr12"><input type="radio" id="gr12" name="grade" value="12" <?php if (isset($grade) && $grade=="12") echo "checked";?>>
			<span>12</span></label>
		</div>
	</div>
	<br><br>
	
	<span class="error"><?php echo $dayErr;?></span>
	<h2>Select the days you can tutor:</h2>
	<div class="dayContainer">
		<div class="dayCheckbox">
			<label for='Mday'><input type='checkbox' id='Mday' name='day[]' value='Monday' 
			<?php foreach($day as $selected){
				if($selected == 'Monday'){
					echo " checked";
				}
			}
			?>>
			<span>Monday</span></label>
		</div>
		<div class="dayCheckbox">
			<label for='Tuday'><input type='checkbox' id='Tuday' name='day[]' value='Tuesday'
			<?php foreach($day as $selected){
				if($selected == 'Tuesday'){
					echo " checked";
				}
			}
			?>>
			<span>Tuesday</span></label>
		</div>
		<div class="dayCheckbox">
			<label for='Wday'><input type='checkbox' id='Wday' name='day[]' value='Wednesday'
			<?php foreach($day as $selected){
				if($selected == 'Wednesday'){
					echo " checked";
				}
			}
			?>>
			<span>Wednesday</span></label>
		</div>
		<div class="dayCheckbox">
			<label for='Thday'><input type='checkbox' id='Thday' name='day[]' value='Thursday'
			<?php foreach($day as $selected){
				if($selected == 'Thursday'){
					echo " checked";
				}
			}
			?>>
			<span>Thursday</span></label>
		</div>
		<div class="dayCheckbox">
			<label for='Fday'><input type='checkbox' id='Fday' name='day[]' value='Friday'
			<?php foreach($day as $selected){
				if($selected == 'Friday'){
					echo " checked";
				}
			}
			?>>
			<span>Friday</span></label>
		</div>
	</div>
	<br><br>
	
		<span class="error"><?php echo $coursesErr;?></span>
	<h2>Select the courses you can tutor:</h2>
	<?php
		foreach($allCourses as $key => $value) {
			if($key =="ma9"){
				echo "<div class='courseContainer math'>";
			} else if($key == "bell9"){
				echo "</div>";
				echo "<div class='courseContainer english'>";
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
				echo "<div class='courseContainer other'>";
			}
			echo "<div class='courseCheckbox'><label for='" . $key . "'><input type='checkbox' id='" . $key . "' name='courses[]' value='" . $key . "'";
			foreach($courses as $course){
				if($course == $key){
					echo " checked";
				}
			}
			echo "><span>" . $value . "</span></label></div>";
			if($key == "se12"){
				echo "</div>";
			} 
		}
	?>
	<br>
	
	<div class="textInput">
	
	<span class="error"><?php echo $aboutmeErr;?></span><br>
	Tell us about yourself! <br>
	<textarea id = "aboutme" name="aboutme" maxlength="140"><?php echo $aboutme;?></textarea> <br><br>

	<span class="error"><?php echo $pswErr;?></span><br>
	Choose a password for your account:  <br>
	<input type="password" name="psw" value="<?php echo $psw;?>"></input>
	<br><br>
	</div>
	
	<button type="submit" formmethod="post">SUBMIT</button><br>
	<br>
</form>
</div>