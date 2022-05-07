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

//Scroll-button*/
//Přepsat název tlačítka 
mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
	window.scroll({ top: 0, behavior: 'smooth' });
}


//Overlay
function onOverlay(element) {
 console.log(element.getAttribute("data-id"));
 document.getElementById(element.getAttribute("data-id")).style.display = "block";
}

function offOverlay(element){
		console.log(element.getAttribute("id"));
	  document.getElementById(element.getAttribute("id")).style.display = "none";
}

