let courses;
let fc;

window.onload = function(){
	
	courses = document.getElementsByName("courses[]");
	console.log(courses);

	for(let i = 0; i < courses.length; i++){
		courses[i].addEventListener("click", function() {

  			//document.getElementById("demo").innerHTML = "Hello World";
			console.log(this);
			
			fc.push(this.value);
		});
	}

}