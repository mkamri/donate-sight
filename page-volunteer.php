<?php get_header(); ?>

<div class="container title-header volunteer-title-header mb-5">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Volunteer</h2>
            <h4 class="page-subtitle">An invitation to participate!</h4>
        </div>
    </div>
</div> <!-- end title header container -->


<!-- Start small paragraph -->
<div class="container mb-5">
    <h1 class="blue mb-3">Come volunteer with us!</h1>
    <p>We're always accepting volunteers to help us out with community events, local medical transport, and administrative support. Tell us a little about yourself and we'll get back to you with our current volunteer needs.</p>
</div> <!-- End small paragraph -->

<div class="container mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-12 col-lg-8">
            <?php dynamic_sidebar( 'volunteer_page_form' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>