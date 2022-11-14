
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-logo">
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/logo-white.png" class="img-fluid" />
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, sint quibusdam suscipit nesciunt.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-links">
					<h6>USEFUL LINKS</h6>
					<ul class="list-unstyled">
						<li><a href="https://pharma-franchise.com/about-us/">About Us</a></li>
						<li><a href="https://pharma-franchise.com/privacy-policy/">Privacy Polices</a></li>
						<li><a href="https://pharma-franchise.com/terms-and-conditions/">Terms & Conditions</a></li>						
						<li><a href="https://pharma-franchise.com/contact-us/">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="products">
					<h6>CATEGORIES</h6>
					<ul class="list-unstyled">
						<li><a href="#">Pharma Franchise  Companies</a></li>
						<li><a href="#">Third Party Manufacturing  in Pharma</a></li>
						<li><a href="#">Derma Franchise  Companies</a></li>
						<li><a href="#">Ayurvedic Pharma  Franchise</a></li>						
					</ul>	
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-contact">
					<h6>GET IN TOUCH</h6>
					<ul>						
						<li><i class="fas fa-phone-alt"></i><a href="tel:+91-7217501213">+91-7217501213</a></li>
						<li><i class="fas fa-envelope"></i><a href="mailto:enquiries.top10@gmail.com">enquiries.top10@gmail.com</a></li>
					</ul>
					<div class="footer-social">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="container-fluid px-0">
		<div class="copyright text-center">
			<p>© Copyright 2022 Pharma Franchise All Rights Reserved</p>
		</div>
	</div>
</footer>



	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
	$(document).ready(function($) {
    $('.loop').owlCarousel({
      center: true,
      items: 1,
      autoplay: true,      
      autoplayTimeout: 6000,
      autoplaySpeed: 2000,
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      URLhashListener: true,
      startPosition: 'URLHash',      
    });
 });

	$(document).ready(function($) {
    $('.client-testimonial').owlCarousel({
      center: true,
      items: 1,
      autoplay: true,      
      autoplayTimeout: 6000,
      autoplaySpeed: 2000,      
      loop: true,
      margin: 10,
      nav: false,
      dots: true,
    });
 });

	$(document).ready(function($) {
    $('.pagebanner-slider').owlCarousel({
      center: true,
      items: 1,
      autoplay: true,      
      autoplayTimeout: 6000,
      autoplaySpeed: 2000,      
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
    });
 });

	$(document).ready(function($) {
    $('.productRange-slider').owlCarousel({
      center: true,
      items: 5,
      autoplay: true,      
      autoplayTimeout: 4000,
      autoplaySpeed: 2000,      
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
       responsive:{
        0:{
            items:4,            
            nav:false            
        },
        768:{
            items:5,            
        },
        1025:{
            items:5,
        }
    	}
    });
 });
 
</script>
<script>
	const lightboxEnabled = document.querySelectorAll('.lightbox-enabled');
	const lightboxArray = Array.from(lightboxEnabled);
	const lastImage = lightboxArray.length-1;
	const lightboxContainer = document.querySelector('.lightbox-container');
	const lightboxImage = document.querySelector('.lightbox-image');
	const lightboxBtns = document.querySelectorAll('.lightbox-btn');
	const lightboxBtnRight = document.querySelector('#right');
	const lightboxBtnLeft = document.querySelector('#left');
	const close = document.querySelector('#close');
	let activeImage;
	// Functions
	const showLightBox = () => {lightboxContainer.classList.add('active')}

	const hideLightBox = () => {lightboxContainer.classList.remove('active')}

	const setActiveImage = (image) => {
	lightboxImage.src = image.dataset.imgsrc;
	activeImage= lightboxArray.indexOf(image);
	}

	const transitionSlidesLeft = () => {
	  lightboxBtnLeft.focus();
	  $('.lightbox-image').addClass('slideright'); 
	   setTimeout(function() {
	  activeImage === 0 ? setActiveImage(lightboxArray[lastImage]) : setActiveImage(lightboxArray[activeImage-1]);
	}, 250); 


	  setTimeout(function() {
	    $('.lightbox-image').removeClass('slideright');
	}, 500);   
	}

	const transitionSlidesRight = () => {
	 lightboxBtnRight.focus();
	$('.lightbox-image').addClass('slideleft');  
	  setTimeout(function() {
	   activeImage === lastImage ? setActiveImage(lightboxArray[0]) : setActiveImage(lightboxArray[activeImage+1]);
	}, 250); 
	  setTimeout(function() {
	    $('.lightbox-image').removeClass('slideleft');
	}, 500);  
	}

	const transitionSlideHandler = (moveItem) => {
	  moveItem.includes('left') ? transitionSlidesLeft() : transitionSlidesRight();
	}

	// Event Listeners
	lightboxEnabled.forEach(image => {
	   image.addEventListener('click', (e) => {
	    showLightBox();
	    setActiveImage(image);
	    })                     
	    })
	lightboxContainer.addEventListener('click', () => {hideLightBox()})
	close.addEventListener('click', () => {hideLightBox()})
	lightboxBtns.forEach(btn => {
	btn.addEventListener('click', (e) => {
	e.stopPropagation();
	  transitionSlideHandler(e.currentTarget.id);
	})
	})

	lightboxImage.addEventListener('click', (e) => {
	e.stopPropagation();

	})
</script>


<!-- Form Fixed on scroll  -->
<script>
window.onscroll = function() {myFunction()};

var fixed = document.getElementById("scrollDiv");
var sticky = fixed.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    fixed.classList.add("sticky");
  } else {
    fixed.classList.remove("sticky");
  }
}
</script>


<!-- Header Fixed -->
<script>
	$(window).scroll(function(){
  var hedaerSticky = $('.hedaerSticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 1) hedaerSticky.addClass('headerfixed');
  else hedaerSticky.removeClass('headerfixed');
});
</script>

</body>
</html>