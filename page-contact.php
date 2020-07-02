<?php get_header(); ?>

<div class="container title-header about-title mb-5">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Contact Us</h2>
            <h4 class="page-subtitle">General contact form</h4>
        </div>
    </div>
</div> <!-- end title header container -->


<!-- Start small paragraph -->
<div class="container mb-5">
    <h1 class="blue mb-3">We'd love to hear from you!</h1>
    <p>If you have any questions about LEBWCO or would like to request information on speakers, volunteering, or careers, please contact us using the form below.</p>
</div> <!-- End small paragraph -->

<div class="container mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-12 col-lg-8">
            <?php dynamic_sidebar( 'contact_us_page_form' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>