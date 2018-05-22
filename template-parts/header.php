<!-- Main Header Carousel -->
<div class="headerBox">
    
    <div class="header" style="background-image: url(<?php echo get_field('header_image')?>)">
    <?php include "navigation.php" ?>
        <div class="transparent-filter"></div>
        <div class="container">
            <div class="row mainTopMessage">
                <div class="col-md-1"></div>

                <div class="col-md-9">
                    <h1 class="mainHeadingFade"><?php echo get_field('main_heading')?></h1>
                    <p class="mainHeadingFade">Call now</p>
                    <div class="action">
                        <div class="contact-group">
                            <i class="fa fa-phone mainHeadingFade" aria-hidden="true"></i>
                            <p class="mainHeadingFade"><?php echo get_option('phone_number'); ?></p>
                        </div>
                        <div class="contact-group">
                            <i class="fa fa-mobile padding-left-contact mainHeadingFade" aria-hidden="true"></i>
                            <p class="mainHeadingFade"><?php echo get_option('mobile_number'); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>