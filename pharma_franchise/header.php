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
	<header>
		<div class="top-bar py-2">
			<div class="container-lg container-fluid">
				<div class="d-flex justify-content-sm-between justify-content-center align-items-center">
					<div class="contact">
						<a href="tel: +91-7217501213" class="mx-2 tel">Call us: <i class="fa-solid fa-phone mx-1"></i> +91-7217501213</a>
						<a href="mailto: enquiries.top10@gmail.com">Mail us: <i class="fa-solid fa-envelope mx-1"></i> enquiries.top10@gmail.com</a>
					</div>
				</div>
			</div>
		</div>

		<div class="hedaerSticky">
		<div class="container-lg container-fluid">
			<div class="d-sm-flex justify-content-between align-items-center py-2">
				<div class="logo">
					<a href="/">
						<img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" class="img-fluid" />
					</a>
				</div>
				<div class="search-bar">
					<form class="d-flex position-relative" role="search">
              <input class="form-control me-2" type="search" placeholder="Search For Company" aria-label="Search">
              <i class="fa-solid fa-magnifying-glass"></i>                
              <button class="btn btn-outline-success" type="submit">Search</button>
  	      </form>
				</div>

			</div>
		</div>
		</div>
	</header>
