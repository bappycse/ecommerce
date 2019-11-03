
    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Social Media</h2>
        </div>
        <div class="social-widget">
            <ul>
                <li>
                    <div class="fb-page" data-href="https://www.facebook.com/HateemtaiGlobal" data-hide-cover="false" data-show-facepile="true">
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Categories</h2>
        </div>
        <div class="category-widget">
            <ul class="cat-menu list-group">
                <?php

                $args = array(
                    'orderby' => 'slug',
                    'parent' => 0
                );
                $categories = get_categories($args);
                $countc = 0;
                foreach ($categories as $category) {
                    
                    if ($countc == 5) {
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

    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Newsletter</h2>
        </div>
        <div class="newsletter-widget">
            <form id="email-subscribe">
                <p>
                    <b class="darkorangeClr">Exclusive Deals and Offers!</b><br /> Subscribe to our newsletter to receive special offers!
                </p>
                <input class="input" name="newsletter" id="email" placeholder="Enter Your Email">
                <input type="submit" class="primary-button submit" value="submit">
                <div class="alert alert-success newsletter-alert" role="alert" style="margin-top: 20px; display: none">
                    Email Sent successfully
                </div>
            </form>
        </div>
    </div>

    <div id="fb-root"></div>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '2656490711030488',
                status: true,
                cookie: true,
                xfbml: true
            });
        };
        (function() {
            var e = document.createElement('script');
            e.async = true;
            e.src = document.location.protocol +
                '//connect.facebook.net/en_US/all.js';
            document.getElementById('fb-root').appendChild(e);
        }());
    </script>



    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Popular Posts</h2>
        </div>

        <?php echo do_shortcode('[diy_pop_posts]'); ?>

    </div>