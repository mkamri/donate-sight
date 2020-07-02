<!--- Archive pages, like category, author, date etc --->

<?php get_header();

// Get the thumbnail and category
$categories = get_the_category();
$category = esc_html( $categories[0]->name );
if ($category == 'Donors') {
    $backgroundImg = get_template_directory_uri() . "/css/images/categories/donors.jpg";
} else if ($category == 'Recipients') {
    $backgroundImg = get_template_directory_uri() . "/css/images/categories/recipients.jpg";
} else if ($category == 'News') {
    $backgroundImg = get_template_directory_uri() . "/css/images/categories/news.jpg";
} else {
    $backgroundImg = get_template_directory_uri() . "/css/images/categories/default.jpg";
}
?>


<!-- Title Header Container -->
<div class="container title-header" style="background-image: url(<?php echo $backgroundImg; ?>)">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title"><?php echo $category ?></h2>
            <h4 class="page-subtitle">
                    <?php 
                    if ( ! empty( $categories ) ) {
                        echo 'All posts related to ' . lcfirst($category) . '.';   
                    } ?>
            </h4>
        </div>
    </div>
</div> <!-- end title header container -->

<!-- Back Link Container -->
<div class="container back-link">
    <p class="mt-2 mb-5"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="blue"><i class="fas fa-arrow-left"></i> All Blog Posts</a></p>
</div> <!-- end back link container -->

<!-- Post Cards Container -->
<div class="container post-cards">
    <div class="row">
        <?php while( have_posts() ) : the_post(); ?>
            <div class="col-lg-4 mb-5 px-4">
                <div class="card-img mb-3 card-img-featured" style="background-image: url(
                    <?php
                        $postThumbnail = get_the_post_thumbnail_url();
                        if ($postThumbnail) {
                            echo $postThumbnail; 
                        } else {
                            echo get_template_directory_uri() . "/css/images/default.jpg";
                        }
                    ?>);">
                </div>
                <h5 class="mb-2 card-title-featured"><a href="<?php the_permalink(); ?>" class="blue"><?php the_title() ?></a></h5>
                <p class="card-subtitle mb-2">
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( $category ) ) ) ?>" class="orange">
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
</div>

<?php get_footer();?>