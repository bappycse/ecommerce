<?php get_header();
	$cat_full_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$cat_url_seg = explode('/', $cat_full_url);
	$cat_name = $cat_url_seg[3];

?>

<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<div class="post post-thumb">
						<?php
							$args = array(		
								'posts_per_page'=> 1,
								'category_name' => $cat_name,
								'order_by' 		=> 'post_date',
								'order' => 'DESC'

							);
							$top_query = new Wp_Query($args);
							if($top_query->have_posts()):
								$top_query->the_post();
								$postcat = get_the_category($top_query->post->ID);
						?>
						
						<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cat-home-thumb'); ?></a>
						<div class="post-body">
							<div class="post-category">
								<?php for($i = 0; $i < count($postcat); $i++): ?>
									<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
								<?php endfor;  ?>
							</div>
							<?php 
								$trimmed_title = get_the_title(); 
								$trimmed_title = substr($trimmed_title,0,80)." ...";
							?>
							<h3 class="post-title title-lg"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></li>
								<li><?php echo get_the_date(); ?></li>
							</ul>
						</div>
							<?php
							 wp_reset_query();
							endif; 
						?>
					</div>
					<div class="row">
						<?php
							$args3 = array(		
								'posts_per_page'=> 4,
								'category_name' => $cat_name,
								'order_by' 		=> 'post_date',
								'order' => 'DESC'

							);
							$cat_recent = new Wp_Query($args3);
							while($cat_recent->have_posts()):
								$cat_recent->the_post();
								$post_cat = get_the_category($cat_recent->post->ID);
								$trimmed_title = get_the_title(); 
								$trimmed_title = substr($trimmed_title,0,80)." ...";
						?>
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-thumb'); ?></a>
								<div class="post-body">
									<div class="post-category">
										<?php for($i = 0; $i < count($postcat); $i++): ?>
											<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
										<?php endfor;  ?>
									</div>
									<?php $trimed_title = wp_trim_words( get_the_title(), 4, NULL ); ?>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></li>
										<li><?php echo get_the_date(); ?></li>
									</ul>
								</div>
							</div>
						</div>

						<?php 
							wp_reset_query();
							endwhile;
						?>
					</div>
					<?php
							$args2 = array(
								'post_status'      =>'publish',
								'orderby' => ['type' => 'ASC'],
								'order'   => 'DESC'	
							);
							$recent = new WP_Query($args2);
							while($recent->have_posts()):
								$recent->the_post();
								$postcat = get_the_category($recent->post->ID);
						?>
					<div class="post post-row ">
						<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('all-posts'); ?></a>
						<div class="post-body">
							<div class="post-category">
								<?php for($i = 0; $i < count($postcat); $i++): ?>
									<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
								<?php endfor; ?>
							</div>
							<?php
								$trimmed_title = get_the_title();
								$trimmed_title = substr($trimmed_title,0,35);
								
							?>
							<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
								<li><?php echo get_the_date(); ?></li>
							</ul>
							<?php 
								$limit_word = get_the_excerpt();
								$trimmed_content = wp_trim_words( $limit_word, 15, NULL );
										
							?>
							<p><?php echo $trimmed_content; ?></p>
						</div>
						
					</div>
					<?php endwhile; ?>	

					
					<?php wp_reset_query(); ?>
				</div>

				<div class="col-sm-12 col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer() ?>