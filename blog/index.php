	<?php get_header(); ?>

	<?php
	if ((is_home()) or (is_front_page())) {
		get_template_part("template-parts/blog-home/featured");
	}
	?>


	<div class="section">

		<div class="container">

			<div class="row">
				<div class="col-sm-12 col-md-8">

					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>

						<?php
						$args = array(
							'post_type'        => 'post',
							'posts_per_page'   => '4',
							'post_status'      => 'publish',
							'orderby' => 'date',
							'order'   => 'DESC',
						);

						$query =  new WP_Query($args);
						while ($query->have_posts()) :
							the_search_query();
							$query->the_post();
							$postcat = get_the_category($query->post->ID);
							$trimmed_title = get_the_title();
							$trimmed_title = substr($trimmed_title, 0, 40) . " ...";

							?>

							<div class="col-md-6 col-sm-6">
								<div class="post">

									<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-thumb'); ?></a>
									<div class="post-body">
										<div class="post-category">
											<?php for ($i = 0; $i < count($postcat); $i++) : ?>
												<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
											<?php endfor;  ?>
										</div>

										<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
										<ul class="post-meta">
											<li><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
											<li><?php echo get_the_date(); ?></li>
										</ul>
									</div>
								</div>
							</div>

						<?php
						endwhile;
						wp_reset_query();
						?>

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<?php

								?>
								<h2 class="title">Fashion & Travel</h2>
							</div>
						</div>

						<?php
						$args = array(
							'posts_per_page'   => '3',
							'category_name' => 'travel,fashion',
							'orderby' => ['type' => 'ASC'],
							'order'   => 'DESC',
						);
						$t_custom_query =  new WP_Query($args);
						while ($t_custom_query->have_posts()) :
							$t_custom_query->the_post();
							$postcat = get_the_category($t_custom_query->post->ID);
							$trimmed_title = get_the_title();
							$trimmed_title = substr($trimmed_title, 0, 40) . " ...";
							?>
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('lifestyle-post-thumb'); ?></a>
									<div class="post-body">
										<div class="post-category">
											<?php for ($i = 0; $i < count($postcat); $i++) : ?>
												<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
											<?php endfor;  ?>
										</div>
										<h3 class="post-title title-sm"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
										<ul class="post-meta">
											<li><a href="author"><?php the_author(); ?></a></li>
											<li><?php echo get_the_date(); ?></li>
										</ul>
									</div>
								</div>
							</div>
						<?php
						endwhile;
						wp_reset_query();
						?>

					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Technology & Health</h2>
							</div>
						</div>

						<?php
						$args3 = array(
							'posts_per_page'   => '3',
							'category_name' => 'technology,fashion',
							'post_status'      => 'publish',
						);
						$f_custom_query =  new WP_Query($args3);
						while ($f_custom_query->have_posts()) :
							$f_custom_query->the_post();
							$postcat = get_the_category($f_custom_query->post->ID);
							$trimmed_title = get_the_title();
							$trimmed_title = substr($trimmed_title, 0, 40) . " ...";
							?>
							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('lifestyle-post-thumb'); ?></a>
									<div class="post-body">
										<div class="post-category">
											<?php for ($i = 0; $i < count($postcat); $i++) : ?>
												<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
											<?php endfor;  ?>
										</div>
										<h3 class="post-title title-sm"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
										<ul class="post-meta">
											<li><a href="author"><?php the_author(); ?></a></li>
											<li><?php echo get_the_date(); ?></li>
										</ul>
									</div>
								</div>
							</div>
						<?php
						endwhile;
						wp_reset_query();
						?>


					</div>

				</div>
				<div class="col-sm-12 col-md-4">

					<?php get_sidebar(); ?>

				</div>
			</div>

		</div>

	</div>
	<div class="section">

		<div class="container">

			<div class="row">
				<?php if (is_active_sidebar('main-banner-image')) : ?>
					<div class="col-md-12 section-row text-center main-banner-image" id="main-banner-image">
						<?php dynamic_sidebar('main-banner-image'); ?>
					</div>
				<?php endif; ?>
			</div>

		</div>

	</div>
	<div class="section">

		<div class="container">

			<div class="row">
				<?php
				$args4 = array(
					'posts_per_page'   => '1',
					'post_type' => 'hotdeal',
					'post_status'      => 'publish',
				);

				$f_custom_query =  new WP_Query($args4);
				while ($f_custom_query->have_posts()) :
					$f_custom_query->the_post();
					$postcat = get_the_category($f_custom_query->post->ID);
					$trimmed_title = get_the_title();
					$trimmed_title = substr($trimmed_title, 0, 40) . " ...";
					?>
					<div class="col-sm-12 col-md-4">
						<div class="section-title">
							<h2 class="title">Hot Deals</h2>
						</div>
						<div class="post">
							<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
							<div class="post-body">
								<div class="post-category">
									<?php for ($i = 0; $i < count($postcat); $i++) : ?>
										<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
									<?php endfor;  ?>
								</div>
								<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
								<ul class="post-meta">
									<li><a href="author"><?php the_author(); ?></a></li>
									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>
					</div>


				<?php endwhile;
				wp_reset_query(); ?>
				<?php
				$args4 = array(
					'posts_per_page'   => '1',
					'post_type' => 'buying_guide',
					'post_status'      => 'publish',
				);

				$f_custom_query =  new WP_Query($args4);
				while ($f_custom_query->have_posts()) :
					$f_custom_query->the_post();
					$postcat = get_the_category($f_custom_query->post->ID);
					$trimmed_title = get_the_title();
					$trimmed_title = substr($trimmed_title, 0, 40) . " ...";
					?>
					<div class="col-md-4">
						<div class="section-title">
							<h2 class="title">Buying Guide</h2>
						</div>
						<div class="post">
							<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
							<div class="post-body">
								<div class="post-category">
									<?php for ($i = 0; $i < count($postcat); $i++) : ?>
										<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
									<?php endfor;  ?>
								</div>
								<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
								<ul class="post-meta">
									<li><a href="author"><?php the_author(); ?></a></li>
									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>
					</div>


				<?php endwhile;
				wp_reset_query();
				$args5 = array(
					'posts_per_page'   => '1',
					'post_type' => 'hateemtai',
					'post_status'      => 'publish',
				);

				$f_custom_query =  new WP_Query($args5);
				while ($f_custom_query->have_posts()) :
					$f_custom_query->the_post();
					$postcat = get_the_category($f_custom_query->post->ID);
					$trimmed_title = get_the_title();
					$trimmed_title = substr($trimmed_title, 0, 40) . " ...";
					?>
					<div class="col-md-4">
						<div class="section-title">
							<h2 class="title">Inside Hateemtai</h2>
						</div>
						<div class="post">
							<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
							<div class="post-body">
								<div class="post-category">
									<?php for ($i = 0; $i < count($postcat); $i++) : ?>
										<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
									<?php endfor;  ?>
								</div>
								<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
								<ul class="post-meta">
									<li><a href="author"><?php the_author(); ?></a></li>
									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>
					</div>


				<?php endwhile;
				wp_reset_query(); ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Top Categories</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				$categories = get_categories();

				foreach ($categories as $category) :
					$args = array(
						'cat' => $category->term_id,
						'posts_per_page'   => '1',
						'post_status'      => 'publish',
						'orderby' => ['type' => 'ASC'],
						'order'   => 'DESC',

					);

					$c_post = new WP_Query($args);
					$postcat = get_the_category($c_post->post->ID);
					while ($c_post->have_posts()) :
						$c_post->the_post();
						$postcat = get_the_category($c_post->post->ID);
						$trimmed_title = get_the_title();
						$trimmed_title = substr($trimmed_title, 0, 25) . " ...";

						?>

						<div class="col-sm-6 col-md-6 col-lg-4">
							<div class="post post-widget">
								<a class="post-img" href="<?php echo get_category_link($category->term_id); ?>"><?php the_post_thumbnail('cat-post-thumb'); ?></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
								</div>
							</div>
						</div>
				<?php endwhile;
					wp_reset_query();
				endforeach;
				?>

			</div>
			<div class="row">
				<?php echo do_shortcode('[home_all_category]'); ?>
			</div>
		</div>

	</div>

	<div class="section video-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Video Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row ">

				<?php
				$video = array(
					'posts_per_page'   => '9',
					'post_type' => 'video',
					'post_status'      => 'publish',
				);
				$video_query =  new WP_Query($video);
				$count = 1;
				$i = 1;
				while ($video_query->have_posts()) {
					$video_query->the_post();
					$link = get_field('video_url');
					if ($link) { ?>
						<div class="col-md-4 <?php if ($i > 3) {
															echo "box-hidden";
														} ?>" style="margin-bottom:30px">
							<div class="video-box">
								<a data-fancybox href="<?php echo $link; ?>">
										<?php the_post_thumbnail('large'); ?>
										<span class="play-button"><i class="fa fa-play" aria-hidden="true"></i></span>
								</a>
								

							</div>
						</div>

				<?php   }
					$i++;
					$count++;
				}  ?>
				<?php if ($count > 4) { ?>
					<div class="col-sm-3 col-md-3 col-lg-12 text-center" style="margin-top:30px">
						<a id="load-more-video"><i class="fa fa-angle-double-down" style="font-size: 26px;
    color: #ccc;cursor:pointer;"></i></a>
						<a id="load-more-video-up" style="display: none"><i class="fa fa-angle-double-up" style="font-size: 26px;
    color: #ccc;cursor:pointer;"></i></a>
					</div>
				<?php }  ?>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Discover More</h2>
					</div>
				</div>
			</div>

			<div id="posts-container">
				<div class="row">
					<?php
					$args6 = array(
						'posts_per_page'   => '6',
					);

					$discover_posts =  new WP_Query($args6);

					while ($discover_posts->have_posts()) {
						$postcat = get_the_category($discover_posts->post->ID);
						$discover_posts->the_post();
						?>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4">
							<div class="post discover-post">
								<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('lifestyle-post-thumb'); ?></a>
								<div class="post-body">
									<?php
										$trimed_title = wp_trim_words(get_the_title(), 6, NULL);
										?>
									<div class="post-category">
										<?php for ($i = 0; $i < count($postcat); $i++) : ?>
											<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
										<?php endfor;  ?>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimed_title; ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?php the_permalink(); ?>"><?php echo  get_the_author(); ?></a></li>
										<li><?php echo get_the_date(); ?></li>
									</ul>
									<?php
										$limit_desc = get_the_excerpt();
										$trimmed_content = substr($limit_desc, 0, 90) . " ...";

										?>
									<p><?php echo $trimmed_content; ?></p>
								</div>
							</div>
						</div>

					<?php
					}
					wp_reset_query(); ?>
				</div>

			</div>
			<div class="row">
				<div class="col-12 text-center" id="loadmore_container">
					<a href="<?php next_posts(get_max_page_number()); ?>" id="loadmore" class="btn btn primary-button"><?php _e('Load More', 'flowpp'); ?></a>
				</div>

			</div>
			<div class="class row">
				<div class="col-md-12">
					<?php

					$fields = get_fields('video_url', true);

					if ($fields) : ?>
						<ul>
							<?php print_r($fields); ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>

		</div>

	</div>

	<?php get_footer(); ?>