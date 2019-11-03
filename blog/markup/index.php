	<?php get_header(); ?>

	<?php
	if ((is_home()) or (is_front_page())) {
		get_template_part("template-parts/blog-home/featured");
	}
	?>


	<div class="section">

		<div class="container">

			<div class="row">
				<div class="col-md-8">

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
							$trimed_title = wp_trim_words(get_the_title(), 8, NULL);
							?>

							<div class="col-md-6">
								<div class="post">

									<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-thumb'); ?></a>
									<div class="post-body">
										<div class="post-category">
											<?php for ($i = 0; $i < count($postcat); $i++) : ?>
												<a href="<?php echo get_category_link($postcat[$i]->term_id); ?>"><?php echo $postcat[$i]->name  ?></a>
											<?php endfor;  ?>
										</div>

										<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimed_title; ?></a></h3>
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
							$trimed_title = wp_trim_words(get_the_title(), 8, NULL);
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
										<h3 class="post-title title-sm"><a href="<?php the_permalink(); ?>"><?php echo $trimed_title; ?></a></h3>
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
							$trimed_title = wp_trim_words(get_the_title(), 8, NULL);
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
										<h3 class="post-title title-sm"><a href="<?php the_permalink(); ?>"><?php echo $trimed_title; ?></a></h3>
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
				<div class="col-md-4">

					<?php get_sidebar(); ?>

				</div>
			</div>

		</div>

	</div>
	<div class="section">

		<div class="container">

			<div class="row">
			<?php if ( is_active_sidebar( 'main-banner-image' ) ) : ?>
				<div class="col-md-12 section-row text-center main-banner-image" id="main-banner-image">
					<?php dynamic_sidebar('main-banner-image'); ?>
				</div>
			<?php endif; ?>
			</div>

		</div>

	</div>
	<div class="section">

		<div class="container">

			<!-- <div class="row">
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Flash Sale</h2>
					</div>

					<div class="post">
						<p>Test</p>
					</div>

				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Hot Deal</h2>
					</div>

					<div class="post">
						<p>Test</p>
					</div>

				</div>
				<div class="col-md-4">
					<div class="section-title">
						<h2 class="title">Health</h2>
					</div>

					<div class="post">
						<p>Test</p>
					</div>

				</div>
			</div> -->
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
						$trimed_title = wp_trim_words(get_the_title(), 8, NULL);

						?>

						<div class="col-md-6 col-lg-4">
							<div class="post post-widget">
								<a class="post-img" href="<?php echo get_category_link($category->term_id); ?>"><?php the_post_thumbnail('cat-post-thumb'); ?></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
									</div>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimed_title; ?></a></h3>
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

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div id="posts-container">
						<?php

						while (have_posts()) {
							the_post();
							?>
							<div class="post post-row ">
								<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('all-posts'); ?></a>
								<div class="post-body">
									<?php
										$trimed_title = wp_trim_words(get_the_title(), 6, NULL);
										?>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo $trimed_title; ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?php the_permalink(); ?>"><?php echo  get_the_author(); ?></a></li>
										<li><?php echo get_the_date(); ?></li>
									</ul>
									<?php
										$limit_word = get_the_excerpt();
										$trimmed_content = wp_trim_words($limit_word, 15, NULL);

										?>
									<p><?php echo $trimmed_content; ?></p>
								</div>
							</div>

						<?php
						}
						?>
					</div>
					<div class="col-12 text-center mt-md-5 mt-3" id="loadmore_container">
						<a href="<?php next_posts(get_max_page_number()); ?>" id="loadmore" class="btn btn primary-button"><?php _e('Load More', 'flowpp'); ?></a>
					</div>
				</div>
				<div class="col-md-4">

				</div>
			</div>

		</div>

	</div>

	<?php get_footer(); ?>