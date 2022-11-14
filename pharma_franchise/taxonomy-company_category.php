<?php
/**
 * Company Category taxonomy archive
 */
?>

<?php get_header();?>
<?php
$termArray = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$category_name = $termArray->name;
$category_description = $termArray->description;
$category_id = $termArray->term_id;
?>
<div style="background-image:url(<?php echo  get_field('banner_image', $taxonomy . '_' . $category_id); ?>);background-color:#4576b9" class="bannerPharmaFranchise">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
                    <h2 class="text-white"><?php echo $category_name; ?></h2>
            </div>
        </div>
    </div>
</div>
<div class="outer-sec pt-0">
    <div class="container">
        <div class="row">
           <div class="col-12"> <p class="pt-4 pb-5"><?php echo $category_description; ?></p></div>
            <div class="col-lg-3 order-lg-0 order-3">
                <div class="ctgs">
                    <h6>PCD/Pharma Franchise</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Allopathic Franchise</a></li>
                        <li><a href="#">Homeopathic Franchise</a></li>
                        <li><a href="#">Veterinary Franchise</a></li>
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Derma Franchise</a></li>
                        <li><a href="#">Gynae Franchise</a></li>
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Pediatric Range Franchise</a></li>
                    </ul>
                </div>
                <div class="ctgs">
                    <h6>Third Party Manufacturing</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Allopathic Franchise</a></li>
                        <li><a href="#">Homeopathic Franchise</a></li>
                        <li><a href="#">Veterinary Franchise</a></li>
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Derma Franchise</a></li>
                        <li><a href="#">Gynae Franchise</a></li>
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Pediatric Range Franchise</a></li>
                    </ul>
                </div>
                <div class="ctgs">
                    <h6>Major Categories</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Allopathic Franchise</a></li>
                        <li><a href="#">Homeopathic Franchise</a></li>
                        <li><a href="#">Veterinary Franchise</a></li>
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Derma Franchise</a></li>
                        <li><a href="#">Gynae Franchise</a></li>
                        <li><a href="#">Ayurvedic Franchise</a></li>
                        <li><a href="#">Pediatric Range Franchise</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 order-lg-0 order-2">
                <div class="companyDetail position-relative">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="logo text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/ribbon.svg" class="premium" />
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/beingwell.png" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <h4>Agrim Pharmaceuticals</h4>
                            <div class="d-flex justify-content-md-between justify-content-center">
                                <p class="lctn"><span>Location: </span>Chandigarh</p>
                                <p class="lctn"><span>Member Since: </span>2021</p>
                            </div>
                            <p>Welcome To Agrim Pharmaceuticals We Agrim Pharmaceuticals is an Lorem ipsum dolor sit amet consectetur, ading elit. Eveniet tetur natus dolore tempa velit votes eentium aspeur fugiat.</p>
                            <div class="sec-btn mt-2">
                                <a href="#" class="btn btn-primary">CONTACT SUPPLIER</a>
                                <a href="#" class="btn btn-secondary">VIEW CATALOG</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="companyDetail position-relative">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="logo text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/biocell.png" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <h4>Agrim Pharmaceuticals</h4>
                            <div class="d-flex justify-content-md-between justify-content-center">
                                <p class="lctn"><span>Location: </span>Chandigarh</p>
                                <p class="lctn"><span>Member Since: </span>2021</p>
                            </div>
                            <p>Welcome To Agrim Pharmaceuticals We Agrim Pharmaceuticals is an Lorem ipsum dolor sit amet consectetur, ading elit. Eveniet tetur natus dolore tempa velit votes eentium aspeur fugiat.</p>
                            <div class="sec-btn mt-2">
                                <a href="#" class="btn btn-primary">CONTACT SUPPLIER</a>
                                <a href="#" class="btn btn-secondary">VIEW CATALOG</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="companyDetail position-relative">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="logo text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/biolife.png" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <h4>Agrim Pharmaceuticals</h4>
                            <div class="d-flex justify-content-md-between justify-content-center">
                                <p class="lctn"><span>Location: </span>Chandigarh</p>
                                <p class="lctn"><span>Member Since: </span>2021</p>
                            </div>
                            <p>Welcome To Agrim Pharmaceuticals We Agrim Pharmaceuticals is an Lorem ipsum dolor sit amet consectetur, ading elit. Eveniet tetur natus dolore tempa velit votes eentium aspeur fugiat.</p>
                            <div class="sec-btn mt-2">
                                <a href="#" class="btn btn-primary">CONTACT SUPPLIER</a>
                                <a href="#" class="btn btn-secondary">VIEW CATALOG</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="companyDetail position-relative">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="logo text-center">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/beingwell.png" class="img-fluid" />
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <h4>Agrim Pharmaceuticals</h4>
                            <div class="d-flex justify-content-md-between justify-content-center">
                                <p class="lctn"><span>Location: </span>Chandigarh</p>
                                <p class="lctn"><span>Member Since: </span>2021</p>
                            </div>
                            <p>Welcome To Agrim Pharmaceuticals We Agrim Pharmaceuticals is an Lorem ipsum dolor sit amet consectetur, ading elit. Eveniet tetur natus dolore tempa velit votes eentium aspeur fugiat.</p>
                            <div class="sec-btn mt-2">
                                <a href="#" class="btn btn-primary">CONTACT SUPPLIER</a>
                                <a href="#" class="btn btn-secondary">VIEW CATALOG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-0 order-1">
                <div class="contactForm fixed" id="scrollDiv">
                   <h3 class="fw-bold">SEND YOUR ENQUIRY</h3>
                   <form>
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
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php


$post_type = 'company';
$taxonomy  = $taxonomy;

// count the number of terms for correct pagination
$term_count = get_terms( array (
	'taxonomy' => $taxonomy,
	'fields'   => 'count',
) );

// define the number of terms per page
$terms_per_page = 10;

// find out the number of pages to use in pagination
$max_num_pages = ceil( $term_count / $terms_per_page );

// get the page number from URL query
$current_page = get_query_var( 'paged', 1 );

// calculate offset
$offset = ( $terms_per_page * $current_page ) - $terms_per_page;

// get all taxonomy terms
$terms = get_terms( array (
	'taxonomy' => $taxonomy,
	'order'    => 'ASC',
	'orderby'  => 'name',
	'number'   => $terms_per_page,
	'offset'   => $offset,
) );

echo '<dl>';

// cycle through taxonomy terms
foreach ( $terms as $term ) {

	echo '<dt>' . $term->description . '</dt>';
	echo '<dd>'; 
	echo '<ul>';

	// cycle through posts having this term
	$items = get_posts( array (
		'post_type'   => $post_type,
		'tax_query'   => array(
			array(
				'taxonomy' => $taxonomy,
				'terms'    => $term->term_id,
			),
		),
		'numberposts' => -1, // different from WP_Query (see Code Ref)
	) );

	// essential, see comments inside foreach() loop
	global $post;

	foreach ( $items as $item ) {

		// assign $item to global $post 
		$post = $item;
		// and now set up 
		setup_postdata( $post );
	
		echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
		// wp_reset_postdata(); // see below
	}
	wp_reset_postdata(); // moved outside the foreach() loop

	// end posts cycle
	echo '</ul>';
	echo '</dd>';
}
// end term cycle
echo '</dl>';

// Pagination
// See the Code Reference for more arguments
echo paginate_links( array (
	'total'   => $max_num_pages,
	'current' => $current_page,
) );
?>




<?php get_footer();?>