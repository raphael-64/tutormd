<h1>Request a Tutor</h1>


<form class='request' method='post' action="index.php?formId=request&uid=<?php echo $_GET["uid"];?>">
<div class="tutorInfo">
<?php
	$tutor_file = "tutorprofiles.json";
	$schedule_file = "schedule.json";
	$noSpot = true;
	
	if (isset($_GET['uid']) && file_exists($tutor_file) && file_exists($schedule_file)){
		$tutor = array();
		$schedule = array();

		// read json file into array of strings
		$jsonstring = file_get_contents($tutor_file);
		$jsonstring2 = file_get_contents($schedule_file);

		//decode the string from json to PHP array
		$phparray = json_decode($jsonstring, true);
		$phparray2 = json_decode($jsonstring2, true);
		
		if($_GET['uid'] < 0 || $_GET['uid'] > end($tutor_array)['uid']){
			echo "Sorry, the link is invalid.<br><br>"; 
			echo "<a href='javascript:history.back()' style='background-color:white;'>Go Back</a><br></div>";
		} else{
			//loop to find matching uid
			foreach($phparray as $profile) {
				if($profile['uid'] == $_GET['uid']){
					$tutor = $profile;
				}
			}
			$schedule = $phparray2[$_GET['uid']];
			
			echo "<h2>I'm " . $tutor['fname'] . " " . $tutor['lname'] ."!</h2>";
			echo "<img src='thumbnails/" . $tutor['uid'] . "." .  $tutor['imagetype'] . "' alt='thumbnail image'>";
			
			foreach($schedule as $day => $info){
				if($info["isBooked"] == false){
					$noSpot = false;
				}
			}
			if($noSpot){
				echo "<br>Sorry, I am fully booked.<br><br>";
				echo "<a href='javascript:history.back()' style='background-color:white;'>Go Back</a><br></div>";
			} else {
				include "requestForm.inc";
			}
		}
		
	} else {
		echo "Sorry, the link is invalid.<br><br>"; 
		echo "<a href='javascript:history.back()' style='background-color:white;'>Go Back</a><br></div>";
	}
?>

</form>