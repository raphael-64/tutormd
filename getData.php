<?php

// getData.php
//use $_GET array to get the value of the requested uid
// open json file, load contents into $phparray, and use a loop to 
// find an element with the matching uid
// echo the element of the php array with the matching uid
// something like this echo json_encode($phparray$i);

$allCourses = array(
"ae9"=>"Arts Education 09",
"bb9"=>"Beginner Band 09",
"cb9"=>"Concert Band 09",
"cc9"=>"Concert Choir 09",
"cf9"=>"Core French 09",
"di9"=>"Design & Innovation 09",
"df9"=>"Drafting 09",
"dm9"=>"Drama 09",
"bell9"=>"Beginners ELL 09",
"ela9"=>"English Language Arts 09",
"fs9"=>"Food Studies 09",
"ts9"=>"Trade Skills 9",
"ict9"=>"Information and Communication Technology 9",
"gu9"=>"Instrumental Music: Guitar 9",
"jb9"=>"Instrumental Music: Jazz Band 09",
"ma9"=>"Mathematics 09",
"mah9"=>"Mathematics 09 - Honours",
"nu9"=>"Numeracy 09",
"ro9"=>"Robotics 09",
"sc9"=>"Science 09",
"ss9"=>"Social Studies 09",
"sp9"=>"Spanish 09",
"te9"=>"Tech Ed 09: Mechanics",
"wo9"=>"Woodwork 09",
"co10"=>"Composition 10",
"cfr10"=>"Core French 10",
"bell10"=>"Beginners ELL 10",
"cs10"=>"Computer Studies 10",
"cw10"=> "Creative Writing 10",
"drf10"=>"Drafting 10",
"drm10"=>"Drama 10" ,
"er10"=>"Electronics and Robotics 10", 
"el10"=>"English Linear 10",
"em" =>"Entrepreneurship and Marketing 10",
"ma10"=>"Foundations of Mathematics and Pre-calculus 10",
"ma10h"=>"Honors Foundations of Mathematics and Pre-calculus 10",
"yb10"=>"Graphic Production 10" ,
"ts10"=> "Inclusive Introduction to Trade Skills 10",
"ict10"=>"Information and Communications Technology 10",
"cb10"=>"Instrumental Music: Concert Band 10",
"jb10"=>"Instrumental Music: Jazz Band 10",
"ls10"=>"Literary Studies 10",
"md10"=> "Media Design 10",
"os10"=> "Orchestral Strings 10",
"ph10"=>"Photography 10",
"pow10"=>"Powertech 10",
"sci10"=> "Science 10", 
"skie10"=>"Skills Explorations 10",
"so10"=>"Social Studies 10",
"spa10"=>"Spanish 10",
"wpm11"=> "Workplace Mathematics 10",
"acc11"=>"Accounting 11",
"art11"=>"Art Studio 11",
"at11"=>"Automotive Technology 11",
"cle"=>"Career Life Education",
"che11"=>"Chemistry 11",
"cho11"=>"Choral Music 11",
"cmld11"=>"Community Leadership",
"cmps11"=>"Composition 11",
"cp11"=>"Computer Programming 11",
"ss11"=>"Computer Science 11",
"cfr11"=>"Core French 11",
"cwr11"=>"Creative Writing 11",
"dsi11"=>"Design and Innovation 11",
"dtco11"=>"Digital Communications 11",
"drf11"=>"Drafting 11",
"drm11"=>"Drama 11",
"ell"=>"ELL Support Blocks/ Learning Strategies",
"es11"=>"Environmental Science 11",
"ss11"=>"Explorations in Social Studies 11",
"fd11"=>"Fitness and Conditioning 11",
"fom11"=>"Foundations of Mathematics 11",
"grp11"=>"Graphic Production 11",
"hdc11"=>"Hip Hop and Dance Conditioning 11",
"Iits11"=>"Inclusive Introduction to Trade Skills",
"cb11"=>"Instrumental Music: Concert Band",
"gu11"=>"Instrumental Music: Guitar",
"jb11"=>"Instrumental Music: Jazz Band",
"iita11"=>"Introductory Italian 11",
"ita11"=>"Italian 11",
"lf11"=>"Life Science 11",
"ls11"=>"Literary Studies 11",
"mnd11"=>"Mandarin 11",
"mrk11"=>"Marketing11",
"md11"=>"Media Design 11",
"nm11"=>"New Media 11",
"os11"=>"Orchestral Strings 11",
"op11"=>"Outdoor Pursuits 11",
"prtr11"=>"Peer Tutoring 11",
"pht11"=>"Photography 11",
"Phy11"=>"Physics 11",
"prec11"=>"Pre Calculus 11",
"prech11"=>"Pre Calculus Honors 11",
"phyc11"=>"Psychology 11",
"rbt11"=>"Robotics 11",
"sk11"=>"Skills Explorations 11",
"spn11"=>"Spanish 11",
"spk11"=>"Spoken Language 11",
"wdw11"=>"Woodwork 11",
"wpm11"=>"Workplace Mathematics 11",
"ygm11"=>"Yoga For Mindfulness 11",
"wh"=>"20th Century World History",
"3d"=>"3D Animations 12",
"acc12"=>"Accounting 12",
"apcal"=>"Advanced Placement Calculus",
"apcs"=>"Advanced Placement Computer Science",
"apen"=>"Advanced Placement English",
"apph"=>"Advanced Placement Physics",
"apst"=>"Advanced Placement Statistics",
"an12"=>"Anatomy and Physiology 12",
"art12"=>"Art Studio 12",
"aut12"=>"Automotive Technology 12",
"cal12"=>"Calculus 12",
"clc"=>"Career Life Connections",
"cle"=>"Career Life Education",
"che12"=>"Chemistry 12",
"cho12"=>"Choral Music 12",
"cli12"=>"Climate Change 12",
"com12"=>"Comparative Cultures 12",
"cp12"=>"Computer Programming 12",
"cs12"=>"Computer Science 12",
"cis12"=>"Contemporary Indigenous Studies 12",
"cf12"=>"Core French 12",
"cw12"=>"Creative Writing 12",
"cri12"=>"Criminology 12",
"drf12"=>"Drafting 12",
"drm12"=>"Drama 12",
"ecom12"=>"E-Commerce 12",
"ed12"=>"Engine & Drivetrain 12",
"en12l"=>"English 12 Studies Linear (ELL)",
"enfp12"=>"English First Peoples 12",
"ens12"=>"English Studies 12",
"ent12"=>"Entrepreneurship 12",
"env12"=>"Environmental Leadership 12",
"ft12"=>"Film and Television 12",
"fm12"=>"Foundations of Mathematics 12",
"geo12"=>"Geometry 12",
"gp12"=>"Graphic Productions 12 (Yearbook 12)",
"skie12"=>"Skills Explorations 12",
"iits"=>"Inclusive Introduction to Trade Skills",
"imcb12"=>"Instrumental Music: Concert Band 12",
"img12"=>"Instrumental Music: Guitar 12",
"imjb12"=>"Instrumental Music: Jazz Band 12",
"it12"=>"Italian 12",
"law12"=>"Law Studies 12",
"lit12"=>"Literary Studies 12",
"man12"=>"Mandarin 12",
"md12"=>"Media Design 12",
"os12"=>"Orchestral Strings 12",
"op12"=>"Outdoor Pursuits 12",
"pho12"=>"Photography 12",
"phg12"=>"Physical Geography 12",
"ph12"=>"Physics 12",
"pcm12"=>"Pre-Calculus 12",
"pcm12h"=>"Pre-Calculus 12 - Honours",
"ro12"=>"Robotics 12",
"sp12"=>"Scholarship Preparation 12",
"se12"=>"Skill Exploration 12",
"sp12"=>"Spanish 12");

$file = "tutorprofiles.json";
$uid = $_GET['uid'];

// read json file into array of strings
$jsonstring = file_get_contents($file);

//decode the string from json to PHP array
$phparray = json_decode($jsonstring, true);
$newphparray = array();

//find corresponding course name from course code
foreach($phparray as $profile){
	$courseNames = array();
	foreach($profile["courses"] as $code){
		array_push($courseNames, " " . $allCourses[$code]);
	}
	$profile["courses"] = $courseNames;
	array_push($newphparray, $profile);
}


//print the tutor info
echo json_encode($newphparray,JSON_PRETTY_PRINT)


?>