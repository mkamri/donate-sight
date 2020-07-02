<?php get_header(); ?>

<!-- Title Header Container -->
<div class="container title-header oh-no-title-header mb-5">
    <div class="row h-100">
        <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
            <h2 class="page-title">Page Not Found</h2>
        </div>
    </div>
</div> <!-- end title header container -->

<div class="container mb-5">

    <h1>Error 404: Page Not Found</h1>
        <p>Sorry, but we couldn't find the page you were looking for. <a href="<?php echo site_url(); ?>" class="orange">CLICK HERE</a> to return to our homepage.</p>
</div>

<?php get_footer();?>