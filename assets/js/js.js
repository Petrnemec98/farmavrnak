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
const TopScrollBtn = document.getElementById("TopScrollBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    TopScrollBtn.style.display = "block";
  } else {
    TopScrollBtn.style.display = "none";
  }
}
function topFunction() {
	window.scroll({ top: 0, behavior: 'smooth' });
}

//Overlay
//open
function onOverlay(element) {
 document.getElementById(element.getAttribute("data-id")).classList.add('overlay-active');
 document.getElementById(element.getAttribute("data-id")).classList.remove('overlay-noactive');
}

//close 
function offOverlay(element){

	  document.getElementById(element.getAttribute("data-id")).classList.add('overlay-noactive');
    document.getElementById(element.getAttribute("data-id")).classList.remove('overlay-active');
}

//left right scrool - FOOTER


        var rightFunction = document.getElementById('slideright');
        rightFunction.onclick = function () {
            document.getElementById('slide-bar').scrollLeft += 500;
        };

        var back = document.getElementById('slideleft');
        back.onclick = function () {
            document.getElementById('slide-bar').scrollLeft -= 500;
        };

//left right scrool
var rightFunctionMed = document.getElementById('sliderightMed');
if(rightFunctionMed !== null){
  rightFunctionMed.onclick = function () {
  document.getElementById('slide-bar-med').scrollLeft += 500;
  }
};

var backMed = document.getElementById('slideleftMed');
if(rightFunctionMed !== null){
backMed.onclick = function () {
document.getElementById('slide-bar-med').scrollLeft -= 500;
       } 
        };


//read-more
function readmorefirst() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Zjisti více"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Zobrazit méně"; 
    moreText.style.display = "inline";
  }
}

function readMoreSecond() {
  var dots2 = document.getElementById("dots2");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Zjistěte více o činnosti včel i o práci včelaře během roku"; 
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Zobrazit méně"; 
    moreText2.style.display = "inline";
  }
};
