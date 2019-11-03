<?php
$blog_fp = new WP_Query(
    array(
        'meta_key'       => 'featured',
        'meta_value'     => '1',
        'posts_per_page' => 3
    )
);

$post_data = array();
while ( $blog_fp->have_posts() ) {
    $blog_fp->the_post();
    $categories = get_the_category();
    $category = $categories[mt_rand(0,count($categories)-1)];
    $post_data[] = array(
        "title" => get_the_title(),
        "permalink"=>get_permalink(),
        "date"=>get_the_date(),
        "thumbnail"=>get_the_post_thumbnail_url(get_the_ID(),"large"),
        "author"=>get_the_author_meta("display_name"),
        "author_url"=>get_author_posts_url(get_the_author_meta("ID")),
        'author_avatar'=>get_avatar_url(get_the_author_meta("ID")),
        'cat'=>$category->name,
        'catlink'=>get_category_link($category)
    );
}
if ( $blog_fp->post_count > 1 ):
?>
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="<?php echo esc_url($post_data[0]['permalink']); ?>"><img src="<?php echo esc_url($post_data[0]['thumbnail']) ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?php echo esc_url($post_data[0]['catlink']); ?>"><?php echo esc_html($post_data[0]['cat']) ?></a>
							</div>
							<h3 class="post-title title-lg"><a href="<?php echo esc_url($post_data[0]['permalink']); ?>"><?php echo esc_html($post_data[0]['title']); ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php echo esc_url($post_data[0]['author_url']); ?>"><?php echo esc_html($post_data[0]['author']); ?></a></li>
								<li><?php echo esc_html($post_data[0]['date']); ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
                    <?php
                        for($i=1; $i<3;$i++):
                    ?>
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="<?php echo esc_url($post_data[$i]['permalink']); ?>"><img src="<?php echo esc_url($post_data[$i]['thumbnail']) ?>" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?php echo esc_url($post_data[$i]['catlink']); ?>"><?php echo esc_html($post_data[$i]['cat']) ?></a>
							</div>
							<h3 class="post-title"><a href="<?php echo esc_url($post_data[$i]['permalink']); ?> "><?php echo esc_html($post_data[$i]['title']); ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php echo esc_url($post_data[$i]['author_url']); ?>"><?php echo esc_html($post_data[$i]['author']); ?></a></li>
								<li><?php echo esc_html($post_data[$i]['date']); ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
				
                    <?php
                        endfor;
                    ?>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
<?php endif; ?>