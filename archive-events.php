<?php get_header();

// Get the thumbnail
$backgroundImg = get_template_directory_uri() . "/css/images/community/events.jpg";
?>


<!-- Title Header Container -->
<div class="container title-header" style="background-image: url(<?php echo $backgroundImg; ?>)">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Events</h2>
            <h4 class="page-subtitle">Join us at our local events!</h4>
        </div>
    </div>
</div> <!-- end title header container -->

<!-- Back Link Container -->
<div class="container back-link mb-5">
    <p class="mt-2"><a href="<?php echo site_url() ?>/community" class="blue"><i class="fas fa-arrow-left"></i> All Community Topics</a></p>
</div> <!-- end back link container -->



<!-- Post Cards Container -->
<div class="container post-cards pb-5">

<!-- Upcoming Events -->
<?php
        // Find today's date
        $date_now = current_time('Ymd');


        // Set up for related posts section
        $futureEvents = new WP_Query(
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
            )
        );

    if( $futureEvents->have_posts() ) { 
        ?>
    <div class="container pb-5">
        <div class="row mb-3">
            <h1 class="mb-5">Upcoming Events</h1>
        </div>

        <?php while( $futureEvents->have_posts() ) { 
                $futureEvents->the_post(); ?>

            <!-- Start event row -->
            <div class="row mb-5">
                <div class="col-lg-5 mb-3 px-4">
                    <div class="card-img card-img-featured mb-3" style="background-image: url(
                        <?php
                            $postThumbnail = get_field('thumbnail');
                            if ($postThumbnail) {
                                echo $postThumbnail; 
                            } else {
                                echo get_template_directory_uri() . "/css/images/default.jpg";
                            }
                        ?>);">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="mb-2 card-title-featured"><a href="<?php the_permalink(); ?>" class="blue"><?php the_title() ?></a></h5>
                    <p class="card-subtitle mb-2">
                        Date: <?php
                            the_field('date');
                            if(get_field('time')) {
                                echo ' at ';
                                the_field('time');
                            }
                        ?>
                        <br>
                        Location: <?php
                            the_field('location');
                        ?>
                    </p>
                    <p> 
                        <?php echo wp_trim_words(get_field('description'), 50, ' [...]') ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">View Event</span></a>
                </div> 
            </div><!-- end event row -->
        <?php }
        wp_reset_postdata(); 
    }?>
    </div>



    <!-- Past Events -->
<?php
        // Find today's date
        $date_now = current_time('Ymd');


        // Set up for related posts section
        $futureEvents = new WP_Query(
            array(
            'post_type' => 'events',
            'meta_query' => array(
                'key' => 'date',
                'value' => $date_now,
                'compare' => '<',
            ),
            'meta_key' => 'date',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'posts_per_page' => 10
            )
        );

    if( $futureEvents->have_posts() ) { 
        ?>
    <div class="container pb-5">
        <div class="row mb-3">
            <h1 class="mb-5">Past Events</h1>
        </div>

        <?php while( $futureEvents->have_posts() ) { 
                $futureEvents->the_post(); ?>

            <!-- Start event row -->
            <div class="row mb-5">
                <div class="col-lg-5 mb-3 px-4">
                    <div class="card-img card-img-featured mb-3" style="background-image: url(
                        <?php
                            $postThumbnail = get_field('thumbnail');
                            if ($postThumbnail) {
                                echo $postThumbnail; 
                            } else {
                                echo get_template_directory_uri() . "/css/images/default.jpg";
                            }
                        ?>);">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="mb-2 card-title-featured"><a href="<?php the_permalink(); ?>" class="blue"><?php the_title() ?></a></h5>
                    <p class="card-subtitle mb-2">
                        Date: <?php
                            the_field('date');
                            if(get_field('time')) {
                                echo ' at ';
                                the_field('time');
                            }
                        ?>
                        <br>
                        Location: <?php
                            the_field('location');
                        ?>
                    </p>
                    <p> 
                        <?php echo wp_trim_words(get_field('description'), 50, ' [...]') ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">View Event</span></a>
                </div> 
            </div><!-- end event row -->

        <?php }
        wp_reset_postdata(); 
    }?>
    </div>

</div> <!-- end post cards container -->

<?php get_footer();?>