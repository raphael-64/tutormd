		<h2>Choose session day(s):</h2>
		<span class="error"><?php echo $dayErr;?></span>
		<div class="dayContainer">
			<?php
				foreach($schedule as $day => $info){
					if($info["isBooked"] == false){
						echo "<div class='dayCheckbox'>";
						echo "<label for='" . $day . "'><input type='checkbox' id='" . $day . "' name='day[]' value='" . $day . "'>";
						echo "<span>" . $day . "</span></label>";
						echo "</div>";
					}
				}
				echo "</div>";
			?>
	
	</div>
	
	<div class="tuteeInfo">
	
		<h2>Your Information</h2><br>
		<div class="textInput">
		<span class="error"><?php echo $fnameErr;?></span> <br>
		First name: <br>
		<input type="text" name="fname" value="<?php echo $fname;?>"><br><br>
		
		<span class="error"><?php echo $lnameErr;?></span> <br>
		Last name: <br>
		<input type="text" name="lname" value="<?php echo $lname;?>"><br><br>
		
		<span class="error"><?php echo $emailErr;?></span><br>
		Email: <br>
		<input type="text" name="email" id="emailInput" value="<?php echo $email;?>"><br><br>
		</div>
		
		What grade are you in?
		<span class="error"><?php echo $gradeErr;?></span>
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
		
		Which course(s) do you need help with?
		<span class="error"><?php echo $coursesErr;?></span>
		<div class="courseContainer">
		<?php
			foreach($allCourses as $key => $value) {
				foreach($tutor["courses"] as $tutorKey){
					if($key == $tutorKey){
						echo "<div class='courseCheckbox'><label for='" . $key . "'><input type='checkbox' id='" . $key . "' name='courses[]' value='" . $key . "'";
						foreach($courses as $course){
							if($course == $key){
								echo " checked";
							}
						}
						echo "><span>" . $value . "</span></label></div>";
					}
				}
			}
		?>
		</div>
		<br>
		<div class="textInput">
		Is there anything specific you want to tell me?<br><br>
		<textarea id = "note" name="note"><?php echo $note;?></textarea> <br><br>
		
		<button type="submit" formmethod="post">Book <?php echo $tutor['fname']; ?></button><br>
		</div>
		<br>
	</div>

