<script src="home.js" defer></script>


<h1>Our Tutors</h1>


<?php
	
	
	if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
		echo "<h2>Welcome " .  $_SESSION['account']['fname'] . "</h2>";
	}
?>
<div id="filterSection">
	<div class="dayContainer">
		<div class="gradeRadio" onclick="">
			<label for="d"><input type="checkbox" id="d" name="m" value="grade">
			<span>Grade</span></label>
		</div>
		<div class="gradeRadio"onclick="">
			<label for="c"><input type="checkbox" id="c" name="m" value="courses">
			<span>Courses</span></label>
		</div>
	</div>
</div>
<?php	
	/*
	if (file_exists($tutor_file)){
		$jsonstring = file_get_contents($file);

		//decode the string from json to PHP array
		$phparray = json_decode($jsonstring, true);
		echo '<pre>' . json_encode($phparray, JSON_PRETTY_PRINT) . '</pre>';
	}
	*/
	
	
if (!is_dir($thumb_dir)){
	mkdir($thumb_dir);
}

if ($dh = opendir($thumb_dir)){
	echo "<div id='main'>";
	$images = array();
	$ids = array();
	$i = 0;
	while (($file = readdir($dh)) !== false){
		if ($file != "." && $file != ".."){
			$images[$i] = $file; 
			$ids[$i] = explode(".", $file);
			$i++;
		}
	}
	for ($i = 0; $i < sizeof($images); $i++){
		echo $images[$i];
	}
	sort($images);
	for ($i = 0; $i < sizeof($images); $i++){
		echo $images[$i];
	}
	for ($i = 0; $i < sizeof($images); $i++){
		echo "<div class='card' onclick=\"displayLightBox('" . $images[$i] . "')\"><img class='thumb' src='" . $thumb_dir . $images[$i] . "' alt=''></div>";
	}
	echo "</div>";
} 
?> 

<div id="lightbox" class="hidden">	
</div>
	
<div id="positionBigImage">
	
	<div id="boundaryBigImage" class="hidden">
		<img id="x" src="http://142.31.53.220/~csfive/tutormd6/images/x.png" alt="close" onclick="displayLightBox('')">
		<div id="bigImageContainer"><img id="bigImage" src="" alt=""></div>
		<p id="text"></p>
	</div>	  
		  
</div>


