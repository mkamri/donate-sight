<?php get_header() ?>

<div class="container mb-5">
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
            
            <div class="container mb-5">
                <h1 class="my-5"><?php the_title(); ?></h1>

                <div class="container-fluid my-5 divider"></div>

                <div class="container-fluid mb-5">
                    <?php the_content(); ?>
                </div>
                
                <div class="container-fluid divider mb-5"></div>
            </div>
            

        <?php } // end while
    } // end if
    ?>
</div>

<?php get_footer() ?>