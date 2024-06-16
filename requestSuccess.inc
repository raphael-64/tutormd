<h1>Session Booked</h1>

<div>
<h2> You have booked a session with 
<?php 
$tutor = array();
// read json file into array of strings
$jsonstring = file_get_contents($tutor_file);

//decode the string from json to PHP array
$phparray = json_decode($jsonstring, true);

//loop to find matching uid
foreach($phparray as $profile) {
	if($profile['uid'] == $_GET['uid']){
		echo " " . $profile['fname'] . " " . $profile['lname'] . " on:<br>";
		$email = $profile['email'];
	}
}

foreach($_POST['day'] as $bookedDay){
	echo $bookedDay . "<br>";
}

echo "If you need to reach out, contact at <a id='emailLink' href='mailto:" . $email . "'>" . $email . "</a>";
?> 
</h2><br><br>

</div>
