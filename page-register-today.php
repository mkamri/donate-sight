<?php get_header(); ?>
    <!-- Header with featured image and title -->
    <div class="container title-header register-today-title-header mb-5">
        <div class="row h-100">
            <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
                <h2 class="page-title">Become a Donor</h2>
                <h4 class="page-subtitle">
                    Help us change lives across the nation and around the world.
                </h4>
            </div>
        </div>
    </div>

    <!-- Content -->

    <div class="container mb-5 p-4">
        <h2><strong class="orange">It takes just minutes to register to save lives.</strong></h2>
        <p>Signing up to become an organ, tissue and eye donor lets your loved ones know that you wish to pass on the gift of life. It's <strong>completely free</strong> and you can complete the registration <strong>in just a couple of minutes</strong> online.
    </div> <!-- end content -->

    <div class="container mb-5 divider"></div>

<!-- Start Cards Container -->
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h2>How To Register</h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4 mb-5 px-4 d-flex flex-column align-items-center justify-content-center">
            <div class="mb-3 register-icon"><i class="fas fa-laptop"></i></div>
            <a href="https://services.dps.ohio.gov/BMVOnlineServices/Home/Login?returnUrl=%2FBMVOnlineServices%2FDL%2FOrganDonor&authLevelEnums%5B0%5D=DLNumber&authLevelEnums%5B1%5D=Person" class="blue" target="_blank"><h5 class="mb-2 card-title-featured"><strong>Register Online</strong></h5></a>
            <p>Complete the online form for Ohioans with a valid state ID.</p>
            <a href="https://services.dps.ohio.gov/BMVOnlineServices/Home/Login?returnUrl=%2FBMVOnlineServices%2FDL%2FOrganDonor&authLevelEnums%5B0%5D=DLNumber&authLevelEnums%5B1%5D=Person" target="_blank"><span class="btn btn-warning">Register Now</span></a>
        </div>
        <div class="col-md-4 mb-5 px-4 d-flex flex-column align-items-center justify-content-center">
            <div class="mb-3 register-icon"><i class="fas fa-car"></i></div>
            <a href="https://www.bmv.ohio.gov/locations.aspx#gsc.tab=0" class="blue" target="_blank"><h5 class="mb-2 card-title-featured"><strong>Register In Person</strong></h5></a>
            <p>Visit your local BMV to register in person.</p>
            <a href="https://www.bmv.ohio.gov/locations.aspx#gsc.tab=0" target="_blank"><span class="btn btn-warning">Find Locations</span></a>
        </div>
        <div class="col-md-4 mb-5 px-4 d-flex flex-column align-items-center justify-content-center">
            <div class="mb-3 register-icon"><i class="far fa-envelope"></i></div>
            <a href="https://donatelifeohio.org/wp-content/uploads/2017/09/Donor_Registry_Form.pdf" class="blue" target="_blank"><h5 class="mb-2 card-title-featured"><strong>Register By Mail</strong></h5></a>
            <p>Print out the registration form and send via mail.</p>
            <a href="https://donatelifeohio.org/wp-content/uploads/2017/09/Donor_Registry_Form.pdf" target="_blank"><span class="btn btn-warning">View Form</span></a>
        </div>
    </div>
</div> <!-- end cards container -->

<div class="container divider mb-5"></div>

<!-- Learn More Container -->
<div class="container mb-5 py-5">
    <h2>Need more info?</h2>
    <h6 class="mb-3">Learn about how your registration will help restore sight and change lives.</h6>
    <a href="<?php echo site_url() ?>/about-donation"><div class="btn btn-outline-primary">About Cornea Donation <i class="fas fa-arrow-right"></i></div></a>
    
</div>

<!-- end learn more container -->


<?php get_footer(); ?>