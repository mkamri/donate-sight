<!-- END PAGE CONTENT DIV -->
</div>


<footer class="container-fluid pb-3">
    <h5 class="footer-title mt-2"><?php echo get_bloginfo( 'name' );?></h5>
    <div class="container-fluid mb-5">
        <div class="row footer-content">
            <div class="col-lg-8 footer-text mb-3">
                <div class="container-fluid">
                    <div class="row">            
                        <div class="col-sm-4 footer-col">
                            <ul class="caps d-none d-sm-block">
                                <li><a href="<?php echo site_url() ?>/community" class="orange-link">Community</a></li>
                                <li><a href="<?php echo site_url() ?>/about-donation">About Donation</a></li>
                                <li><a href="<?php echo site_url() ?>/grief-support">Grief Support</a></li>
                                <li><a href="<?php echo site_url() ?>/events">Upcoming Events</a></li>
                                <li><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Blog</a></li>
                                <li><a href="<?php echo site_url() ?>/volunteer">Volunteer Today</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 footer-col">
                            <ul class="caps d-none d-sm-block">
                                <li><a href="<?php echo site_url() ?>/technical" class="orange-link">Technical</a></li>
                                <li><a href="<?php echo site_url() ?>/licensure">Tissue Safety & Licensure</a></li>
                                <li><a href="<?php echo site_url() ?>/our-services">Our Services</a></li>
                                <li><a href="<?php echo site_url() ?>/surgeon-form">Surgeon Form</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 footer-col">
                            <div class="row">
                                    <div class="col-6 col-sm-12 p-0">
                                    <ul>
                                        <li class="caps orange-text">Our Location</li>
                                        <li>TEL. (937) 396-1000</li>
                                        <li>FAX. (937) 396-0908</li>
                                        <li>3309 Office Park Drive</li>
                                        <li>Dayton, OH 45439</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-sm-12 p-0">
                                    <ul>
                                        <li class="caps orange-text">Office Hours</li>
                                        <li>Monday - Friday</li>
                                        <li>10:00 - 16:00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 footer-widget-left">
                <?php dynamic_sidebar( 'footer_area_left' ); ?>
            </div>
        </div>
    </div>


    <div class="container divider mb-3"></div>
    <div class="container footer-bottom">
        <div class="row">

            <div class="pt-2 col-md-9">
                <p class=" footer-copyright mt-1"><?php echo comicpress_copyright() . ' ' . get_bloginfo( 'name' );?>. All rights reserved.</p>
            </div>
            <div class="social-buttons col-md-3">
                <a href="tel:937-396-1000">
                    <i class="fas fa-phone-alt"></i>
                </a>
                <a href="mailto:cbranum@lebwcoonline.com">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://www.facebook.com/lebwco/" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        
        </div>
        
    </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>