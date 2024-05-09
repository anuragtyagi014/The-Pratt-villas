<?php
/* Template Name: rental-property */

get_header();
?>


<!-- Hero Section Start  -->
<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>Rental Property</h3>
            </div>
        </div>
    </div>
</section>


<!-- Newsletter Section End -->

<section class="property__features make_header-light for-all-ani ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="back-btn" style="padding-bottom: 40px;padding-top: 0px;text-align: left;">
                    <a href="javascript:history.go(-1)" onMouuseOver="self.status.referrer; return true">
                        <button class="grid__button" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                            <div class="cicled__btn">
                                <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                    <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                </svg>
                                <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16" xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                    <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                    </path>
                                </svg>
                            </div>
                            Back
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 fades-left" data-aos="fade-right" style="padding: 0px;">
                <img src="<?php echo esc_url(get_field('form_image')); ?>" style="width: 100%;height: 100%;object-fit: cover;">
            </div>
            <div class="col-md-12 col-lg-6" style="padding: 0px;">
                <div class="real_estates__content manin_tab_tenant_portal">

                    <?php echo apply_shortcodes(get_field('form_code')); ?>

                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>