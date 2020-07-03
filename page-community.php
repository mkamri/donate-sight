<?php get_header(); ?>
<!-- Title Header Container -->
<div class="container title-header community-title-header mb-5">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Community</h2>
            <h4 class="page-subtitle">Support for our friends in the Dayton area and beyond</h4>
        </div>
    </div>
</div> <!-- end title header container -->

<div class="container divider mb-5"></div>

<!-- Start Cards Container -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 about-donation"></div>
            <h5 class="mb-2 card-title-featured">About Eye Donation</h5>
            <p>Learn about the process and need for cornea donation</p>
            <a href="<?php echo site_url(); ?>/about-donation"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 community-recipient"></div>
            <h5 class="mb-2 card-title-featured">Recipient Stories</h5>
            <p>Experiences of grateful cornea and tissue recipients</p>
            <a href="<?php echo site_url(); ?>/category/recipients"><span class="btn btn-outline-primary">Read More</span></a>

        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 community-grief"></div>
            <h5 class="mb-2 card-title-featured">Grief Support</h5>
            <p>Healing and help for the grief of losing a loved one</p>
            <a href="#"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 community-events"></div>
            <h5 class="mb-2 card-title-featured">Events</h5>
            <p>Meet our team at upcoming events in the Dayton area</p>
            <a href="<?php echo site_url(); ?>/events"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 community-blog"></div>
            <h5 class="mb-2 card-title-featured">Blog</h5>
            <p>Recent eye bank news, updates, and stories</p>
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 community-volunteer"></div>
            <h5 class="mb-2 card-title-featured">Volunteer</h5>
            <p>Learn about volunteer opportunities at LEBWCO</p>
            <a href="<?php echo site_url(); ?>/volunteer"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
    </div>
</div> <!-- end cards container -->

<div class="container divider mb-5"></div>

<?php get_footer(); ?>