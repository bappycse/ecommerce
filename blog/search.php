<?php get_header(); ?>
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">search posts</h2>
							</div>
						</div>
						<!-- post -->
						<?php 
						
                        if(have_posts()):
                           
							while(have_posts()):
								
							    the_post();
								
							?>
						
							<div class="col-md-6">
								<div class="post">
									
									<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-thumb'); ?></a>
									<div class="post-body">
										<div class="post-category">
										
										</div>
										
										<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
										<ul class="post-meta">
											<li><a href="author.html">John Doe</a></li>
											<li><?php echo get_the_date(); ?></li>
										</ul>
									</div>
								</div>
							</div>

						<?php 
							endwhile;
                            wp_reset_query();
                        endif;
						?>
						<!-- /post -->
					</div>
					<!-- /row -->
					
					<!-- /row -->
				</div>
				<div class="col-md-4">
					<!-- ad widget-->
					<?php get_sidebar(); ?>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	
	<!-- /SECTION -->

	<!-- SECTION -->
	
	<!-- /SECTION -->

	<!-- SECTION -->
	
<?php get_footer(); ?>