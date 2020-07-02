<?php get_header(); ?>

<div class="container title-header forms-header mb-3">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Surgeon Form</h2>
            <h4 class="page-subtitle">A form for new and returning surgeons</h4>
        </div>
    </div>
</div> <!-- end title header container -->

<div class="container back-link">
        <p class="mt-2 mb-5"><a href="<?php echo site_url() ?>/technical" class="blue"><i class="fas fa-arrow-left"></i> All Technical Topics</a></p>
    </div>


<!-- Start small paragraph -->
<div class="container mb-5">
    <h1 class="blue mb-3">Technical Surgeon Form</h1>
    <p>If you are a surgeon or hospital interested in requesting tissue, a surgery follow-up, or general information, please submit the form below and we will get back to you as soon as possible.</p>
</div> <!-- End small paragraph -->

<div class="container mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-12 col-lg-8">
            <?php dynamic_sidebar( 'surgeon_form' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>