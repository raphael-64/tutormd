<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title><?php echo $titleOfPage; ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Fun:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Thasadith&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- include an external style sheet -->
    <link rel="stylesheet" href="style.css">  
    
    <!-- include an external JavaScript file -->
    <script src="lightbox.js"></script>
  </head>

	
	<div id="menu" class="topnav">
			<a href="?page=main" id="mdtutor">MD Tutor</a>
			<a href="?page=home">OUR TUTORS</a>
			<a href="?page=calendar">CALENDAR</a>
			<a href='?page=search'>SEARCH</a>
			<a href='?page=testTutors'>Jacks test</a>
			<a href="javascript:void(0);" class="icon" onclick="collapsibleMenu()"><i class="fa fa-bars"></i></a>
			<?php
				if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true){
					echo "<a class='split' href='?page=account'>" . $_SESSION['account']['fname'] . "'s Account</a>";
					echo "<a href='index.php?action=logout'>Log Out</a>";
				} else {
					echo "<a class='split' href='?page=form&formId=form'>JOIN THE TEAM</a>";
					echo "<a href='?page=login&formId=login'>LOG IN</a>";
				}
			?>
			
		</ul>
    </div>
	 <body>
	<!--header ends here-->