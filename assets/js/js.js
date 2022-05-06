		/*slider*/
		var slideIndex = [1,1];
		var slideId = ["mySlides1"]
		showSlides(1, 0);
		showSlides(1, 1);

		function plusSlides(n, no) {
		  showSlides(slideIndex[no] += n, no);
		}

		function showSlides(n, no) {
		  var i;
		  var x = document.getElementsByClassName(slideId[no]);
		  if (n > x.length) {slideIndex[no] = 1}    
		  if (n < 1) {slideIndex[no] = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";  
		     x[slideIndex[no]-1].style.display = "block"; 
		  }
		}

		   

/*menu*/


		
	const navigation = document.getElementById("nav");
	const menu = document.getElementById("menu");
	const layout = document.getElementById("layout");
	const circule = document.getElementById("circule")

	menu.addEventListener("click", () => {
  	navigation.style.setProperty("--childenNumber", navigation.children.length);
  	navigation.classList.toggle("active");
 	layout.classList.toggle("active");
 	circule.classList.toggle("active");
  	menu.classList.toggle("active");
	});

/*Button*/
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document


//kouknout JS animation scrol 
mybutton.on("click", function(e){
	e.preventDefault;
	this.topFunction();
})

function topFunction() {
	window.scroll({ top: 0, behavior: 'smooth' });
}


//Overlay
function onOverlay() {
  document.getElementById("overlay").style.display = "block";
}

function offOverlay() {
  document.getElementById("overlay").style.display = "none";
}