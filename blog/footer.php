<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="footer-widget">
					<div class="footer-logo">
						<a href="#" class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/hateemtai-logo-alt.png" alt=""></a>
					</div>
					<p>Hateemtai.com is building an authentic, community-centric global and local marketplace.</p>
					<ul class="contact-social">
						<li><a href="https://www.facebook.com/HateemtaiGlobal/" target="_blank" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3">
				<div class="footer-widget">
					<h3 class="footer-title">Categories</h3>
					<div class="category-widget">
						<ul>
							<?php

							$args = array(
								'orderby' => 'slug',
								'parent' => 0
							);
							$categories = get_categories($args);
							$countc = 0;
							foreach ($categories as $category) {

								if ($countc == 4) {
									break;
								}
								$count = $category->category_count;
								echo '<li class=""><a href="' . get_category_link($category->term_id) . '" rel="bookmark">' . $category->name . '<span>' . $category->count . '</span></a></li>';
								$countc++;
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="footer-widget">
					<h3 class="footer-title">Tags</h3>
					<div class="tags-widget">
						<?php
						$tags = get_tags();
						$html = '<ul>';
						foreach ($tags as $tag) {
							$tag_link = get_tag_link($tag->term_id);
							$html .= "<li>";
							$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
							$html .= "{$tag->name}</a>";
							$html .= "</li>";
						}
						$html .= '</ul>';
						echo $html;
						?>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="footer-widget">
					<h3 class="footer-title">Newsletter</h3>
					<div class="newsletter-widget">
						<form id="footer-email-subscribe">
							<p>
								<b class="darkorangeClr">Exclusive Deals and Offers!</b><br /> Subscribe to our newsletter to receive special offers!
							</p>
							<input class="input" name="newsletter" id="email" placeholder="Enter Your Email">
							<input type="submit" class="primary-button submit" value="submit">
							<div class="alert alert-success footer-alert" role="alert" style="margin-top: 20px; display: none">
								Email Sent successfully
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom row">
			<div class="col-md-6 col-md-push-6">
				<div class="footer_menu" id="footer_menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'secondary',
							'container_class' => 'footer_menu',
							'container_id' => 'footer_menu',
							'menu_class' => 'footer-nav'
						)
					);
					?>
				</div>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<div class="footer-copyright">
					<a href="http://blog.hateemtai.com" target="_blank">HateemTai Blog &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | Powered by <a href="https://www.hateemtai.com" target="_blank">Hateemtai.com</a>
				</div>
			</div>
		</div>
		<a id="move-to-top" href="#" class="btn btn-primary btn-md move-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	<?php wp_footer(); ?>

</footer>