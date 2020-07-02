<?php get_header(); ?>
    <!-- Header with featured image and title -->
    <div class="container title-header grief-support-title-header">
        <div class="row h-100">
            <div class="col-12 col-md-7 col-lg-5 col-xl-4 h-100 d-flex flex-column justify-content-center title-header-text-area">
                <h2 class="page-title"><?php the_title() ?></h2>
                <h4 class="page-subtitle">
                    Find help and healing for the pain of losing a loved one
                </h4>
            </div>
        </div>
    </div>

    <div class="container back-link">
        <p class="mt-2 mb-3"><a href="<?php echo site_url() ?>/community" class="blue"><i class="fas fa-arrow-left"></i> All Community Topics</a></p>
    </div>

    <!-- Page content -->
    <div class="container single-post-content py-3">
        <p>One of the most difficult times we face in life is during the loss of a loved one. While feelings of grief are normal and healthy, the emotional burden can be heavy and painful.</p>
        <p>We’d like to share some resources for family members who are facing the grieving process.</p>
    </div>

    <div class="container mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <div class="card-img hospice-img mb-3"></div>
                    <h4 class="card-title">Hospice of Dayton</h4>
                    <p class="card-description">Our friends at Hospice of Dayton provide grief services for anyone who has lost a loved one.</p>
                    <a href="http://www.hospiceofdayton.org/caregiver-support/grief-support/" target="_blank"><span class="btn btn-outline-primary">Visit Their Site</span></a>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 mb-5">
                    <div class="card-img grief-share-img mb-3"></div>
                    <h4 class="card-title">GriefShare</h4>
                    <p class="card-description">Nationally, GriefShare is a great resource for grief services, hosting seminars, support groups, and online content.</p>
                    <a href="https://www.griefshare.org/" target="_blank"><span class="btn btn-outline-primary">Visit Their Site</span></a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>