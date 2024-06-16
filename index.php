<?php
/*********
* Name : Raphael Lee
* Program : TutorMD
* Date: May 8, 2023
* Purpose: Sign up people who want to tutor
***********/

include 'createthumbnail.php';
$allCourses = array(
"ma9"=>"Mathematics 09",
"mah9"=>"Mathematics 09 - Honours",
"nu9"=>"Numeracy 09",
"ma10"=>"Foundations of Mathematics and Pre-calculus 10",
"ma10h"=>"Honors Foundations of Mathematics and Pre-calculus 10",
"wpm11"=> "Workplace Mathematics 10",
"fom11"=>"Foundations of Mathematics 11",
"prec11"=>"Pre Calculus 11",
"prech11"=>"Pre Calculus Honors 11",
"wpm11"=>"Workplace Mathematics 11",
"apcal"=>"Advanced Placement Calculus",
"apst"=>"Advanced Placement Statistics",
"cal12"=>"Calculus 12",
"fm12"=>"Foundations of Mathematics 12",
"geo12"=>"Geometry 12",
"pcm12"=>"Pre-Calculus 12",
"pcm12h"=>"Pre-Calculus 12 - Honours",

"bell9"=>"Beginners ELL 09",
"ela9"=>"English Language Arts 09",
"co10"=>"Composition 10",
"bell10"=>"Beginners ELL 10",
"cw10"=> "Creative Writing 10",
"el10"=>"English Linear 10",
"ls10"=>"Literary Studies 10",
"spk11"=>"Spoken Language 11",
"cmps11"=>"Composition 11",
"cwr11"=>"Creative Writing 11",
"ls11"=>"Literary Studies 11",
"apen"=>"Advanced Placement English",
"cw12"=>"Creative Writing 12",
"drm12"=>"Drama 12",
"en12l"=>"English 12 Studies Linear (ELL)",
"enfp12"=>"English First Peoples 12",
"ens12"=>"English Studies 12",
"lit12"=>"Literary Studies 12",

"cf9"=>"Core French 09",
"sp9"=>"Spanish 09",
"cfr10"=>"Core French 10",
"spa10"=>"Spanish 10",
"cfr11"=>"Core French 11",
"iita11"=>"Introductory Italian 11",
"ita11"=>"Italian 11",
"mnd11"=>"Mandarin 11",
"spn11"=>"Spanish 11",
"man12"=>"Mandarin 12",
"sp12"=>"Spanish 12",
"it12"=>"Italian 12",
"cf12"=>"Core French 12",


"ro9"=>"Robotics 09",
"sc9"=>"Science 09",
"er10"=>"Electronics and Robotics 10",
"pow10"=>"Powertech 10",
"sci10"=> "Science 10",
"che11"=>"Chemistry 11",
"es11"=>"Environmental Science 11",
"lf11"=>"Life Science 11",
"Phy11"=>"Physics 11",
"phyc11"=>"Psychology 11",
"rbt11"=>"Robotics 11",
"apph"=>"Advanced Placement Physics",
"an12"=>"Anatomy and Physiology 12",
"che12"=>"Chemistry 12",
"cli12"=>"Climate Change 12",
"ed12"=>"Engine & Drivetrain 12",
"ro12"=>"Robotics 12",
"ph12"=>"Physics 12",

"ss9"=>"Social Studies 09",
"so10"=>"Social Studies 10",
"ss11"=>"Explorations in Social Studies 11",
"wh"=>"20th Century World History",
"com12"=>"Comparative Cultures 12",
"cri12"=>"Criminology 12",
"cis12"=>"Contemporary Indigenous Studies 12",
"law12"=>"Law Studies 12",
"phg12"=>"Physical Geography 12",

"di9"=>"Design & Innovation 09",
"df9"=>"Drafting 09",
"ict9"=>"Information and Communication Technology 9",
"cs10"=>"Computer Studies 10",
"drf10"=>"Drafting 10",
"yb10"=>"Yearbook 10" ,
"ict10"=>"Information and Communications Technology 10",
"md10"=> "Media Design 10",
"cp11"=>"Computer Programming 11",
"ss11"=>"Computer Science 11",
"dsi11"=>"Design and Innovation 11",
"dtco11"=>"Digital Communications 11",
"drf11"=>"Drafting 11",
"yb11"=>"Yearbook 11",
"md11"=>"Media Design 11",
"nm11"=>"New Media 11",
"3d"=>"3D Animations 12",
"apcs"=>"Advanced Placement Computer Science",
"cp12"=>"Computer Programming 12",
"cs12"=>"Computer Science 12",
"drf12"=>"Drafting 12",
"ft12"=>"Film and Television 12",
"yb12"=>"Yearbook 12",
"md12"=>"Media Design 12",

"ae9"=>"Arts Education 09",
"bb9"=>"Beginner Band 09",
"cb9"=>"Concert Band 09",
"cc9"=>"Concert Choir 09",
"dm9"=>"Drama 09",
"fs9"=>"Food Studies 09",
"ts9"=>"Trade Skills 9",
"gu9"=>"Instrumental Music: Guitar 9",
"jb9"=>"Instrumental Music: Jazz Band 09",
"te9"=>"Tech Ed 09: Mechanics",
"wo9"=>"Woodwork 09","drm10"=>"Drama 10" ,
"em" =>"Entrepreneurship and Marketing 10",
"ts10"=> "Inclusive Introduction to Trade Skills 10",
"cb10"=>"Instrumental Music: Concert Band 10",
"jb10"=>"Instrumental Music: Jazz Band 10",
"os10"=> "Orchestral Strings 10",
"ph10"=>"Photography 10",
"skie10"=>"Skills Explorations 10",
"acc11"=>"Accounting 11",
"art11"=>"Art Studio 11",
"at11"=>"Automotive Technology 11",
"cle"=>"Career Life Education",
"cho11"=>"Choral Music 11",
"cmld11"=>"Community Leadership",
"drm11"=>"Drama 11",
"fd11"=>"Fitness and Conditioning 11",
"hdc11"=>"Hip Hop and Dance Conditioning 11",
"Iits11"=>"Inclusive Introduction to Trade Skills",
"cb11"=>"Instrumental Music: Concert Band",
"gu11"=>"Instrumental Music: Guitar",
"jb11"=>"Instrumental Music: Jazz Band",
"mrk11"=>"Marketing11",
"os11"=>"Orchestral Strings 11",
"op11"=>"Outdoor Pursuits 11",
"prtr11"=>"Peer Tutoring 11",
"pht11"=>"Photography 11",
"sk11"=>"Skills Explorations 11",
"wdw11"=>"Woodwork 11",
"ygm11"=>"Yoga For Mindfulness 11",
"acc12"=>"Accounting 12",
"art12"=>"Art Studio 12",
"aut12"=>"Automotive Technology 12",
"clc"=>"Career Life Connections",
"cle"=>"Career Life Education",
"cho12"=>"Choral Music 12",
"ecom12"=>"E-Commerce 12",
"ent12"=>"Entrepreneurship 12",
"env12"=>"Environmental Leadership 12",
"skie12"=>"Skills Explorations 12",
"iits"=>"Inclusive Introduction to Trade Skills",
"imcb12"=>"Instrumental Music: Concert Band 12",
"img12"=>"Instrumental Music: Guitar 12",
"imjb12"=>"Instrumental Music: Jazz Band 12",
"os12"=>"Orchestral Strings 12",
"op12"=>"Outdoor Pursuits 12",
"pho12"=>"Photography 12",
"sp12"=>"Scholarship Preparation 12",
"se12"=>"Skill Exploration 12"

);

$fnameErr = $lnameErr = $emailErr = $dayErr = $pfpErr = $gradeErr = $coursesErr = $aboutmeErr = $pswErr = "";
$fname = $lname = $email = $grade = $aboutme = $note = $psw = "";
$courses = array();
$day = array();
$errorFree = true;
$tutor_array = array();
$schedule_array = array();

$image_dir = "profileimages/";
$thumb_dir = "thumbnails/";
$tutor_file = "tutorprofiles.json";
$schedule_file = "schedule.json";
$uid = 0;

session_start();
//if request to log out, log out
if (isset($_GET["action"]) && $_GET["action"] == "logout"){
	
	session_unset();
	session_destroy();
	
	$page = "home";
}

$isLoggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'];

//delete filees if requested to reset data
if (isset($_GET["action"]) && $_GET["action"] == "del") {
	if (file_exists($tutor_file)){
		unlink($tutor_file);
	}
	
	if (file_exists($schedule_file)){
		unlink($schedule_file);
	}
		
	if ($dh = opendir($image_dir)){
		while (($filename = readdir($dh)) !== false){
			if($filename != "." && $filename != ".."){
				unlink($image_dir . $filename);
			}
		}
		closedir($dh);
	}
	
	if ($dh = opendir($thumb_dir)){
		while (($filename = readdir($dh)) !== false){
			if($filename != "." && $filename != ".."){
				unlink($thumb_dir . $filename);
			}
		}
		closedir($dh);
	}
		 
}

//open tutor file if not empty
if (file_exists($tutor_file)){
	// read json file into array of strings
	$jsonstring = file_get_contents($tutor_file);

	//decode the string from json to PHP array
	$tutor_array = json_decode($jsonstring, true);
	
	$uid = end($tutor_array)['uid'] + 1;
}

//open calendar file if not empty
if (file_exists($schedule_file)){
	//if user requested to delete file, delete userprofiles.json
	// read json file into array of strings
	$jsonstring2 = file_get_contents($schedule_file);

	//decode the string from json to PHP array
	$schedule_array = json_decode($jsonstring2, true);
}


if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["formId"]) && $_GET["formId"] == "form") {
	
	if (empty($_POST["fname"])) {
		$fnameErr = "First name is required";
		$errorFree = false;
	} else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["fname"])){
		$fnameErr = "No special characters allowed.";
		$errorFree = false;
	} else if (preg_match('/\s/',$_POST["fname"])){
		$fnameErr = "No whitespace allowed.";
		$errorFree = false;
	} else {
	$fname = test_input($_POST["fname"]);
	}
	
	if (empty($_POST["lname"])) {
		$lnameErr = "Last name is required";
		$errorFree = false;
	} else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["lname"])){
		$lnameErr = "No special characters allowed.";
		$errorFree = false;
	} else if (preg_match('/\s/',$_POST["lname"])){
		$lnameErr = "No whitespace allowed.";
		$errorFree = false;
	} else {
		$lname = test_input($_POST["lname"]);
	}
	
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$errorFree = false;
	} else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
		$errorFree = false;
	} else {
		$email = test_input($_POST["email"]);
		if($tutor_array != null) {
			foreach($tutor_array as $profile){
				if($profile["email"] == $email){
					$emailErr = "There is already an account under this email.";
					$errorFree = false;
				}
			}
		}	
	}
	
	$target_file = $image_dir . basename($_FILES["pfp"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if (basename($_FILES["pfp"]["name"]) == "") {
		$pfpErr = "Profile pic is required.";
		$errorFree = false;
	} else if(!getimagesize($_FILES["pfp"]["tmp_name"])){
		$pfpErr = "File is not an image.";
		$errorFree = false;
	} else if(file_exists($target_file)){
		$pfpErr = "File already exists.";
		$errorFree = false;
	} else if($_FILES["pfp"]["size"] > 5000000){
		$pfpErr = "File must be less than 5MB.";
		$errorFree = false;
	} else if($imageFileType != "jpg" && $imageFileType != "jpeg"&& $imageFileType != "png"){
		$pfpErr = "Only JPG and PNG files are allowed.";
		$errorFree = false;
	} else if (!(exif_imagetype($_FILES["pfp"]["tmp_name"]) == 1 || exif_imagetype($_FILES["pfp"]["tmp_name"]) == 2 || exif_imagetype($_FILES["pfp"]["tmp_name"]) == 3 )){
		$pfpErr = "	Impostor image! Only REAL JPG, JPEG, PNG & GIF files are allowed.";
		$errorFree = false;
	} else {
		$target_file = $image_dir . $uid . "." . $imageFileType;
	}
	
	if (empty($_POST["day"])) {
		$dayErr = "You must select at least one day.";
		$errorFree = false;
	} else {
		$day = $_POST["day"];
	}
	
	if (empty($_POST["grade"])) {
		$gradeErr = "Grade is required";
		$errorFree = false;
	} else {
		$grade = test_input($_POST["grade"]);
	}
	
	if (empty($_POST["courses"])) {
		$coursesErr = "You must select at least one course.";
		$errorFree = false;
	} else {
		$courses = $_POST["courses"];
	}
	
	if (empty($_POST["aboutme"])) {
		$aboutmeErr = "You must write something about yourself.";
		$errorFree = false;
	} else {
		$aboutme = test_input($_POST["aboutme"]);
	}
	
	if (empty($_POST["psw"])) {
		$pswErr = "You must create a password.";
		$errorFree = false;
	} else {
		$psw = test_input($_POST["psw"]);
	}

}


else if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["formId"]) && $_GET["formId"] == "request") {
	
	if (empty($_POST["day"])) {
		$dayErr = "You must select at least one day to book.";
		$errorFree = false;
	} else {
		$day = $_POST["day"];
	}
	
	if (empty($_POST["fname"])) {
		$fnameErr = "First name is required";
		$errorFree = false;
	} else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["fname"])){
		$fnameErr = "First name is invalid.";
		$errorFree = false;
	} else {
	$fname = test_input($_POST["fname"]);
	}
	
	if (empty($_POST["lname"])) {
		$lnameErr = "Last name is required";
		$errorFree = false;
	} else if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["lname"])){
		$lnameErr = "Last name is invalid.";
		$errorFree = false;
	} else {
		$lname = test_input($_POST["lname"]);
	}
	
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$errorFree = false;
	} else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
	} else {
		$email = test_input($_POST["email"]);
	}
	
	if (empty($_POST["courses"])) {
		$coursesErr = "You must select at least one course you need help with.";
		$errorFree = false;
	} else {
		$courses = $_POST["courses"];
	}
	
	if (empty($_POST["note"])) {
		$_POST["note"] = "No additional info";
	} else {
		$note = test_input($_POST["note"]);
	}

}

else if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["formId"]) && $_GET["formId"] == "login") {
	
	$account = null;
	
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$errorFree = false;
	} else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
		$errorFree = false;
	} else {
		$email = test_input($_POST["email"]);
		if($tutor_array != null) {
			foreach($tutor_array as $profile){
				if($profile["email"] == $email){
					$account = $profile;
				}
			}
		}	
		if($account == null){
			$emailErr = "Account was not found. Please try a different email.";
			$errorFree = false;
		}
		

	}
	
	if (empty($_POST["psw"])) {
		$pswErr = "You must have a password for your account.";
		$errorFree = false;
	} else {
		$psw = $_POST["psw"];
		if($account != null && $account["psw"] != $psw){
			$pswErr = "Password is incorrect.";
			$errorFree = false;
		}
	}
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function peopleOnDay($day){
	$isLoggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'];
	$tutor_file = "tutorprofiles.json";
	$schedule_file = "schedule.json";
	$nameArray = array();
	$imagetypeArray = array();
	$info = array();	
	if(file_exists($tutor_file) && file_exists($schedule_file)){
		$onDay = array();

		// read json files into array of strings
		$jsonstring = file_get_contents($tutor_file);
		$jsonstring2 = file_get_contents($schedule_file);

		//decode the string from json to PHP array
		$tutor_array = json_decode($jsonstring, true);
		$schedule_array = json_decode($jsonstring2, true);
		
		//if logged in, display tutees. if not logged in, display availability
		if($isLoggedIn){
			if(isset($schedule_array[$_SESSION['account']['uid']][$day])){
				if($schedule_array[$_SESSION['account']['uid']][$day]['isBooked'] == true){
					$info = $schedule_array[$_SESSION['account']['uid']][$day]['tutee'];
					echo "<div class='calendar-box-green'><div><h2>" . $info[0] . " " . $info[1].  "</h2></div>";
					echo "<h3>Grade " . $info[3] . "</h3>";
					echo "<div><a href='mailto:" . $info[2] . "'>" . $info[2] . "</a></div>";
					echo "</div>";
				} else {
					echo "<div class='calendar-box-green'><h3 style='margin:10px;'>Available</h3></div>";
				}
			} else{
					echo "You don't tutor today.";
			}
			
		} else { // display availability of tutors who tutor on day
			//loop to match uid with name
			foreach($tutor_array as $tutor) {
				$nameArray[$tutor['uid']] = $tutor['fname'] . " " . $tutor['lname'];
				$imagetypeArray[$tutor['uid']] = $tutor['imagetype'];
			}
			
			//loop to find users that CAN tutor on day
			foreach($schedule_array as $uid => $schedule){
				if(isset($schedule[$day])){
					if($schedule[$day]["isBooked"] == false){
						echo "<div class='calendar-box-green' style='background-image: url(\"http://142.31.53.220/~csfive/tutormd6/thumbnails/" . $uid . "." . $imagetypeArray[$uid] ."\");'>";
						echo "<a class='calendar-link' href='http://142.31.53.220/~csfive/tutormd6/index.php?page=request&formId=request&uid=" . $uid . "'><div class='calendar-link'>";
						echo $nameArray[$uid];
						echo "</div></a></div>";
					}
				}
			}
			//loop to find users that are BOOKED on day
			foreach($schedule_array as $uid => $schedule){
				if(isset($schedule[$day])){
					if($schedule[$day]["isBooked"] == true){
						echo "<div class='calendar-box-red' style='background-image: url(\"http://142.31.53.220/~csfive/tutormd6/thumbnails/" . $uid . "." . $imagetypeArray[$uid] ."\");'>";
						echo "<a class='calendar-link' href='http://142.31.53.220/~csfive/tutormd6/index.php?page=request&formId=request&uid=" . $uid . "'><div class='calendar-link'>";
						echo $nameArray[$uid];
						echo "</div></a></div>";
					}
				}
			}
		}
	} else {
		echo "N/A";
	}
}


if ($_SERVER["REQUEST_METHOD"] == 'POST' && $errorFree && isset($_GET["formId"]) && $_GET["formId"] == "form") {
	$page = "home";
	
	//add UID to form submission
	$_POST['uid'] = $uid;
	
	//add image type to data
	if($imageFileType == "jpeg"){
		$imageFileType = "jpg";
	}
	$_POST['imagetype'] = $imageFileType; 
	// move image file to correct folder
	if (!file_exists($image_dir)){
		mkdir($image_dir);
	}
	move_uploaded_file($_FILES["pfp"]["tmp_name"], $target_file);
	
	// add form submission to form submission
	$tutor_array[] = $_POST;

	// encode the php array to formatted json 
	$jsoncode = json_encode($tutor_array, JSON_PRETTY_PRINT);

	// write the tutor json to the file
	file_put_contents($tutor_file, $jsoncode); 
	
	//initialize schedule block
	$schedule_array[$uid] = array();
	foreach($day as $tutorDay){
		$schedule_array[$uid][$tutorDay]["isBooked"] = false;
	}
	
	// encode the php array to formatted json 
	$jsoncode2 = json_encode($schedule_array, JSON_PRETTY_PRINT);

	// write the schedule json to the file
	file_put_contents($schedule_file, $jsoncode2); 
	
	//create thumbnails folder if it doesn't exist
	if (!is_dir($thumb_dir)){
		mkdir($thumb_dir);
	}
	
	// thumbnail dir
	$dest = $thumb_dir . $uid . "." . $imageFileType;

	// create a thumbnail of an image on the server
	if (!file_exists($dest)) {
		createThumbnail($target_file, $dest, 100, 100);
	}
	$_POST = array();
	
} else if ($_SERVER["REQUEST_METHOD"] == 'POST' && ! $errorFree && isset($_GET["formId"]) && $_GET["formId"] == "form") {
	$page = "form";
} else if ($_SERVER["REQUEST_METHOD"] == 'POST' && $errorFree && isset($_GET["formId"]) && $_GET["formId"] == "request") {
	
	//set block as booked and add tutee information
	foreach($day as $weekday){
		$schedule_array[$_GET['uid']][$weekday]["isBooked"] = true;
		$schedule_array[$_GET['uid']][$weekday]["tutee"] = array($_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["grade"], $_POST["courses"], $_POST["note"]);
	}
	
	
	// encode the php array to formatted json 
	$jsoncode = json_encode($schedule_array, JSON_PRETTY_PRINT);

	// write the json to the file
	file_put_contents($schedule_file, $jsoncode); 
	
	$page = "requestSuccess";
	
} else if ($_SERVER["REQUEST_METHOD"] == 'POST' && ! $errorFree && isset($_GET["formId"]) && $_GET["formId"] == "request") {
	$page = "request";
} else if ($_SERVER["REQUEST_METHOD"] == 'POST' && $errorFree && isset($_GET["formId"]) && $_GET["formId"] == "login") {
	
	
	
	$_SESSION['account'] = $account;
	$_SESSION['loggedIn'] = true;
	
	$page = "calendar";
	$_POST = array();
	
} else if ($_SERVER["REQUEST_METHOD"] == 'POST' && ! $errorFree && isset($_GET["formId"]) && $_GET["formId"] == "login") {
	$page = "login";
} else if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else {
	$page = "main";
}

$titleOfPage = "TutorMD : " . $page;

include "header.inc";


// show content
if ($page == "home") {
	include "home.inc";
	include "home.js";
} else if ($page == "form"){
	include "form.inc";
	$_GET["formId"] = "form";
} else if ($page == "login"){
	include "login.inc";
	$_GET["formId"] = "login";
} else if ($page == "account"){
	include "account.inc";
	$_GET["formId"] = "account";
} else if ($page == "search"){
	include "search.inc";
} else if ($page == "request"){
	include "request.inc";
	$_GET["formId"] = "request";
} else if ($page == "requestSuccess"){
	include "requestSuccess.inc";
} else if ($page == "calendar"){
	include "calendar.inc";
} else if($page == "main"){
	include "main.inc";
} else if($page == "all"){
	include "filterTutors.inc";
}else {
	include "main.inc";
}

// show lightbox
/*
if (isset($_GET["lightbox"])) {
	include $_GET["lightbox"];
}
*/

include "footer.inc";

?>