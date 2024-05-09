<?php 

   /* Template Name: Tenant Login */ 

   

   get_header();

   ?>



<!-- Hero Section Start  -->

<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>TENANT HUB</h3>
            </div>
        </div>
    </div>
</section>



<!-- Newsletter Section End -->

<main-new class="make_header-light" style="position: relative;">





  



   <nav class="section-nav">



       <div class="back-btn" style="position: absolute;top: 0%;z-index: 9;left: 18px;">

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





      <span class="cross"><i class="fas fa-times"></i></span>

      <ol>

         <?php if ( have_rows( 'icons' ) ) : ?>

            <?php while ( have_rows( 'icons' ) ) :the_row(); ?>

            <?php

            $link = get_sub_field( 'icon_link' );

            if ( $link ) :

               $link_url = $link['url'];

               $link_title = $link['title'];

               $link_target = $link['target'] ? $link['target'] : '_self';

               ?>

               <?php if(($coutnser == 0) ){  ?>

         <li class="active"><a href="<?php echo esc_url( $link_url ); ?>">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> <?php echo esc_html( $link_title ); ?>

            </a></li>

            <?php }   

    else{ ?>



            <?php if(($coutnser1 == 2) ||($coutnser1 == 3) || ($coutnser1 == 4) || ($coutnser1 == 5)|| ($coutnser1 == 6) || ($coutnser1 == 7) ){  ?>

       <li class=""><a href="<?php echo esc_url( $link_url ); ?>">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> <?php echo esc_html( $link_title ); ?>

            </a></li>

             <?php }   

    else{ ?> <li class=""><a href="<?php echo esc_url( $link_url ); ?>" target="_blank">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> <?php echo esc_html( $link_title ); ?>

            </a></li>

             <?php  }

    $coutnser1++; ?>



             <?php  }

    $coutnser++; ?>

    <?php endif; ?>

            <?php endwhile; ?>

         <?php endif; ?>

<!--          <li><a href="rental-application"  target="_blank">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Rental Application

            </a></li>

         <li><a href="residential-rental-contract"  target="_blank">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Lease Agreement

            </a></li>

         <li><a href="#house-rules">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> House Rules

            </a></li>

         <li><a href="#maintenance-request">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Maintenance Request

            </a></li>

         <li><a href="#pay-now">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Pay Now

            </a></li>

         <li><a href="#payment-history">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Payment History

            </a></li>

         <li><a href="#onboarding">

               <div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Onboarding

            </a></li> -->

      </ol>

   </nav>



   <div class="con_sec_new">

      <span class="filter_portel">Filters <i class="fas fa-filter"></i></span>

      <section class="manin_tab_tenant_portal" id="tenant-resources">

         <h2><?php echo get_field( 'tenant_heading' ); ?></h2>

         

         <div class="tab_con_man">

 

            <ul>

               <?php if ( have_rows( 'pdf_link' ) ) : ?>

   <?php while ( have_rows( 'pdf_link' ) ) :the_row(); ?>

           <?php

            $link = get_sub_field( 'tenant_pdf_link' );

            if ( $link ) :

               $link_url = $link['url'];

               $link_title = $link['title'];

               $link_target = $link['target'] ? $link['target'] : '_self';

               ?>

               <li><a href="<?php echo esc_url( $link_url ); ?>"

                     target="_blank"><?php echo esc_html( $link_title ); ?> </a></li>

               <!-- <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li> -->

                  <?php endif; ?>

               <?php endwhile; ?>

            <?php endif; ?>

            </ul>

            

         </div>

            



      </section>

      <section class="manin_tab_tenant_portal" style="display: none;" id="rental-application">

         <h2>Rental Application</h2>

         <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               <div class="left_img_ne_pg">

                  <img src="https://theprattvillas.com/wp-content/uploads/2023/05/left1.webp"

                     alt="img">

               </div>

               <div class="tab_form_right">

                  <?php echo apply_shortcodes( '[gravityform id="1" title="true"]' ); ?>

               </div>

            </div>

         </div>

      </section>

      <section class="manin_tab_tenant_portal" style="display: none;" id="lease-agreement">

         <h2>Lease-agreement</h2>

         <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               <div class="tab_form_right">

                  <?php echo apply_shortcodes( '[gravityform id="2" title="true"]' ); ?>

               </div>

               <div class="left_img_ne_pg">

                  <img src="https://theprattvillas.com/wp-content/uploads/2023/05/le.jpg" alt="img">

               </div>

            </div>

         </div>

      </section>

      <section class="manin_tab_tenant_portal" id="house-rules">

         <h2><?php echo get_field( 'house_heading' ); ?></h2>

         <div class="tab_con_man real_estates__content">

            <ul>

               <?php if ( have_rows( 'house_pdf' ) ) : ?>

                  <?php while ( have_rows( 'house_pdf' ) ) :the_row(); ?>

                     <?php

                     $link = get_sub_field( 'house_pdf_link' );

                     if ( $link ) :

                        $link_url = $link['url'];

                        $link_title = $link['title'];

                        $link_target = $link['target'] ? $link['target'] : '_self';

                        ?>

               <li><a href="<?php echo esc_url( $link_url ); ?>"

                     target="_blank"><?php echo esc_html( $link_title ); ?></a></li>

                     <?php endif; ?>

                  <?php endwhile; ?>

               <?php endif; ?>

               <!-- <li><a href="https://theprattvillas.com/wp-content/uploads/2023/05/House-Rules-NEHALEM-New-03-27-2023.pdf"

                     target="_blank">House Rules - NEHALEM Pdf </a></li>

               <li><a href="https://theprattvillas.com/wp-content/uploads/2023/05/House-Rules-SUMMIT-New-03-27-2023.pdf"

                     target="_blank">House Rules - SUMMIT Pdf </a></li> -->

            </ul>

         </div>

      </section>

      <section class="manin_tab_tenant_portal" id="maintenance-request">

         <h2><?php echo get_field( 'maintenance_heading' ); ?></h2>

         <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               <div class="tab_form_right">

                  <?php echo apply_shortcodes( get_field( 'maintenance_form_code' ) ); ?>

               </div>

               <div class="left_img_ne_pg">

                  <img src="<?php echo esc_url( get_field( 'maintenance_image' ) ); ?>" alt="img">

               </div>

            </div>

         </div>

      </section>

      <section class="manin_tab_tenant_portal" id="pay-now" style="background-image: url(<?php echo esc_url( get_field( 'pay_image' ) ); ?>);padding: 0px;display: flow-root;margin-bottom: 30px;background-size: cover;background-repeat: no-repeat;background-position: center;">

         <div class="bg_pay">

            <h2 style="color: white;"><?php echo get_field( 'pay_heading' ); ?></h2>

            <div class="tab_con_man real_estates__content">

               <div class="tab_con_man">

                  <ul>

                     <?php

                        $link = get_field( 'pay_link' );

                        if ( $link ) :

                           $link_url = $link['url'];

                           $link_title = $link['title'];

                           $link_target = $link['target'] ? $link['target'] : '_self';

                           ?>

                     <li><a href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></li>

                     <?php endif; ?>

                  </ul>

               </div>

            </div>

         </div>

      </section>

      <section class="manin_tab_tenant_portal" id="payment-history">

         <h2><?php echo get_field( 'payment_heading' ); ?></h2>

         <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               <div class="left_img_ne_pg">

                  <img src="<?php echo esc_url( get_field( 'payment_history_image' ) ); ?>" alt="img">

               </div>

               <div class="tab_form_right">

                  <?php echo apply_shortcodes( get_field( 'payment_history_form_code' ) ); ?>

               </div>

            </div>

         </div>

      </section>

      <section class="manin_tab_tenant_portal" id="onboarding">

         <h2><?php echo get_field( 'onboarding_heading' ); ?></h2>

         <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               <div class="tab_form_right">

                  <?php echo apply_shortcodes( get_field( 'onboarding_form_code' ) ); ?>

               </div>

               <div class="left_img_ne_pg">

                  <img src="<?php echo esc_url( get_field( 'onboarding_image' ) ); ?>" alt="img">

               </div>

            </div>

         </div>

      </section>



      

   </div>



</main-new>

<?php  get_footer(); ?>