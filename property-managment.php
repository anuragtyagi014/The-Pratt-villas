<?php 
/* Template Name: Property Managment */ 

get_header();
?>


<!-- Hero Section Start  -->
<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>Property Managment</h3>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section End -->

<section class="grid__section make_header-dark trans-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="back-btn" style="padding-bottom: 40px;padding-top: 0px;text-align: left;">
                 <a href="javascript:history.go(-1)"onMouuseOver="self.status.referrer; return true">
                    <button class="grid__button"
                       style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                       <div class="cicled__btn">
                          <svg viewBox="0 0 24 24" class="circled__btn-outer">
                             <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                          </svg>
                          <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16"
                             xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                             <path
                                d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
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
        <div class="row justify-content-md-center" style="margin-bottom:30px;">
             <?php if ( have_rows( 'property_section' ) ) : ?>
        <?php while ( have_rows( 'property_section' ) ) :the_row(); ?>
            <div class="col-md-6 col-lg-6" id="tenantLogin">
                <div class="grid__column property_managment_item">
                    <div class="grid_item property-sec"
                        style="background-image:url(<?php echo esc_url( get_sub_field( 'bg_image' ) ); ?>);">
                        <div class="grid__content">
                            <p class="grid__subbheading"><?php echo get_sub_field( 'sub_heading' ); ?></p>
                            <h3 class="grid__heading"><?php echo get_sub_field( 'main_heading' ); ?></h3>
                            <p class="grid__text"><?php echo get_sub_field( 'heading' ); ?></p>   
                            <a href="<?= the_sub_field('button_url'); ?>">
                                <button class="grid__button"><?= the_sub_field('button_text'); ?><div class="cicled__btn">
                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                        </svg>
                                        <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16"
                                            xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                            <path
                                                d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </a>
                                

                        </div>
                    </div>
                </div>
            </div>
                <?php endwhile; ?>
        <?php endif; ?>

           <!--  <div class="col-md-6 col-lg-6  " id="ownerLogin">
                <div class="grid__column">
                    <div  class="grid_item property-sec"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/05/property-management-company.png);">
                        <div class="grid__content">
                            <p class="grid__subbheading">Collections</p>
                            <h3 class="grid__heading"> RENTAL PROPERTY MANAGEMENT</h3>
                            <p class="grid__text">The iconic garment </p>

                            <a href="https://theprattvillas.com/rental-property/">
                                <button class="grid__button">Read More <div class="cicled__btn">
                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                        </svg>
                                        <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16"
                                            xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                            <path
                                                d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center">
          
            <div class="col-md-6 col-lg-6 " id="tenantLogin">
                <div class="grid__column">
                    <div class="grid_item property-sec"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/05/trent.jpg);">
                        <div class="grid__content">
                            <p class="grid__subbheading">Collections</p>
                            <h3 class="grid__heading">TENANT HUB</h3>
                            <p class="grid__text">The iconic garment </p>   

                            <a href="https://theprattvillas.com/tenant-login/">
                                <button class="grid__button">Read More <div class="cicled__btn">
                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                        </svg>
                                        <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16"
                                            xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                            <path
                                                d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6  " id="ownerLogin">
                <div class="grid__column">
                    <div  class="grid_item property-sec"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/05/owner.jpg);">
                        <div class="grid__content">
                            <p class="grid__subbheading">Collections</p>
                            <h3 class="grid__heading">OWNER HUB</h3>
                            <p class="grid__text">The iconic garment </p>

                            <a href="https://theprattvillas.com/owner-login/">
                                <button class="grid__button">Read More <div class="cicled__btn">
                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                        </svg>
                                        <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16"
                                            xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                            <path
                                                d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div> -->

            <!--   <div class="col-md-6 col-lg-4  grid__item-active" id="cleanerLogin">
                <div class="grid__column">
                    <div class="grid_item property-sec"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/05/cleaner.webp">
                        <div class="grid__content">
                            <p class="grid__subbheading">Collections</p>
                            <h3 class="grid__heading">Cleaner Login</h3>
                            <p class="grid__text">The iconic garment </p>

                            <a href="#">
                                <button class="grid__button">Read More<div class="cicled__btn">
                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                        </svg>
                                        <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16"
                                            xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                            <path
                                                d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div> -->



        </div>
    </div>
</section>


<?php  get_footer(); ?>