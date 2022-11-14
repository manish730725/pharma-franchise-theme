<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />	

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">	

	<!-- Custom Style Sheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/responsive.css">

  <title> <?php wp_title('');?> </title>
</head>
<body <?php body_class(); ?>>
<?php $phoneArray = get_field('company_phone_number');?>
<header class="singlePost">
	<div class="top-bar py-1">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="top-contact">
						<a href="tel:91<?php echo $phoneArray[0]['contact_number'];?>"><i class="fa-solid fa-phone"></i>+91-<?php echo $phoneArray[0]['contact_number'];?></a>
						<a href="mailto:<?php echo get_field('company_email');?>"><i class="fa-solid fa-envelope"></i><?php echo get_field('company_email');?></a>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	<div class="hedaerSticky">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand" href="#">
			  	<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#about-us">About Us</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#our-products">Our Products</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#contact-us">Contact Us</a>
			      </li>
			    </ul>		    
			  </div>
			</nav>
		</div>
	</div>
</header>
<!------- ============ HEADER SECTION END ============ ----->


<!------- ============ BANNER SECTION START ============ ----->

<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 px-lg-0">
                <div class="sec-left">
                    <div class="owl-carousel pagebanner-slider owl-theme">
                        <?php 
                            $slider = get_field('slider_images');
                            if(!empty($slider))
                            {
                                foreach($slider as $image){
                                    ?>
                                        <div class="item">
                                            <img src="<?php echo $image['image']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>"/>
                                        </div>
                                    <?php
                                    }
                            }
                            else{
                                ?>
                                <img src="https://pharma-franchise.com/wp-content/uploads/2022/10/pharma-franchise-logo2.jpg" class="img-fluid" alt="<?php echo $image['alt']; ?>"/>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-lg-0">
                <div class="sec-right">
                    <div class="sec-heading text-center mb-3">
                        <h5>POST YOUR REQUIREMENT</h5>
                    </div>
                    <form action="">
                        <select class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                        <option selected>You Are Looking For?</option>
                        <option value="1">PCD Pharma Franchise</option>
                        <option value="2">3rd Party Manufacturing</option>                        
                    </select>
                    <select class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                        <option selected>Requirement Emergency</option>
                        <option value="1">Immediate</option>
                        <option value="2">Within 15 Days</option>
                        <option value="2">Within a Month</option>
                    </select>
                    <select class="form-select form-select-sm mb-2" aria-label=".form-select-sm example">
                        <option selected>Call-Time Preference</option>
                        <option value="1">Morning</option>
                        <option value="2">Afternoon</option>
                        <option value="2">Evening</option>
                        <option value="2">Anytime</option>
                    </select>
                    <div class="mb-2">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control" placeholder="Message" id="FormControlTextarea" rows="3"></textarea>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                          </label>
                          <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary" type="submit">NEXT</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!------- ============ BANNER SECTION END ============ ----->


<!------- ============ ABOUT SECTION START ============ ----->
<section class="aboutUs-sec" id="about-us">
	<div class="container">
		<div class="sec-heading text-center pb-md-3">
			<h2>Welcome To <?php echo get_the_title(); ?></h2>
		</div>
		<div class="content text-center">
        <?php echo get_the_content(); ?>
		</div>
	</div>	
</section>
<?php

$company_visionmission_and_quality = get_field('company_visionmission_and_quality');

?>
<section class="feature-sec py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="feature text-center">
					<img src="https://pharma-franchise.com/wp-content/uploads/2022/10/quality.png" class="img-fluid" />
					<h3>Quality Control</h3>
					<p><?php echo $company_visionmission_and_quality['quality_control'];?></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature text-center">
					<img src="https://pharma-franchise.com/wp-content/uploads/2022/10/focus.png" class="img-fluid" />
					<h3>Our Mission</h3>
					<p><?php echo $company_visionmission_and_quality['our_mission'];?></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="feature text-center">
					<img src="https://pharma-franchise.com/wp-content/uploads/2022/10/vision.png" class="img-fluid" />
					<h3>Our Vision</h3>
					<p><?php echo $company_visionmission_and_quality['our_vision'];?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!------- ============ ABOUT SECTION END ============ ----->


<!------- ============ PRODUCTS SECTION START ============ ----->
<section class="product-sec" id="our-products">
	<div class="container" id="lightbox_gallery">
		<div class="sec-heading text-center pb-md-3">
			<h2>Our Products</h2>
		</div>
		<div class="row">
			
            <?php 
                $product_gallery = get_field('product_gallery');
            //  print_r($product_gallery);
                if(!empty($product_gallery))
                {
                    foreach($product_gallery as $image){
                        ?>
                            <div class=" col-12 col-md-4 col-lg-3 p-3">
				<div class="lightbox-enabled" 
					style="background-image:url(<?php echo $image['product_image']; ?>)" data-imgsrc="<?php echo $image['product_image']; ?>">
					<div class="pro-name text-center">
						<p><?php if(isset($image['product_type']->name)){ echo $image['product_type']->name; }else{ echo 'Other'; } ?></p>
					</div>
				</div>
			</div>
                        <?php
                        }
                }
                else{
                    ?>
                    <?php
                }
            ?>
           
			
		</div>
	</div>
	<section class="lightbox-container">
		<span class="material-icons-outlined lightbox-btn left" id="left">
			<i class="fa-solid fa-angle-left"></i>
		</span>
		<span class="material-icons-outlined lightbox-btn right" id="right">
			<i class="fa-solid fa-angle-right"></i>
		</span>
		<span class="close" id="close">
		  	<i class="fa-solid fa-xmark"></i>
		</span>
		<div class="lightbox-image-wrapper">
		  <img alt="lightboximage" class="lightbox-image">	     	   
		</div>
	</section>
</section>
<!------- ============ PRODUCTS SECTION END ============ ----->


<!------- ============ CONTACT SECTION START ============ ----->
<section class="contact-sec" id="contact-us">
	<div class="container">
		<div class="sec-heading text-center pb-md-5">
			<h2>Contact Us</h2>
		</div>

		<div class="row">
			<div class="col-xl-6">
				<div class="contact-left">
					<h6>Contact Info</h6>
					<div class="company pt-3">
						<h5><?php echo get_the_title(); ?></h5>
						<p>An ISO 9001:2015 Certified Company</p>
					</div>
					<ul class="list-unstyled pt-4">
						<li>
							<i class="fa-solid fa-location-dot"></i>
							<?php  echo get_field('company_address').",".get_field('company_state'); ?>
						</li>
						<li>
							<i class="fa-solid fa-phone"></i>
							<a href="tel:<?php echo $phoneArray[0]['contact_number'];?>"><?php echo $phoneArray[0]['contact_number'];?></a>
						</li>
						<li>
							<i class="fa-solid fa-envelope"></i>
							<a href="mailto:<?php echo get_field('company_email');?>"><?php echo get_field('company_email');?></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="contact-right">	
					<h3>Get in Touch</h3>				
					<p>Fill in the form below to get instant access:</p>
					<form>
						<div class="col mb-3">						    
						    <input type="text" class="form-control" placeholder="Full Name">						    
						</div>
						<div class="col mb-3">
							<input type="text" class="form-control" placeholder="Phone Number">
						</div>
						<div class="col mb-3">   
						    <input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="col mb-3">						    
						    <input type="text" class="form-control" placeholder="City">
						</div>
						<div class="col mb-3">
							<textarea class="form-control" placeholder="Message" rows="5"></textarea>
						</div>						
					</form>
					<div class="text-center">
						<button type="submit">SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!------- ============ CONTACT SECTION END ============ ----->

<div class="copyright text-center py-3">
	<div class="container">
		<p><?php echo get_the_title(); ?>© copyright All Rights Reserved.</p>
	</div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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