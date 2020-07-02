<!--- Archive pages, like category, author, date etc --->

<?php get_header();

// Get the thumbnail
$backgroundImg = get_template_directory_uri() . "/css/images/categories/news.jpg";
?>


<!-- Title Header Container -->
<div class="container title-header" style="background-image: url(<?php echo $backgroundImg; ?>)">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Blog Posts</h2>
            <h4 class="page-subtitle">All recent posts to our blog</h4>
        </div>
    </div>
</div> <!-- end title header container -->

<!-- Back Link Container -->
<div class="container back-link">
    <p class="mt-2 mb-5"><a href="<?php echo site_url() ?>/community" class="blue"><i class="fas fa-arrow-left"></i> All Community Topics</a></p>
</div> <!-- end back link container -->

<div class="container divider mb-3"></div>

<!-- Post Cards Container -->
<div class="container post-cards py-5">
    <div class="row">
        <?php while( have_posts() ) : the_post();
        $categories = get_the_category();
        $category = esc_html( $categories[0]->name ); 
        ?>
            <div class="col-lg-4 mb-5 px-4">
                <div class="card-img card-img-featured mb-3" style="background-image: url(
                    <?php
                        $postThumbnail = get_the_post_thumbnail_url();
                        if ($postThumbnail) {
                            echo $postThumbnail; 
                        } else {
                            echo get_template_directory_uri() . "/css/images/default.jpg";
                        }
                    ?>);">
                </div>
                <h5 class="mb-2 card-title-featured"><?php the_title() ?></h5>
                <p class="card-subtitle-black mb-2">
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( $category ) ) ) ?>" class="blue">
                    <?php
                        if ( ! empty( $categories ) ) {
                            echo $category;   
                        } 
                    ?>
                    </a>
                    <?php
                        echo " // ";
                        echo get_the_date('m-d-Y');  
                    ?>
                </p>
                <p><?php 
                    if (has_excerpt()) {
                        the_excerpt(); 
                    } else {
                        echo wp_trim_words(get_the_content(), 25, '...');
                    }
                ?></p>
                <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">Read More</span></a>
            </div>
        <?php endwhile; ?>
    </div>
    <div class="container mb-5">
        <?php echo paginate_links(); ?>
    </div>
</div> <!-- end post cards container -->

<div class="container mb-5 divider"></div>

<?php get_footer();?>