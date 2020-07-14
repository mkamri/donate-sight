<?php get_header();

// Get the thumbnail
$backgroundImg = get_template_directory_uri() . "/css/images/about/team.jpg";
?>
<!-- Title Header Container -->
<div class="container title-header" style="background-image: url(<?php echo $backgroundImg; ?>)">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Tissue Safety & Licensure</h2>
        </div>
    </div>
</div> <!-- end title header container -->

<!-- Back Link Container -->
<div class="container back-link mb-5">
    <p class="mt-2"><a href="<?php echo site_url() ?>/technical" class="blue"><i class="fas fa-arrow-left"></i> All Technical Topics</a></p>
</div> <!-- end back link container -->

<!-- Start small paragraph -->
<div class="container mb-5">
    <h1>Tissue Safety</h1>
    <p>Lions Eye Bank of West Central Ohio is dedicated to transplant and recipient safety. We recover and provide high-quality ocular tissue and determine donor suitability based on current standards and guidelines set forth by the FDA and Eye Bank Association of America.</p>
    
    <p>We are registered with both the FDA and Health Canada; and hold a state license for California and Maryland. </p>

    <p>LEBWCO is fully accredited for all eye banking functions by the Eye Bank Association of America. Two Medical Directors and a highly trained Quality Assurance Director provide oversight of the program. Additionally, all of our full-time technical staff are Certified Eye Bank Technicians (CEBTs) designated by the EBAA.</p>
</div>

<div class="container divider mb-5"></div>

<!-- Post Cards Container -->
<div class="container">
    <h1>Licensure</h1>
    <p class="mb-5">Click to view document of certification</p>

    <!-- Licensure -->
    <div class="row">

        <?php
            // Set up for related posts section
            $futureEvents = new WP_Query(
                array(
                'post_type' => 'licensure',
                'posts_per_page' => -1,
                'orderby' => 'license_order',
                'order' => 'ASC',
                )
            );

        if( $futureEvents->have_posts() ) { 
            ?>

            <?php while( $futureEvents->have_posts() ) { 
                    $futureEvents->the_post(); ?>

                    <!-- Start license card -->
                    <div class="col-sm-6 col-md-4 mb-5 px-4 flex-column align-items-center justify-content-center">
                        <div class="team-card d-flex flex-column align-items-center justify-content-center text-center">
                        <a href="<?php the_field('updated_license'); ?>" target="_blank">
                            <img src="<?php the_field('organization_logo') ?>" alt="" width="100%" height="auto" class="license-image mb-3">
                        </a>
                            <div>
                                <p class="mb-3"><strong><?php the_field('license_name'); ?></strong></p>
                            </div>
                        </div>
                    </div>


                    <!-- end license card -->
            <?php }
            wp_reset_postdata(); 
        }?>

    </div> <!-- end licensure -->

    <div class="mb-5 divider container"></div>



</div> <!-- end post cards container -->

<?php get_footer();?>