<?php
/* Template Name: Contact Us */
?>

<?php get_header();?>

<div class="contactSec mt-3">
	<div class="sec-heading text-center mb-4">
		<h2 class="fw-bold">Contact Us</h2>
	</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-7">
			<div class="sec-left">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13720.386628561657!2d76.851515!3d30.715683000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f936edf601373%3A0x2c56cdd17d90fc3a!2sSector%205%2C%20Panchkula%2C%20Haryana!5e0!3m2!1sen!2sin!4v1666802845174!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="sec-right">
				<h3 class="fw-bold">Write to Us</h3>
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
                  <textarea class="form-control" placeholder="Message" rows="3"></textarea>
                </div>
                <div class="mt-4 text-center">
                	<button type="submit">SUBMIT</button>
                </div>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="contactInfo text-center mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa-sharp fa-solid fa-location-dot"></i>
				<p>Sector 5 Panchkula,<br/> Haryana, India</p>
			</div>
			<div class="col-md-4">
				<i class="fa-solid fa-phone"></i>
				<p>+91-7217501213<br/>
                   Mon - Fri, 10:00 - 7:00</p>
			</div>
			<div class="col-md-4">
				<i class="fa-solid fa-envelope"></i>
				<p>enquiries.top10@gmail.com</p>
			</div>
		</div>
	</div>
</div>



<?php get_footer();?>