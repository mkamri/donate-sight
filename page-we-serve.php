<?php get_header(); ?>
    <!-- Header with featured image and title -->
    <div class="container title-header we-serve-title-header">
        <div class="row h-100">
            <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
                <h2 class="page-title"><?php the_title() ?></h2>
                <h4 class="page-subtitle">
                    Giving back to the community
                </h4>
            </div>
        </div>
    </div>

    <div class="container back-link">
        <p class="mt-2 mb-3"><a href="<?php echo site_url() ?>/about-us" class="blue"><i class="fas fa-arrow-left"></i> All About Us Topics</a></p>
    </div>

    <!-- Page content -->
    <div class="container single-post-content py-3">
        <h1>We Serve our Community</h1>
        <p class="mb-5"><strong>Like our Lions who founded us, we believe in serving our community. We strive every day to fulfill our mission and serve our community.</strong></p>

        
        <div class="container we-serve-mission mb-5 text-center d-flex flex-column align-items-center justify-content-center">
            <h2 class="mb-3">Our Mission:</h2>
            <p>We serve donor families, the medical community, and recipients in communities nationally and internationally through education, research, and the gift of sight.</p>
        </div>

        <div class="mb-5">
            <h3 class="blue mb-3">Surgery Assistance</h3>
            <p>We're here to help. If you or a loved one need financial help with a sight related surgery, <a href="<?php echo site_url(); ?>/contact" class="orange">contact us</a> to see if you may qualify for financial assistance, or if we can refer you to one of our partners for assistance. All outreach is done on a case-by-case basis.</p>
        </div>

        <div class="container-fluid divider mb-5"></div>

        <div class="mb-5">
            <h3 class="blue mb-3">Lions Club</h3>
            <p>We are proud to say that more than half of our full-time staff are local members of their Lions Club, dedicated to changing the world through kindness and service.</p>
        </div>

        <div class="container-fluid divider mb-5"></div>

        <div class="mb-5">
            <h3 class="blue mb-3">Eyeglasses Donations</h3>
            <p>We accept donated glasses for the Lions Club. All used glasses are repurposed to help those in need. If you would like to donate, please visit <a href="<?php echo site_url() ?>/contact" class="orange">contact us</a>.</p>
        </div>        
        
        <div class="container-fluid divider mb-5"></div>

        <div class="mb-5">
            <h3 class="blue mb-3">Donate Life 5K Run/Walk to raise awareness</h3>
            <p>Every year we continue to raise awareness for Organ, Tissue, and Eye donation through coordinating and/or sponsoring 3 different 5K events throughout the state. We collaborate with our partners in each area, Life Connection of Ohio, Lifeline of Ohio, and Community Tissue Services.  </p>
            <p>Strides 4 Life in Dayton – April</p>
            <p>Dash for Donation in Columbus – July</p>
            <p>Hero Hustle in Toledo — November</p>
        </div>

        <div class="container-fluid divider mb-5"></div>

        <div class="mb-5">
            <h3 class="blue mb-3">Food Drives</h3>
            <p>Twice a year we hold food drives for our community. Visit our <a href="<?php echo site_url() ?>/events" class="orange">events</a> page to join us for our next food drive!</p>
        </div>

        <div class="container-fluid divider mb-5"></div>


    </div>  <!-- end page content -->

    <?php
        // Set up for related posts section
        $related = new WP_Query(
            array(
            'post_type' => 'events',
            'posts_per_page' => 3,
            'post__not_in'   => array( $post->ID ),
            'orderby'        => 'desc'
            )
        );

    if( $related->have_posts() ) { 
        ?>
    <div class="container pb-5">
        <div class="row mb-3">
            <h1>Upcoming events</h1>
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

<?php get_footer(); ?>