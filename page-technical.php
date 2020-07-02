<?php get_header(); ?>
<!-- Title Header Container -->
<div class="container title-header technical-title mb-5">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Technical</h2>
            <h4 class="page-subtitle">Resources for surgeons and technical staff</h4>
        </div>
    </div>
</div> <!-- end title header container -->

<div class="container divider mb-5"></div>

<!-- Start Cards Container -->
<div class="container">
    <div class="row">
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 technical-safety"></div>
            <h5 class="mb-2 card-title-featured">Tissue Safety & Licensure</h5>
            <p>Learn about our stringent standards for qualifying tissue for transplant and view our current licensure</p>
            <a href="<?php echo site_url(); ?>/licensure"><span class="btn btn-outline-primary">Read More</span></a>

        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 technical-services"></div>
            <h5 class="mb-2 card-title-featured">Our Services</h5>
            <p>A list of our services and available tissue for transplantation or research</p>
            <a href="<?php echo site_url(); ?>/our-services"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
        <div class="col-lg-4 mb-5 px-4">
            <div class="card-img card-img-featured mb-3 technical-forms"></div>
            <h5 class="mb-2 card-title-featured">Surgeon Form</h5>
            <p>Our form for new surgeon authorization and tissue requests</p>
            <a href="<?php echo site_url(); ?>/surgeon-form"><span class="btn btn-outline-primary">Read More</span></a>
        </div>
    </div>
</div> <!-- end cards container -->

<div class="container divider mb-5"></div>

<?php get_footer(); ?>