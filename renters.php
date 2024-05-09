<?php 

/* Template Name: renters */ 



get_header();

?>





<!-- Hero Section Start  -->

<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>Renters</h3>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section End -->



<section class="property__features make_header-light for-all-ani "> 

    <div class="container">

        <div class="row"> 

        	<div class="col-md-12 col-lg-6 fades-left" data-aos="fade-right" style="padding: 0px;">

             <img src="<?php echo esc_url( get_field( 'image' ) ); ?>"style="width: 100%;height: 100%;object-fit: cover;">   

            </div>

            <div class="col-md-12 col-lg-6" style="padding: 0px;">
                
                <div class="real_estates__content manin_tab_tenant_portal">	    
					<h2 class="gform_title">Renters</h2>
                    <?php echo apply_shortcodes( get_field( 'form_code' ) ); ?>
                </div>

            </div>

        </div>

    </div>

</section>







<?php  get_footer(); ?>