<?php get_header(); ?>
    <!-- Header with featured image and title -->
    <div class="container title-header recipient-stories-title-header">
        <div class="row h-100">
            <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
                <h2 class="page-title"><?php the_title() ?></h2>
                <h4 class="page-subtitle">
                    A gift of sight, of hope.
                </h4>
            </div>
        </div>
    </div>

    <div class="container back-link">
        <p class="mt-2 mb-3"><a href="<?php echo site_url() ?>/community" class="blue"><i class="fas fa-arrow-left"></i> All Community Topics</a></p>
    </div>

    <!-- Page content -->
    <div class="container single-post-content py-3">
        <h1>Our recipients discovered hope.</h1>
        <p>Many cornea recipients write to us with inspiring stories of their newfound gift of sight. They regain their independence, marveling at the joys of watching their grandchildren play or seeing the leaves on trees again. Our recipients also express their deep condolences for the loss felt by the families of donors. Thanks to their kindness and generosity, their loss is transformed into hope.</p>
        <p>We’re honored to present some of their stories to you. </p>
    </div>

    <?php
        // Set up for related posts section
        $related = new WP_Query(
            array(
            'category_name' => 'recipients',
            'posts_per_page' => 3,
            'post__not_in'   => array( $post->ID ),
            'orderby'        => 'desc'
            )
        );

    if( $related->have_posts() ) { 
        ?>
    <div class="container pb-5">
        <div class="row">

            <?php while( $related->have_posts() ) { 
                $related->the_post();
                $relatedPostImg = get_the_post_thumbnail_url(); ?>

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
                                echo get_the_date('m-d-Y');  
                            ?>
                        </p>
                        <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">Read More</span></a>
                    </div>
                </div>
            <?php
            }
        wp_reset_postdata(); 
        } ?>

        </div> <!-- end related posts row -->
    </div><!-- end related posts container -->


    <div class="container">
        <p class="mt-2 mb-5"><a href="<?php echo site_url() ?>/category/recipients" class="blue">View All Recipient Stories <i class="fas fa-arrow-right"></i></a></p>
    </div>
    <?php get_footer(); ?>