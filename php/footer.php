<section class="footer-box">

	 <div class="content">   

                         

                       <div class="content-container">
                     


                          <div class="box-h1-prepered">
                           
                            <div class="box-h2-title">
                               <h2>Kde nás najdete</h2>
                            </div>
                             <h1>KONTAKTY</h1>


                           
                         

                        


                            <div class="layout-description">

                             <p>Kontaktujte nás, pokud
								máte dotazy.</p>

                          
                            </div>
                              <!-- <h2 id="demo"></h2> -->
                          </div>
                         
                       </div>

                    </div >
                         

                    </div>
</section>
	</body>

<!-- JS slider-->

	<script type="text/javascript">

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
		  }
		  x[slideIndex[no]-1].style.display = "block";  
		}



	</script>

</html>