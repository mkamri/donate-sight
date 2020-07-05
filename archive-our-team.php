<?php get_header();

// Get the thumbnail
$backgroundImg = get_template_directory_uri() . "/css/images/about/team.jpg";
?>
<!-- Title Header Container -->
<div class="container title-header" style="background-image: url(<?php echo $backgroundImg; ?>)">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Our Team</h2>
            <h4 class="page-subtitle">Meet our current full time staff</h4>
        </div>
    </div>
</div> <!-- end title header container -->

<!-- Back Link Container -->
<div class="container back-link mb-5">
    <p class="mt-2"><a href="<?php echo site_url() ?>/about-us" class="blue"><i class="fas fa-arrow-left"></i> All About Us Topics</a></p>
</div> <!-- end back link container -->



<!-- Post Cards Container -->
<div class="container">


    <!-- Administrative Team Members -->
    <div class="row">
        <h1 class="mb-5 team-title">Administrative</h1>
    </div>
    <div class="row">

        <?php
            // Set up for related posts section
            $administrative = new WP_Query( array(
                'post_type' => 'our-team',
                'posts_per_page' => -1,
                'meta_key' => 'member_order',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    'key' => 'department',
                    'value' => 'administrative',
                    'compare' => '='
                )
            ));

        if( $administrative->have_posts() ) { 
            ?>

            <?php while( $administrative->have_posts() ) { 
                    $administrative->the_post(); ?>

                    <!-- Start member card -->
                    <div class="col-sm-6 col-md-4 mb-5 px-4 flex-column align-items-center justify-content-center">
                        <div class="team-card d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="team-card-img mb-3" style="background-image: url(<?php the_field('photo') ?>)"></div>
                            <div>
                                <h5 class="mb-1"><?php the_field('first_and_last_name'); ?></h5>
                                <p class="mb-1"><strong><?php the_field('position'); ?></strong></p>
                                <p class="team-card-email"><a href="mailto:<?php the_field('email') ?>" class="blue"><?php the_field('email') ?></a></p>
                            </div>
                        </div>
                    </div>


                    <!-- end member card -->
            <?php }
            wp_reset_postdata(); 
        }?>

    </div> <!-- end administrative -->

    <div class="mb-5 divider container"></div>

    <!-- Start Technical -->
    <div class="row mb-5"><h1 class="team-title">Technical</h1></div>
    <div class="row">

        <?php
            // Set up for related posts section
            $technical = new WP_Query( array(
                'post_type' => 'our-team',
                'posts_per_page' => -1,
                'meta_key' => 'member_order',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    'key' => 'department',
                    'value' => 'technical',
                    'compare' => '='
                )
            ));

        if( $technical->have_posts() ) { 
            ?>

            <?php while( $technical->have_posts() ) { 
                    $technical->the_post(); ?>

                    <!-- Start member card -->
                    <div class="col-sm-6 col-md-4 mb-5 px-4 flex-column align-items-center justify-content-center">
                        <div class="team-card d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="team-card-img mb-3" style="background-image: url(<?php the_field('photo') ?>)"></div>
                            <div>
                                <h5 class="mb-1"><?php the_field('first_and_last_name'); ?></h5>
                                <p class="mb-1"><strong><?php the_field('position'); ?></strong></p>
                                <p class="team-card-email"><a href="mailto:<?php the_field('email') ?>" class="blue"><?php the_field('email') ?></a></p>
                            </div>
                        </div>
                    </div>


                    <!-- end member card -->
            <?php }
            wp_reset_postdata(); 
        }?>

    </div> <!-- end technical -->



</div> <!-- end post cards container -->

<?php get_footer();?>