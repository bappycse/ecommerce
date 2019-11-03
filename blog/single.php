<?php
the_post();
get_header();
?>

<style>
	._2tga._3e2a {
		height: 34px !important;
	}
</style>

<div class="section">
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<?php
				$fullurl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
				?>
				<div class="section-row">
					<div class="share-btn">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>" target="_blank" style="background-color: #3b5998!important;
    color: #fff;padding: 4px 10px; border-radius: 4px;font-size: 12px; "><i class="fa fa-facebook-official" style="margin-right: 5px"></i></i><span>Share</span></a>
						<a href="mailto:" style="background-color: #f68c1ee0 !important;
    color: #fff;padding: 4px 10px; border-radius: 4px; font-size: 12px;"><i class="fa fa-envelope" style="margin-right: 5px;"></i><span>Email</span></a>

					</div>
				</div>

				<div class="section-row">
					<h1 class="post-title"><?php the_title() ?></h1>
					<div class="single-post-image">
						<a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post-thumb'); ?></a>
					</div>
					<div class="post-content">
						<?php
						the_content();
						?>

					</div>
				</div>

				<div class="section-row">
					<div class="post-tags">
						<ul>
							<li>TAGS:</li>
							<li><a href="#">Social</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Health</a></li>
						</ul>
					</div>
				</div>

				<div class="section-row">
					<?php
					$prevPost = get_previous_post();
					$nextPost = get_next_post();
					if ($prevPost && $nextPost) {
						$prev_link = $prevPost->post_name;
						$next_link = $nextPost->post_name;
						$prev_title = $prevPost->post_title;
						$next_title = $nextPost->post_title;
						?>
						<div class="post-nav">

							<div class="prev-post">
								<?php

									$prevThumbnail = get_the_post_thumbnail($prevPost->ID, 'custom-size');
									$nextThumbnail = get_the_post_thumbnail($nextPost->ID, 'custom-size');

									?>
								<a class="post-img" href="<?php echo site_url() . "/" . $prev_link; ?>"><?php echo  $prevThumbnail; ?></a>
								<h3 class="post-title"><?php echo implode(' ', array_slice(explode(' ', $prev_title), 0, 6)); ?></h3>
								<span>Previous post</span>
							</div>

							<div class="next-post">
								<a class="post-img" href="<?php echo site_url() . "/" . $next_link; ?>"><?php echo  $nextThumbnail; ?></a>
								<h3 class="post-title"><?php echo implode(' ', array_slice(explode(' ', $next_title), 0, 6)); ?></h3>
								<span>Next post</span>
							</div>
						</div>
					<?php } ?>
				</div>

				<div class="section-title">
					<h3 class="title">Related Posts</h3>
				</div>
				<div class="row">
					<?php if (function_exists("the_field")) {
						$related_posts = get_field('related_posts');
						$alpha_rp = new WP_Query(
							array(
								'post__in' => $related_posts,
								'order_by' => 'post__in'
							)
						);
						$count = 0;
						while ($alpha_rp->have_posts()) {
							$alpha_rp->the_post();
							$trimmed_title = get_the_title();
							$trimmed_title = substr($trimmed_title, 0, 30) . " ...";
							if ($count == 3) {
								break;
							}
							$count++;
							?>

							<div class="col-md-4">
								<div class="post post-sm">
									<a class="post-img" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
									<div class="post-body">
										<h3 class="post-title title-sm"><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h3>
										<ul class="post-meta">
											<li><a href="#"><?php echo get_the_author(); ?></a></li>
											<li><?php echo get_the_date(); ?></li>
										</ul>
									</div>
								</div>
							</div>


					<?php }
						wp_reset_query();
					}
					?>

				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>