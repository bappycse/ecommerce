<?php 
/* 
Template Name: Contact

*/
get_header();

$to = 'ashadbappycse@gmail.com';
$subject = 'The subject';
$body = 'The email body content';
$headers = array('Content-Type: text/html; charset=UTF-8','From: My Site Name &lt;support@example.com');
 
	wp_mail( $to, $subject, $body, $headers );
?>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Contact Information</h2>
						</div>
						<p>Contact our support and sales team for any query, question and information related to your shopping from Hateemtai. We want to solve all your shopping needs and give you the best online shopping experience like never before. Your valuable feedback will help us grow. Please feel free to contact us anytime for anything.</p>
						<ul class="contact">
							<li><i class="fa fa-phone"></i> Dhaka Office <a href="tel:8801706048485"> + 8801706048485</a></li>
							<li><i class="fa fa-phone"></i> USA Office <a href="tel:19518095797"> + 1 (951) 809-5797</a> </li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:support@blog.hateemtai.com?Subject=Hello%20again">support@blog.hateemtai.com</a></li>
							<li><i class="fa fa-map-marker"></i> Kingdom Dr, Riverside, California 92506, USA</li>
						</ul>
					</div>

					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Mail us</h2>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="input" type="text" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="message" placeholder="Message"></textarea>
									</div>
									<button class="primary-button">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<div class="fb-page"
										data-href="https://www.facebook.com/HateemtaiGlobal"
										data-hide-cover="false"
										data-show-facepile="true">
									</div>
								</li>
								<!-- <li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form method="post" id="email-subscribe">
								<p>
									<b class="darkorangeClr">Exclusive Deals and Offers!</b><br/> Subscribe to our newsletter to receive special offers!
								</p>
								<input class="input" name="newsletter" id="email" placeholder="Enter Your Email">
								<input type="submit" class="primary-button submit" value="submit">
								<div class="alert alert-success" role="alert" style="margin-top: 20px; display: none">
									Email Subscribe Sucessfully 
								</div>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	<?php get_footer(); ?>