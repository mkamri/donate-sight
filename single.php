<?php get_header();

while( have_posts() ) : the_post();

// Get the thumbnail and category
$backgroundImg = get_the_post_thumbnail_url();
$categories = get_the_category();
$category = esc_html( $categories[0]->name );

?>

    <!-- Header with featured image and title -->
    <div class="container title-header" style="background-image: url(<?php
            echo get_template_directory_uri() . "/css/images/default.jpg";
        ?>)">
        <div class="row h-100">
            <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
                <h2 class="page-title"><?php the_title() ?></h2>
                <h4 class="page-subtitle white">
                    <a href="<?php echo esc_url( get_category_link( get_cat_ID( $category ) ) ) ?>" class="orange">
                        <?php 
                        if ( ! empty( $categories ) ) {
                            echo $category;   
                        } ?>
                    </a>
                    <?php
                        echo " // ";
                        echo get_the_date('m-d-Y');  ?>
                </h4>
            </div>
        </div>
    </div>

    <div class="container back-link">
        <p class="mt-2 mb-3"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="blue"><i class="fas fa-arrow-left"></i> All Blog Posts</a></p>
    </div>

    <!-- Post content -->
    <div class="container single-post-content py-3 mb-5">
        <?php the_content(); ?>
    </div>

    <?php
    endwhile; ?>

    <div class="container back-link mb-3">
        <p class="mt-2 mb-3"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="blue"><i class="fas fa-arrow-left"></i> All Blog Posts</a></p>
    </div>

                <?php
                    // Set up for related posts section
                    $related = new WP_Query(
                        array(
                        'category__in'   => wp_get_post_categories( $post->ID ),
                        'posts_per_page' => 3,
                        'post__not_in'   => array( $post->ID ),
                        'orderby'        => 'rand'
                        )
                    );
    
                    if( $related->have_posts() ) { 
                        ?>
                        <div class="container divider mb-4"></div>
                        <div class="container pb-5">
                            <div class="row">
                                <h4 class="mb-5">Recommended Posts</h4>
                            </div>
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
                                    <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">Read More</span></a>
                                </div>
                            </div>
                        <?php
                        }
                    wp_reset_postdata(); 
                    } ?>

            </div>
        </div>

<?php get_footer() ?>