<div class="container-wrap" style="background:#6495ED;">
            <footer id="fh5co-footer" role="contentinfo" style="background:#6495ED;">
                <div class="col-md-4 text-center">
                    <!-- <h3>198 West 21th Street, Suite 721 New York NY 10016</h3> -->
                    <h3><strong class="icon-location4"  style="color: red;"></strong> Off Dr. Alasa Street, Behind Kasham Hotel, Area D, Nyanya, Abuja</h3>
                    <div class="map">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Truth Independent Baptist Church, Behind Kasham Hotel, Area D, Nyanya, Abuja&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                <a href="https://capcuttemplate.org/"></a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 100px;
                                }
                                
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none!important;
                                    width: 100%;
                                    height: 100px;
                                }
                                
                                .gmap_iframe {
                                    height: 100px!important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h2><a href="#">TB CHURCH</a></h2>
                    <i class="icon-phone" style="color: red;"> </i><strong> 07064558837 / 07063336715</strong>
                    <br>
                    <i class="icon-phone" style="color: red;"> </i><strong> truthbaptistabuja@yahoo.com</strong>
                </div>
                <div class="col-md-4 text-center">
                    <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                        </ul>
                    </p>
                </div>
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block"> &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Truth Independent Baptist Church. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="https://www.altclickict.tech" target="_blank">Altclick ICT World Ltd.</a> </small>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- END container-wrap -->
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
    <script>
    console.log("I am here")
        var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    console.log(panel);
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
// Ministries auto display function
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>

</body>

</html>