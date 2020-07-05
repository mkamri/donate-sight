<?php get_header(); ?>
    <div class="container front-hero-section mb-5">
        <div class="row h-100">
            <div class="col-12 col-md-6 px-3 px-lg-5 d-flex flex-column justify-content-center h-100 front-hero-mobile-background">
                <h1 class="front-hero-header mb-2">Help us bring<br>
                    <span class="orange-text">a brighter future</span>.
                </h1>
                <p class="white mb-3 front-hero-paragraph">Welcome to Lions Eye Bank of West Central Ohio, a nonprofit dedicated to restoring sight across the nation and around the world.</p>
                <div>
                <a href="<?php echo site_url(); ?>/about-us"><span class="btn btn-warning front-hero-button">About Us</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container divider mb-5"></div>

    <div class="container front-help-the-blind mb-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-5 p-0 front-help-the-blind-img">
            </div>
            <div class="col-md-1 column-spacer"></div>
            <div class="col-md-6">
                <h2 class="front-help-the-blind-header mb-3">You can help the blind to see.</h2>
                <p class="mb-3">Corneal transplants are the second most common transplant in the US, after blood donation. We need to supply corneas for over <strong>44,000 transplants per year</strong>. Your donation will help us to meet these needs, restoring vision to up to two people.</p>
                <a href="<?php echo site_url() ?>/about-donation"><span class="btn btn-outline-primary mr-3 mb-3">About Donation</span></a>
                <a href="<?php echo site_url() ?>/register-today"><span class="btn btn-warning mb-3">Register Today</span></a>
            </div>
        </div>
    </div>

    <div class="container divider mb-5"></div>

    <div class="container front-recent-news mb-5">
        <div class="section-header">
            <span class="tiny-text">What's going on</span>
            <h2 class="big-text">Recent News</h2>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 mb-5">
                <h4 class="mb-4">From the blog</h4>
                <ul class="front-blog-posts p-0">
                    <?php
                        // Set up for related posts section
                        $blogPosts = new WP_Query(
                            array(
                            'posts_per_page' => 2,
                            'orderby'        => 'desc'
                            )
                        );
        
                        if( $blogPosts->have_posts() ) { 
                            ?>
                            <?php while( $blogPosts->have_posts() ) { 
                                $blogPosts->the_post();
                                $postThumbnail = get_the_post_thumbnail_url();
                                $categories = get_the_category();
                                $category = esc_html( $categories[0]->name ); ?>

                                <li class="mb-5 front-news-item-li">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card-img mb-3" style="background-image: url(
                                                    <?php
                                                        $postThumbnail = get_the_post_thumbnail_url();
                                                        if ($postThumbnail) {
                                                            echo $postThumbnail; 
                                                        } else {
                                                            echo get_template_directory_uri() . "/css/images/default.jpg";
                                                        }
                                                    ?>);">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6><strong><?php wp_trim_words(the_title(), 10, '...'); ?></strong></h6>
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
                                                <p>
                                                    <?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?>
                                                </p>
                                                <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">Read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            <?php
                            }
                        wp_reset_postdata(); 
                        } ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <h4 class="mb-4">Upcoming Events</h4>
                <ul class="front-event-list p-0">

                        <?php
                            // Find today's date
                            $date_now = current_time('Ymd');


                            // Set up for related posts section
                            $upcomingEvents = new WP_Query(
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

                        if( $upcomingEvents->have_posts() ) { 
                            ?>
                                <?php while( $upcomingEvents->have_posts() ) { 
                                    $upcomingEvents->the_post();
                                    $postThumbnail = get_field('thumbnail'); ?>

                                    <li class="mb-5 front-news-item-li">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card-img mb-3" style="background-image: url(
                                                        <?php
                                                            if ($postThumbnail) {
                                                                echo $postThumbnail; 
                                                            } else {
                                                                echo get_template_directory_uri() . "/css/images/default.jpg";
                                                            }
                                                        ?>);">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p><strong><?php echo wp_trim_words(the_title(), 10, '...'); ?></strong></p>
                                                    <p>
                                                        <ul class="p-0">
                                                            <li><strong>Date:</strong> <?php the_field('date'); ?></li>
                                                            <?php 
                                                                if (get_field('time')) { ?>
                                                                    <li><strong>Time:</strong> <?php the_field('time'); ?></li>
                                                                <?php }
                                                            ?>
                                                            <li><strong>Location:</strong> <?php echo wp_trim_words(get_field('location'), 10, '...'); ?></li>
                                                        </ul></p>
                                                        <a href="<?php the_permalink(); ?>"><span class="btn btn-outline-primary">View event</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                <?php }
                        }
                        
                        if ( ! $upcomingEvents->have_posts() ) {
                            echo '<li>No upcoming events at this time. Please check back later!</li>';
                        }
                        
                        wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container divider mb-5"></div>

    <div class="container front-community mb-5">
        <div class="section-header mb-4">
            <span class="tiny-text">Join us</span>
            <h2 class="big-text">Community</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card-img recipient-stories-img mb-3"></div>
                    <h6 class="card-title">Recipient Stories</h6>
                    <p class="card-description">Testimonials from grateful donation recipients</p>
                    <a href="<?php echo site_url() ?>/recipient-stories"><span class="btn btn-outline-primary">Read More</span></a>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card-img become-donor-img mb-3"></div>
                    <h6 class="card-title">Become a Donor</h6>
                    <p class="card-description">Learn how you can help us change lives through donation</p>
                    <a href="<?php echo site_url() ?>/register-today"><span class="btn btn-outline-primary">Read More</span></a>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card-img grief-support-img mb-3"></div>
                    <h6 class="card-title">Grief Support</h6>
                    <p class="card-description">Find healing and help for the grief of losing a loved one</p>
                    <a href="<?php echo site_url() ?>/grief-support"><span class="btn btn-outline-primary">Read More</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container divider mb-5"></div>

    <div class="container front-community mb-5">
        <div class="section-header mb-4">
            <span class="tiny-text">For Surgeons</span>
            <h2 class="big-text">Technical</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card-img tissue-safety-img mb-3"></div>
                    <h6 class="card-title">Tissue Safety</h6>
                    <p class="card-description">Our Quality Standards and Current Licensure</p>
                    <a href="<?php echo site_url() ?>/licensure"><span class="btn btn-outline-primary">Read More</span></a>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card-img our-services-img mb-3"></div>
                    <h6 class="card-title">Our Services</h6>
                    <p class="card-description">A list of our services and available tissue for transplantation or research</p>
                    <a href="<?php echo site_url() ?>/our-services"><span class="btn btn-outline-primary">Read More</span></a>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card-img surgeon-forms-img mb-3"></div>
                    <h6 class="card-title">Surgeon Form</h6>
                    <p class="card-description">Our form for new surgeon authorization and tissue requests</p>
                    <a href="<?php echo site_url() ?>/surgeon-form"><span class="btn btn-outline-primary">Read More</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container divider mb-5"></div>

    <div class="container mb-5" id="contact">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-6">

                <div class="section-header mb-4">
                    <span class="tiny-text">Talk To Us</span>
                    <h2 class="big-text">Contact Us</h2>
                </div>


                <?php dynamic_sidebar( 'front_contact_form' ); ?>

            </div>
            <div class="col-md-1 column-spacer"></div>
            <div class="col-md-5 front-contact-image d-none d-lg-block"></div>
        </div>
    </div>

<?php get_footer(); ?>