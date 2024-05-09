<?php 
/* Template Name: Contact Us Template */ 

get_header();
?>

<style type="text/css">


@media (min-width:991px){
    div#gform_confirmation_wrapper_20 {
    height: 400px;
    display: flex;
    align-items: center;
}
}


    @media (max-width:991px){
        .Carers_section {
    padding: 0px 15px;
}
    }

    .main_contact_wrapper .gform_heading {
    display: none;
}

.real_estates__content {
    padding: 45px 24px 24px 24px;
}

p.for-txt-ani br {
    display: none;
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
                <h3>Contact Us</h3>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->

<section class="property__features make_header-light for-all-ani "> 

    
    <div class="container">
        <div class="row absec">
                <div class="col-lg-6 contact_data_info text-center">
                    <!-- <p class="for-txt-ani contact_details_data"><a href="tel:919-780-4565" class="d-flex align-items-center"><i class="fas fa-phone-alt"></i>919-780-4565</a></p> -->
                    <div class="job_car" style="margin-top: 10px;">
                        <h2><a href="tel:<?php echo get_field( 'contact_number' ); ?>" class="d-flex align-items-center"><i class="fas fa-phone-alt"></i><?php echo get_field( 'contact_number' ); ?></a></h2>
                        
                    </div>

                    <div class="job_car">
                        <h2><a href="mailto:<?php echo get_field( 'contact_email' ); ?>" class="d-flex align-items-center"><i class="fas fa-envelope"></i><?php echo get_field( 'contact_email' ); ?></a></h2>
                        
                    </div>
                                   
                </div>
                <div class="col-lg-6 text-justify">
                    <h5 class="for-txt-ani"><?php echo get_field( 'sub_heading' ); ?></h5>
                    <p class="for-txt-ani"><?php echo get_field( 'paraghraph_text' ); ?></p>
                                   
                </div>
        </div>
        <br>
        <div class="row"> 
            <div class="col-md-12 col-lg-6 fades-left" data-aos="fade-right" style="padding: 0px;">
                <img src="<?php echo esc_url( get_field( 'image' ) ); ?>" class="duimg">
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





