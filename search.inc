<script src="script.js" defer></script>

<h1>Search for Tutors</h1>

<div class="container">
<div id = "searchSection">

	<input type="text" id="searchField" value="Search names, grades, or courses" onclick="blankText(this)" oninput="searchUser()">
	<button id="searchButton" type="submit"><i class="fa fa-search"></i></button>
	<br>

	
	<div id="searchResults">
	
	</div>


</div>

<div id="thumbnails">
</div>	

</div>
<a href="index.php?action=del">Reset Gallery</a>