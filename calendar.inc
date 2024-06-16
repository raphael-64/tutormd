<?php
	
	if ($isLoggedIn){
		echo "<h1>" .  $_SESSION['account']['fname'] . "'s Schedule</h1>";
	} else{
		echo "<h1>Weekly Calendar</h2>";
	}
?>

<div class="calendar-grid-container">
	<div id="monday" class="day">Monday</div>
	<div id="tuesday" class="day">Tuesday</div>
	<div id="wednesday" class="day">Wednesday</div>
	<div id="thursday"class="day">Thursday</div>
	<div id="friday" class="day">Friday</div>
	
	<div id="m" class="wrapper"><?php peopleOnDay("Monday");?></div>
    <div id="tu" class="wrapper"><?php peopleOnDay("Tuesday"); ?></div>
    <div id="w" class="wrapper"><?php peopleOnDay("Wednesday"); ?></div>
	<div id="th" class="wrapper"><?php peopleOnDay("Thursday"); ?></div>
	<div id="f" class="wrapper"><?php peopleOnDay("Friday"); ?></div>

</div>
<div class="mobile-calendar">
	<div class="dayContainer">
		<div class="gradeRadio" onclick="mobileCalendar('m')">
			<label for="md"><input type="radio" id="md" name="day" value="M">
			<span>M</span></label>
		</div>
		<div class="gradeRadio"onclick="mobileCalendar('tu')">
			<label for="tud"><input type="radio" id="tud" name="day" value="Tu">
			<span>Tu</span></label>
		</div>
		<div class="gradeRadio"onclick="mobileCalendar('w')">
			<label for="wd"><input type="radio" id="wd" name="day" value="W">
			<span>W</span></label>
		</div>
		<div class="gradeRadio" onclick="mobileCalendar('th')">
			<label for="thd"><input type="radio" id="thd" name="day" value="Th">
			<span>Th</span></label>
		</div>
		<div class="gradeRadio" onclick="mobileCalendar('f')">
			<label for="fd"><input type="radio" id="fd" name="day" value="F">
			<span>F</span></label>
		</div>
	</div>
	<div id="wrapperMobile" class="wrapper mobile"></div>
</div>
<br>