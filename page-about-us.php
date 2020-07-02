<?php get_header(); ?>
<!-- Title Header Container -->
<div class="container title-header about-title mb-5">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">About Us</h2>
            <h4 class="page-subtitle">Who we are and what we do</h4>
        </div>
    </div>
</div> <!-- end title header container -->


<!-- Start small paragraph -->
<div class="container mb-5">
    <h1>Welcome to Lions Eye Bank of West Central Ohio</h1>
    <p>Since 1982, the Lions Eye Bank of West Central Ohio has served the city of Dayton and the surrounding counties, providing the gift of sight to patients in our community and around the globe.</p>
    <p>We are a non-profit, non-governmental organization dedicated to relieving human suffering through the recovery and provision of ocular tissue for sight-restoring transpland surgeries, medical research, and education.</p>
</div> <!-- End small paragraph -->


<div class="container divider mb-5"></div>

<!-- Start Cards Container -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 about-service"></div>
            <h5 class="mb-2 card-title-featured">We Serve</h5>
            <p>About our mission and nonprofit work</p>
            <a href="<?php echo site_url(); ?>/we-serve"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 about-team"></div>
            <h5 class="mb-2 card-title-featured">Our team</h5>
            <p>Meet our current in-house staff</p>
            <a href="<?php echo site_url() ?>/our-team"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 about-board"></div>
            <h5 class="mb-2 card-title-featured">Our Board</h5>
            <p>Meet our current board members</p>
            <a href="<?php echo site_url() ?>/our-board"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 about-facility"></div>
            <h5 class="mb-2 card-title-featured">Our Facility</h5>
            <p>About our history and location</p>
            <a href="<?php echo site_url() ?>/our-facility"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
    </div>
</div> <!-- end cards container -->

<div class="container divider mb-5"></div>

<?php get_footer(); ?>