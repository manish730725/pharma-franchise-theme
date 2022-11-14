<?php
/*
 Template Name: HomePage
 */	
?>

<?php get_header();?>


<div class="banner-slider position-relative">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 order-lg-0 order-2 categories">
					<?php
						$Categories = get_field('main_categories_on_homeage');
						//print_r($Categories);
					?>
					<div>
						<h6>Categories</h6>
						<ul class="list-unstyled">
							<?php
							foreach($Categories as $cat)
							{
								?>
								<li><i class="fas fa-arrow-right"></i><a href="<?php echo get_term_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
								<?php
							}
							?>
						</ul>
						<a href="#" class="btn btn-primary">View All</a>
					</div>
				</div>
				<div class="col-xl-9 col-lg-9 order-lg-0 order-1 px-0">
					<div class="loop owl-carousel owl-theme">
						
						<?php
						if( have_rows('banner_slider') ):
							while( have_rows('banner_slider') ) : the_row();
								$image = get_sub_field('image');
								$alt = get_sub_field('alt');
								if($image != '')
								{
								?>
								<div class="item">
										<img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
									</div>
											
								<?php
								}
							endwhile;
						endif;
						?>
				    </div>
				   
				</div>
			</div>
		</div>
	</div>
<?php
$about_section = get_field('about_section');
?>
	<div class="about-sec  py-5">
		<div class="container">
			<div class="sec-content">				
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="sec-left">
								<img src="<?php echo $about_section['image']; ?>" class="img-fluid" />
						</div>
					</div>
					<div class="col-lg-7">
						<?php echo $about_section['content'];?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="howWorks-sec">
		<div class="container">
			<div class="sec-heading text-center mb-sm-5 mb-4">
				<h2 class="fw-bold">How it works?</h2>
			</div>
			<div class="row">
				<div class="col-md-3 col-6">
					<div class="content text-center">
						<img src="<?php echo get_stylesheet_directory_uri()?>/images/requirement.png" class="img-fluid" />
						<h6>Post your requirements</h6>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="content text-center">
						<img src="<?php echo get_stylesheet_directory_uri()?>/images/search.png" class="img-fluid" />
						<h6>Your enquiry is verified</h6>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="content text-center">
						<img src="<?php echo get_stylesheet_directory_uri()?>/images/sent.png" class="img-fluid" />
						<h6>Your requirements are sent to right suppliers</h6>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="content text-center">
						<img src="<?php echo get_stylesheet_directory_uri()?>/images/thumbs-up.png" class="img-fluid" />
						<h6>Suppliers will contact you</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="company-ctg-sec text-center">
		<div class="container">
			<div class="content">
				<div class="sec-heading text-center mb-sm-5 mb-3 pt-sm-5 pt-3">
				<h2 class="fw-bold">Pharma Franchise Companies</h2>
			</div>
			<div class="row">
				<?php
				$args = array(
				   'post_type' => 'company',
				   'posts_per_page' => 12,
				   'orderby'	=> 'rand',
				   'tax_query' => array(
							   array(
								   'taxonomy' => 'company_category',
								   'field' => 'slug',
								   'terms' => 'pharma-franchise'
							   )
						   )
				   );
				$my_query = new WP_Query( $args );
				if($my_query->have_posts()) :
					while ($my_query->have_posts()) : $my_query->the_post();
		   		?>
		 
					<div class="col-lg-3 mb-4">
						<div class="sec-border">
							<div class="sec-img">
								<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" class="img-fluid" /></a>
							</div>
							<div class="sec-btn border-top">
								<p><?php echo get_the_title(); ?></p>
								<p id="info"><?php echo excerpt(25); ?></p>
								<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">VIEW DETAILS</a>
							</div>
						</div>
					</div>
		   			<?php
					 endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
			<div class="viewAll-btn text-center mt-sm-5 mt-3">
					<a href="" class="btn btn-primary">VIEW MORE COMPANIES</a>
			</div>
			</div>
		</div>
	</div>

	<div class="company-ctg-sec text-center">
		<div class="container">
			<div class="content">
				<div class="sec-heading text-center mb-sm-5 mb-3 pt-sm-5 pt-3">
				<h2 class="fw-bold">Third Party Manufacturing in Pharma</h2>
			</div>
			<div class="row">
				<?php
				$args = array(
				   'post_type' => 'company',
				   'posts_per_page' => 12,
				   'orderby'	=> 'rand',
				   'tax_query' => array(
							   array(
								   'taxonomy' => 'company_category',
								   'field' => 'slug',
								   'terms' => 'third-party-manufacturing'
							   )
						   )
				   );
				$my_query = new WP_Query( $args );
				if($my_query->have_posts()) :
					while ($my_query->have_posts()) : $my_query->the_post();
		   		?>
		 
					<div class="col-lg-3 mb-4">
						<div class="sec-border">
							<div class="sec-img">
							<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" class="img-fluid" /></a>
							</div>
							<div class="sec-btn border-top">
								<p><?php echo get_the_title(); ?></p>
								<p id="info"><?php echo excerpt(25); ?></p>
								<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">VIEW DETAILS</a>
							</div>
						</div>
					</div>
		   			<?php
					 endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
			<div class="viewAll-btn text-center mt-sm-5 mt-3">
					<a href="#" class="btn btn-primary">VIEW MORE COMPANIES</a>
			</div>
			</div>
		</div>
	</div>

	<div class="company-ctg-sec text-center">
		<div class="container">
			<div class="content">
				<div class="sec-heading text-center mb-sm-5 mb-3 pt-sm-5 pt-3">
				<h2 class="fw-bold">Derma Franchise Companies</h2>
			</div>
			<div class="row">
				<?php
				$args = array(
				   'post_type' => 'company',
				   'posts_per_page' => 12,
				   'orderby'	=> 'rand',
				   'tax_query' => array(
							   array(
								   'taxonomy' => 'company_category',
								   'field' => 'slug',
								   'terms' => 'derma-franchise'
							   )
						   )
				   );
				$my_query = new WP_Query( $args );
				if($my_query->have_posts()) :
					while ($my_query->have_posts()) : $my_query->the_post();
		   		?>
					<div class="col-lg-3 mb-4">
						<div class="sec-border">
							<div class="sec-img">
							<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" class="img-fluid" /></a>
							</div>
							<div class="sec-btn border-top">
								<p><?php echo get_the_title(); ?></p>
								<p id="info"><?php echo excerpt(25); ?></p>
								<a href="<?php echo get_permalink(); ?>" class="btn btn-primary">VIEW DETAILS</a>
							</div>
						</div>
					</div>
		   			<?php
					 endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
			<div class="viewAll-btn text-center mt-sm-5 mt-3">
					<a href="#" class="btn btn-primary">VIEW MORE COMPANIES</a>
			</div>
			</div>
		</div>
	</div>

	<div class="testimonial-sec mb-5">
		<div class="container">
			<div class="sec-heading text-center mb-5">
				<h2 class="fw-bold">Client Testimonials</h2>
			</div>
			<div class="owl-carousel client-testimonial owl-theme">
					
					<?php
					
					$args = array(
						'post_type' => 'client_testimonials',
						'post_status' => 'publish',
						'posts_per_page' => 10,
						'orderby'   => 'rand',
					);
					$loop = new WP_Query($args);
					if ($loop->have_posts()) :
						while ($loop->have_posts()) : $loop->the_post();
							$post_id = get_the_ID();
		
					?>
									<div class="item text-center">
												<div class="client">
													<div class="user-info">
														<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"  />
														<p><?php echo get_the_title(); ?></p>
														<p><?php echo get_field('company_name'); ?></p>
													</div>
													<div class="usermsg">
														<p><?php echo get_the_content(); ?></p>
													</div>
												</div>
										</div>
									<?php endwhile;  ?>
					<?php endif;
						
					wp_reset_postdata(); ?>
			</div>
		</div>
	</div>

	<div class="query-sec">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6 px-0">
					<div class="sec-left">
						<img src="<?php echo get_stylesheet_directory_uri()?>/images/jeff-denlea.jpg" class="img-fluid" />
					</div>
				</div>
				<div class="col-lg-5 col-md-6 px-0">
				   <div class="sec-right">
				   	   <h3 class="fw-bold">SEND YOUR ENQUIRY</h3>
				   	   <div class="mb-3">
				          <input type="text" class="form-control" placeholder="Name"> 		
				   	   </div>
				   	   <div class="mb-3">                  
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
				          <input type="text" class="form-control" placeholder="Mobile No.">
				   	    </div>
				   	    <div class="mb-3">
				          <input type="text" class="form-control" placeholder="Location">
				   	    </div>
                <div class="mb-3">                  
                  <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                </div>
                <div class="mt-4">
                	<button type="submit">SUBMIT</button>
                </div>
				   </div>
				</div>
			</div>
		</div>
	</div>








<?php get_footer();?>