let body;
let lightbox;
let lightboxHolder;
let content;
let name;
let grade;
let about;
let canTutor;
let download;
let textField;

const convert = {
  "ma9": "Mathematics 09",
  "mah9": "Mathematics 09 - Honours",
  "nu9": "Numeracy 09",
  "ma10": "Foundations of Mathematics and Pre-calculus 10",
  "ma10h": "Honors Foundations of Mathematics and Pre-calculus 10",
  "wpm11":  "Workplace Mathematics 10",
  "fom11": "Foundations of Mathematics 11",
  "prec11": "Pre Calculus 11",
  "prech11": "Pre Calculus Honors 11",
  "wpm11": "Workplace Mathematics 11",
  "apcal": "Advanced Placement Calculus",
  "apst": "Advanced Placement Statistics",
  "cal12": "Calculus 12",
  "fm12": "Foundations of Mathematics 12",
  "geo12": "Geometry 12",
  "pcm12": "Pre-Calculus 12",
  "pcm12h": "Pre-Calculus 12 - Honours",
  "bell9": "Beginners ELL 09",
  "ela9": "English Language Arts 09",
  "co10": "Composition 10",
  "bell10": "Beginners ELL 10",
  "cw10": "Creative Writing 10",
  "el10": "English Linear 10",
  "ls10": "Literary Studies 10",
  "spk11": "Spoken Language 11",
  "cmps11": "Composition 11",
  "cwr11": "Creative Writing 11",
  "ls11": "Literary Studies 11",
  "apen": "Advanced Placement English",
  "cw12": "Creative Writing 12",
  "drm12": "Drama 12",
  "en12l": "English 12 Studies Linear (ELL)",
  "enfp12": "English First Peoples 12",
  "ens12": "English Studies 12",
  "lit12": "Literary Studies 12",
  "cf9": "Core French 09",
  "sp9": "Spanish 09",
  "cfr10": "Core French 10",
  "spa10": "Spanish 10",
  "cfr11": "Core French 11",
  "iita11": "Introductory Italian 11",
  "ita11": "Italian 11",
  "mnd11": "Mandarin 11",
  "spn11": "Spanish 11",
  "man12": "Mandarin 12",
  "sp12": "Spanish 12",
  "it12": "Italian 12",
  "cf12": "Core French 12",
  "ro9": "Robotics 09",
  "sc9": "Science 09",
  "er10": "Electronics and Robotics 10",
  "pow10": "Powertech 10",
  "sci10": "Science 10",
  "che11": "Chemistry 11",
  "es11": "Environmental Science 11",
  "lf11": "Life Science 11",
  "Phy11": "Physics 11",
  "phyc11": "Psychology 11",
  "rbt11": "Robotics 11",
  "apph": "Advanced Placement Physics",
  "an12": "Anatomy and Physiology 12",
  "che12": "Chemistry 12",
  "cli12": "Climate Change 12",
  "ed12": "Engine & Drivetrain 12",
  "ro12": "Robotics 12",
  "ph12": "Physics 12",
  "ss9": "Social Studies 09",
  "so10": "Social Studies 10",
  "ss11": "Explorations in Social Studies 11",
  "wh": "20th Century World History",
  "com12": "Comparative Cultures 12",
  "cri12": "Criminology 12",
  "cis12": "Contemporary Indigenous Studies 12",
  "law12": "Law Studies 12",
  "phg12": "Physical Geography 12",
  "di9": "Design & Innovation 09",
  "df9": "Drafting 09",
  "ict9": "Information and Communication Technology 9",
  "cs10": "Computer Studies 10",
  "drf10": "Drafting 10",
  "yb10": "Yearbook 10",
  "ict10": "Information and Communications Technology 10",
  "md10": "Media Design 10",
  "cp11": "Computer Programming 11",
  "ss11": "Computer Science 11",
  "dsi11": "Design and Innovation 11",
  "dtco11": "Digital Communications 11",
  "drf11": "Drafting 11",
  "yb11": "Yearbook 11",
  "md11": "Media Design 11",
  "nm11": "New Media 11",
  "3d": "3D Animations 12",
  "apcs": "Advanced Placement Computer Science",
  "cp12": "Computer Programming 12",
  "cs12": "Computer Science 12",
  "drf12": "Drafting 12",
  "ft12": "Film and Television 12",
  "yb12": "Yearbook 12",
  "md12": "Media Design 12",
  "ae9": "Arts Education 09",
  "bb9": "Beginner Band 09",
  "cb9": "Concert Band 09",
  "cc9": "Concert Choir 09",
  "dm9": "Drama 09",
  "fs9": "Food Studies 09",
  "ts9": "Trade Skills 9",
  "gu9": "Instrumental Music: Guitar 9",
  "jb9": "Instrumental Music: Jazz Band 09",
  "te9": "Tech Ed 09: Mechanics",
  "wo9": "Woodwork 09",
  "drm10": "Drama 10",
  "em": "Entrepreneurship and Marketing 10",
  "ts10": "Inclusive Introduction to Trade Skills 10",
  "cb10": "Instrumental Music: Concert Band 10",
  "jb10": "Instrumental Music: Jazz Band 10",
  "os10": "Orchestral Strings 10",
  "ph10": "Photography 10",
  "skie10": "Skills Explorations 10",
  "acc11": "Accounting 11",
  "art11": "Art Studio 11",
  "at11": "Automotive Technology 11",
  "cle": "Career Life Education",
  "cho11": "Choral Music 11",
  "cmld11": "Community Leadership",
  "drm11": "Drama 11",
  "fd11": "Fitness and Conditioning 11",
  "hdc11": "Hip Hop and Dance Conditioning 11",
  "Iits11": "Inclusive Introduction to Trade Skills",
  "cb11": "Instrumental Music: Concert Band",
  "gu11": "Instrumental Music: Guitar",
  "jb11": "Instrumental Music: Jazz Band",
  "mrk11": "Marketing11",
  "os11": "Orchestral Strings 11",
  "op11": "Outdoor Pursuits 11",
  "prtr11": "Peer Tutoring 11",
  "pht11": "Photography 11",
  "sk11": "Skills Explorations 11",
  "wdw11": "Woodwork 11",
  "ygm11": "Yoga For Mindfulness 11",
  "acc12": "Accounting 12",
  "art12": "Art Studio 12",
  "aut12": "Automotive Technology 12",
  "clc": "Career Life Connections",
  "cle": "Career Life Education",
  "cho12": "Choral Music 12",
  "ecom12": "E-Commerce 12",
  "ent12": "Entrepreneurship 12",
  "env12": "Environmental Leadership 12",
  "skie12": "Skills Explorations 12",
  "iits": "Inclusive Introduction to Trade Skills",
  "imcb12": "Instrumental Music: Concert Band 12",
  "img12": "Instrumental Music: Guitar 12",
  "imjb12": "Instrumental Music: Jazz Band 12",
  "os12": "Orchestral Strings 12",
  "op12": "Outdoor Pursuits 12",
  "pho12": "Photography 12",
  "sp12": "Scholarship Preparation 12",
  "se12": "Skill Exploration 12"
};

let searchBar;

window.onload = function(){
	thumbnails = document.getElementById("thumbnails");
	lightboxHolder = document.getElementById("lightboxHolder");
	
	download = document.getElementById("download");
	name = document.getElementById("name");
	grade = document.getElementById("grade");	
	about = document.getElementById("about");
	canTutor = document.getElementById("tutor");
	textField = document.getElementById("searchField");

	lightbox = document.getElementById("lightbox");
} // window.onload


// Fetches users who are part of the search
function searchUser(){
	
	// change fetch parameters depending on whoevers using this
	fetch("http://142.31.53.220/~csfive/tutormd6/getProfilesOf.php?search=" + textField.value)
  	  .then(response => response.json())
  	  .then(data => produceProfiles(data))
  	;
} // searchUser

//  blanks the text for the search
function blankText(element){
	element.value = "";
} //blankText

// shows the profiles
function produceProfiles(data){	
	
	if(data[0] == "No Apples"){
		document.getElementById("searchResults").innerHTML = "No Appples";
	}else{
	// Print this to check for fetch errors
	console.log(data);
	
	document.getElementById("searchResults").innerHTML = "";	

	let resultsBar = document.getElementById("searchResults");
	
	while (resultsBar .firstChild) {
	    resultsBar .removeChild(resultsBar .firstChild);
	} // while
	
	for(let i = 0; i < data.length; i++) {
		let div = document.createElement("div");
		div.setAttribute("class", "profile");
		//div.innerHTML = JSON.stringify(data[i], null, 2);
		
		let nameTagFirst = document.createElement("div");
		nameTagFirst.setAttribute("class", "profileField");
		nameTagFirst.innerHTML = data[i]["fname"];

		let nameTagLast = document.createElement("div");
		nameTagLast.setAttribute("class", "profileField");
		nameTagLast.innerHTML = data[i]["lname"];

		nameTagFirst.id = "fn";
		nameTagLast.id = "ln";

		let requestButton = document.createElement("div");
		requestButton.setAttribute("class", "profileField");
		requestButton.innerHTML = "<a id='requestMe'href='http://142.31.53.220/~csfive/tutormd6/index.php?page=request&formId=request&uid=" + data[i]['uid'] + "'>Request Me!</a>";
		
		let gradeTag = document.createElement("div");
		gradeTag.setAttribute("class", "profileField");
		gradeTag.innerHTML = "Gr. " + data[i]["grade"];
		
		gradeTag.id = "gr";
		
		let about = document.createElement("div");
		about.setAttribute("class", "profileField");
		about.innerHTML = data[i]["aboutme"];
		about.id = "ab";
		
		let courses = document.createElement("div");
		courses.setAttribute("class", "profileField");
		
		// Change 8 to however many can fit to profileField
	
		let perRow = data[i]["courses"].length / 8;
		let interval = 0;	
		
		about.style.padding = "10px";
		courses.style.overflowY = "scroll";
		courses.style.padding = "10px";

		for (let v = 0; v < data[i]["courses"].length; v++){
			courses.innerHTML += convert[data[i]["courses"][v]];
			if(v < data[i]["courses"].length - 1){
				courses.innerHTML += ",&nbsp     ";
			} // if
			interval ++;
			if(interval >= perRow){
				courses.innerHTML += "<br>";
				interval = 0;
			} // if
		} // for
		
		let section1 = document.createElement("div");
		section1.setAttribute("class", "section1");
		
		let section2 = document.createElement("div");
		section2.setAttribute("class", "section2");
		
		let section2Top = document.createElement("div");
		section2Top.setAttribute("class", "section2Top");

		let section2Bottom = document.createElement("div");
		section2Bottom.setAttribute("class", "section2Bottom");		

		resultsBar.appendChild(section1);
		resultsBar.appendChild(section2);
		section2.appendChild(section2Top);		
		section2.appendChild(section2Bottom);		

		resultsBar.appendChild(div);

		div.appendChild(section1);
		div.appendChild(section2);
		
		let image = document.createElement("img");
		image.setAttribute("class", "profileImages");
		image.src = "http://142.31.53.220/~csfive/tutormd6/thumbnails/" + data[i]["uid"] + "." + data[i]["imagetype"];

		section1.appendChild(image);
		
		section2Top.appendChild(nameTagFirst);
		section2Top.appendChild(nameTagLast);
		section2Top.appendChild(gradeTag);
		section2Top.appendChild(requestButton);
		section2Bottom.appendChild(about);
		section2Bottom.appendChild(courses);

		//hljs.highlightBlock(div);
	} // for	
	} // if else
	
	
} // produceProfiles

// when an image is cicked their info will be shown
function clicked(image){
	

	console.log(image.id.split("/")[0].split(".")[0]);
	
	//updateContents(image);
	
	console.log(image.id.split("/")[0].split(".")[0]);
	
 	if (image != "") {
  	 fetch ("http://142.31.53.220/~csfive/tutormd6/getData.php?uid=" + image.id.split("/")[0].split(".")[0])
  	  .then(response => response.json())
  	  .then(data => updateContents(data, image))
  	;
 	} // if

} // clicked

// displays data of Tutor to user
function updateContents(data, image){
	console.log(data);

	lightbox.src = "http://142.31.53.220/~csfive/tutormd6/thumbnails/" + image.id;
	download.href = "http://142.31.53.220/~csfive/tutormd6/thumbnails/" + image.id;
	lightboxHolder.style.display = "flex";
	
	name.innerHTML = data["firstName"] + " " + data["lastName"];
	grade.innerHTML = "Grade " + data["grade"];
	about.innerHTML = "About: " + data["about"];
	
	let courses = "";
	
	for(let i = 0; i < data["_courses"].length; i++){
		courses += convert[data["_courses"][i]];
	} // for

	canTutor.innerHTML = courses;
} // updateContents

function turnOffLightBox(box){
	box.style.display = "none";
} // turnOffLightBox