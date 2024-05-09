<?php 
/* Template Name: Carers Template */ 

get_header();
?>

<style type="text/css">
    @media (max-width:991px){
        .Carers_section {
    padding: 0px 15px;
}
    }
</style>
<!-- Hero Section Start  -->
<!-- <section class="page__header hero-v2__section make_header-dark for-all-ani" style="background-image:url(<?php echo esc_url( get_field( 'bg_image' ) ); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search__wrapper content">
                    <br>
                    <br>
                    <h2 class="search__title text-center for-txt-ani">
                         <span class="toggle__buy active"><?php echo get_field( 'heading' ); ?></span>
                         
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>  -->

<section class="page_main_head_title">
    <div class="row">
        <div class="container">
          
                <div class="main_tit_new_corp">
                    <h3>KAMAL HOSPITALITY GROUP <span>Presents</span></h3>
                </div>

        </div>
    </div>
</section>
<section class="page_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>Career</h3>
            </div>
        </div>
    </div>
</section>


<!-- Newsletter Section End -->

<section class="property__features make_header-light for-all-ani "> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="absec text-center">
                <h4 class="for-txt-ani"><?php echo get_field('career_features_heading'); ?></h4>        
                </div>                
            </div>
            <br>
            <br>
            <?php foreach (get_field('career_features_list') as $career_features_list): ?>
                <div class="col-md-4">
                    <div class="job_car">
                        <h2><?php echo $career_features_list['role']; ?></h2>
                        <p><i class="fa fa-map-marker"></i><?php echo $career_features_list['location']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <br>
        <br>
        <div class="row" style="background-image:url(<?php echo esc_url( get_field( 'image' ) ); ?>);background-size: 55%;background-position: left;background-repeat: no-repeat;"> 
            <div class="col-md-12 col-lg-6 fades-left" data-aos="fade-right" style="padding: 0px;">
            </div>
            <div class="col-md-12 col-lg-6 Carers_section" style="padding: 0px;background: white;">
                <div class="real_estates__content manin_tab_tenant_portal">
                        
                    <?php echo apply_shortcodes( get_field( 'form_code' ) ); ?>

                </div>
            </div>
        </div>
    </div>
</section>



<?php  get_footer(); ?>





















<?php  get_footer(); ?>