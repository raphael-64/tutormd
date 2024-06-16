
// initialize hidden elements
window.onload = function (){
	if (document.getElementById("positionBigImage")){
		document.getElementById("positionBigImage").style.display = "none";
	}
	if (document.getElementById("lightbox")){
		document.getElementById("lightbox").style.display = "none";
	}
};

// change the visibility of ID
function changeVisibility(divID,visible) {
  var ele = document.getElementById(divID);
   console.log(ele.style.display);
  if (ele) {
	if (visible)
        ele.style.display = "block";
	else 
		ele.style.display = "none";
  }
} // changeVisibility

// display lightbox with big image in it
function displayLightBox(imageFile) {
	let image = new Image();
	let requestedUid = imageFile.split(".")[0];
	// update big image to access
	if (imageFile != "") {
		image.src = "profileimages/" + imageFile;
		image.alt = "";

		// force big image to preload so we can have access 
		// to it's width so it will be centered in the page
		image.onload = function () { 
		   var width = image.width; 
		   document.getElementById("boundaryBigImage").style.width = width + "px";  
		};

		document.getElementById("bigImage").src = image.src;  // put big image in page
		document.getElementById("text").innerHTML = "<h4>" + "</h4>";
		//document.getElementById("name").innerHTML = data.name;
	}
	if (imageFile != "") {
		fetch ("http://142.31.53.220/~csfive/tutormd6/getData.php?uid=" + requestedUid)
		.then(response => response.json())
		.then(data => updateContents(data, requestedUid))
		.catch(err => console.log("error occurred " + err));
	}
	
	//set height of positionBigImage relative to browser
	document.getElementById("positionBigImage").style.top = window.pageYOffset + 'px';
	
	//prevent vertical scrolling relative to browser
	if(imageFile == ""){
		document.body.style.overflowY = "visible";
	} else {
		document.body.style.overflowY = "hidden";
	}
	
	// show light box with big image
	changeVisibility('lightbox',(imageFile != "")); // boolean of whether there is an image file
	changeVisibility('positionBigImage',(imageFile != "")); 
	
	

}


function updateContents(data, requestedUid) {
	console.log(data);
	console.log(requestedUid);
	if (requestedUid > 0){
		document.getElementById("text").innerHTML += "<img id='prev' src='http://142.31.53.220/~csfive/tutormd6/images/arrow.png' alt='prev' onclick=\"displayLightBox('" + (requestedUid - 1) + "." + data[requestedUid - 1].imagetype + "')\">";
	} 
	if (parseInt(requestedUid) + 1 < data.length){
		document.getElementById("text").innerHTML += "<img id='next' src='http://142.31.53.220/~csfive/tutormd6/images/arrow.png' alt='next' onclick=\"displayLightBox('" + (parseInt(requestedUid) + 1) + "." + data[parseInt(requestedUid) + 1].imagetype + "')\">";
	} 
	//changeVisibility("prev",(requestedUid > 0)); // hide prev button if is first image
	//changeVisibility("next",(parseInt(requestedUid) + 1 < data.length)); // hide next button if is last image
	//get JSON data
		
	document.getElementById("text").innerHTML += "<h1>" + data[requestedUid].fname + " " + data[requestedUid].lname + "</h1><h4>Grade " + data[requestedUid].grade + "</h4><h3>About Me:</h3>" + data[requestedUid].aboutme + "<h2>Courses I Can Tutor: </h2>" + data[requestedUid].courses + "<br>";
	document.getElementById("text").innerHTML += "<div class='buttonHolder'><a href='http://142.31.53.220/~csfive/tutormd6/index.php?page=request&formId=request&uid=" + data[requestedUid].uid + "'>Request a Session</a></div>";
	console.log(data[requestedUid]);
}
function collapsibleMenu() {
  var x = document.getElementById("menu");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function mobileCalendar(day){
	document.getElementById("wrapperMobile").innerHTML = document.getElementById(day).innerHTML;
}
