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
 document.getElementById(element.getAttribute("data-id")).style.display = "block";
}

//close 
function offOverlay(element){

	  document.getElementById(element.getAttribute("data-id")).style.display = "none";
}

//
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
