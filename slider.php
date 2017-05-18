<div class="slider container">
    <div class="row">
        <div class="slider">
            <div class="owl-carousel owl-theme">
                <?php
                $args = array(
                    'post_type' => array('slider_images'),
                );
                // The Query
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="item"><img src="<?php the_post_thumbnail_url('slider-thumb'); ?>" alt="#"></div>
                    <?php }

                } else {
                    // no posts found
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
