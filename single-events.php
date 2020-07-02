<?php get_header();

while( have_posts() ) : the_post();


?>

    <!-- Header with featured image and title -->
    <div class="container title-header" style="background-image: url(<?php

        // Get the thumbnail
        $postThumbnail = get_field('thumbnail');
        if ($postThumbnail) {
            echo $postThumbnail; 
        } else {
            echo get_template_directory_uri() . "/css/images/default.jpg";
        }
        
        
        ?>)">
        <div class="row h-100">
            <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
                <h6 class="orange">Come join us at...</h6>
                <h2 class="page-title"><?php the_title() ?></h2>
            </div>
        </div>
    </div>

    <div class="container back-link">
        <p class="mt-2 mb-5"><a href="<?php echo site_url(); ?>/events" class="blue"><i class="fas fa-arrow-left"></i> All Events</a></p>
    </div>

    <!-- Post content -->
    <div class="container single-post-content">
        <h1 class="blue"><?php the_title(); ?></h1>
        <h4 class="event-subtitle mb-5">
            <strong>Date:</strong> <?php
                the_field('date');
                if(get_field('time')) {
                    echo ' at ';
                    the_field('time');
                }
            ?>
            <br>
            <strong>Location:</strong> <?php
                the_field('location');
            ?>
            <br>
            <?php if (get_field('event_link')) { ?>
                <a href="<?php the_field('event_link') ?>" target="_blank" class="blue"><strong>Visit Event Site</strong></a><?php 
            } ?>
        </h4>
        
        <div class="container divider mb-5"></div>

        <h4 class="mb-3 blue">About this event:</h4>
        <p class="mb-5">
            <?php echo get_field('description'); ?>
        </p>

        <div class="container divider mb-5"></div>

    </div> <!-- end content -->

    <?php
    endwhile; ?>

<?php
        // Find today's date
        $date_now = current_time('Ymd');


        // Set up for related posts section
        $related = new WP_Query(
            array(
            'post_type' => 'events',
            'meta_query' => array(
                'key' => 'date',
                'value' => $date_now,
                'compare' => '>=',
            ),
            'meta_key' => 'date',
            'orderby' => 'meta_value',
            'order' => 'ASC',
            'posts_per_page' => 3
            )
        );

    if( $related->have_posts() ) { 
        ?>
    <div class="container pb-5">
        <div class="row mb-3">
            <h1>Upcoming Events</h1>
        </div>
        <div class="row">

            <?php while( $related->have_posts() ) { 
                $related->the_post();
                $relatedPostImg = get_field('thumbnail'); ?>

                <div class="col-md-4">
                    <div class="recommended-posts-card px-2">
                        <div class="card-img mb-3" style="background-image: url(<?php
                            if ($relatedPostImg) {
                                echo $relatedPostImg; 
                            } else {
                                echo get_template_directory_uri() . "/css/images/default.jpg";
                            }
                        ?>)"></div>
                        <h6 class="card-title"><strong><?php the_title(); ?></strong></h6>

                        <p class="card-subtitle mb-3">
                            <?php
                                the_field('date');
                                if(get_field('time')) {
                                    echo ' // ';
                                    the_field('time');
                                }
                            ?>
                        </p>
                        <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">View Event</span></a>
                    </div>
                </div>
            <?php
            }
        wp_reset_postdata(); 
        } ?>

        </div> <!-- end related posts row -->
    </div><!-- end related posts container -->

<?php get_footer() ?>