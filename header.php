<!DOCTYPE html>
    <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <html <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
    </head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="navbar-brand m-0">
        <a href="<?php echo home_url() ?>">
            <img src="<?php echo get_template_directory_uri() ?>/css/images/logos/logo-small.png" alt="" class="mobile-logo" width="70px" height="50px">
            <img src="<?php echo get_template_directory_uri() ?>/css/images/logos/logo-large.png" alt="" class="main-logo" width="270px" height="45px">
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-icon"></div>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="<?php echo site_url() ?>/community" class="dropdown-item">All Community Topics</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo site_url() ?>/about-donation" class="dropdown-item">About Eye Donation</a>
                        <a href="<?php echo site_url() ?>/recipient-stories" class="dropdown-item">Recipient Stories</a>
                        <a href="<?php echo site_url() ?>/grief-support" class="dropdown-item">Grief Support</a>
                        <a href="<?php echo site_url(); ?>/events" class="dropdown-item">Events</a>
                        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="dropdown-item">Blog</a>
                        <a href="<?php echo site_url() ?>/volunteer" class="dropdown-item">Volunteer</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Technical</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="<?php echo site_url() ?>/technical" class="dropdown-item">All Technical Topics</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo site_url(); ?>/licensure" class="dropdown-item">Tissue Safety & Licensure</a>
                        <a href="<?php echo site_url(); ?>/our-services" class="dropdown-item">Our Services</a>
                        <a href="<?php echo site_url() ?>/surgeon-form" class="dropdown-item">Surgeon Form</a>
                    </div>
                </li>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="<?php echo site_url() ?>/about-us" class="dropdown-item">View All Topics</a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo site_url() ?>/we-serve" class="dropdown-item">We Serve</a>
                        <a href="<?php echo site_url() ?>/our-team" class="dropdown-item">Our Team</a>
                        <a href="<?php echo site_url() ?>/our-board" class="dropdown-item">Our Board</a>
                        <a href="<?php echo site_url() ?>/our-facility" class="dropdown-item">Our Facility</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url() ?>/contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url() ?>/register-today" class="nav-link"><strong class="orange-link">Become A Donor</strong></a>
                </li>

            </ul>
    </div>
</nav>

<div class="container-fluid page-content">