<?php

if (isset($_GET["courseFilter"]) || isset($_GET["gradeFilter"])){

	$cf = $_GET["courseFilter"]; // course filter
	$gf = $_GET["gradeFilter"]; // grade filter
	
	$students = json_decode(file_get_contents("userprofiles.json"), true);

	$fetch = new Array();

	for(let $i = 0; $i < count($students); $i++){
		
		// check for grade
		if($students[i]["grade"] == $gf){

			$check = true;
	
			for($v = 0; $v < count($cf); $v++){
				if(in_array($cf[v], $students[i]"[_courses"]) == false){
					$check = false;
				}
			}
			
			if($check){
				$fetch[] = $students[i];
			}
		}
	}

	echo json_encode($fetch);
}