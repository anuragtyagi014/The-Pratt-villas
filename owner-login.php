<?php 

/* Template Name: Owner Login */ 



get_header();

?>



<style>

   .new_frm_for_wid .tab_form_right {

    width: 100%;

}



@media(max-width: 991px){

   .new_frm_for_wid .tab_form_right {

    margin-bottom: 30px;

}



}

</style>



<!-- Hero Section Start  -->

<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>OWNER HUB</h3>
            </div>
        </div>
    </div>
</section>


<!-- Newsletter Section End -->





<main-new class="make_header-light">

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

         <li class="active"><a href="<?php echo esc_url( $link_url ); ?>"><div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

                  </div><?php echo esc_html( $link_title ); ?></a></li>

                  <?php }   

    else{ ?>

                     <li class=""><a href="<?php echo esc_url( $link_url ); ?>"><div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

                  </div><?php echo esc_html( $link_title ); ?></a></li>



                     <?php  }

                  $coutnser++; ?>

                  <?php endif; ?>



         <?php endwhile; ?>

   <?php endif; ?>

         <!-- <li><a href="#tenantmanagement"><div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Tenant Management</a></li>

         <li><a href="#pay-now"><div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Pay Now</a></li>

         <li><a href="#securitydeposit"><div class="cicled__btn">

                  <svg viewBox="0 0 24 24" class="circled__btn-outer">

                     <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>

                  </svg>

                  <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="6" height="12"

                     xmlns="http://www.w3.org/2000/svg" style="height: 12px; width: 6px;">

                     <path

                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">

                     </path>

                  </svg>

               </div> Security Deposit</a></li> -->

         

      </ol>

   </nav>



   <div class="con_sec_new">

      <span class="filter_portel">Filters <i class="fas fa-filter"></i></span>



      <section class="manin_tab_tenant_portal" id="ownerresources" style="display: none;">

         <h2>Owner Resources</h2>

            

           <!--  <ul>

               <li><a href="https://theprattvillas.com/wp-content/uploads/2023/05/dummy.pdf" target="_blank">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

               <li><a href="#">Document Pdf </a></li>

            </ul> -->



             <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               

               <div class="left_img_ne_pg new_frm_for_wid">

                  <div class="tab_form_right">

                     <?php echo apply_shortcodes( '[gravityform id="14" title="true"]' ); ?>

                  </div>

               </div>



                <div class="tab_form_right">

                  <?php echo apply_shortcodes( '[gravityform id="15" title="true"]' ); ?>

               </div>



            </div>

         </div>





      </section>



      <section class="manin_tab_tenant_portal" id="tenantmanagement">

         <h2><?php echo get_field( 'tenant_management_heading' ); ?></h2>

         <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               <div class="left_img_ne_pg">

                  <img src="<?php echo esc_url( get_field( 'tenant_management_image' ) ); ?>" alt="img">

               </div>

               <div class="tab_form_right">

                  <?php echo apply_shortcodes(get_field( 'tenant_management_form_code' )); ?>

               </div>

            </div>

         </div>

      </section>





       <section class="manin_tab_tenant_portal" id="pay-now">

         <h2><?php echo get_field( 'pay_now_heading' ); ?></h2>

         <div class="tab_con_man real_estates__content">

            <div class="tab_con_man">

               <ul>

                  <?php

                  $link = get_field( 'pay_now_link' );

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

      </section>





      <section class="manin_tab_tenant_portal" id="securitydeposit">

         <h2><?php echo get_field( 'security_deposit_heading' ); ?></h2>

         <div class="tab_con_man real_estates__content ">

            <div class="tow-sec">

               <div class="tab_form_right">

                  <?php echo apply_shortcodes(get_field( 'security_deposit_form_code' )); ?>

               </div>

               <div class="left_img_ne_pg">

                  <img src="<?php echo esc_url( get_field( 'security_deposit_image' ) ); ?>" alt="img">

               </div>

            </div>

         </div>

      </section>

     

     

     

    

   </div>



</main-new>







<?php  get_footer(); ?>