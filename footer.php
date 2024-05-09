<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<div class="top_back_btn">
    <div class="container">
        <button onclick="scrollToTop()" class="grid__button top_back" style="translate: none;rotate: none;scale: none;transform: translate(0px, 0px);opacity: 1;position: fixed;bottom: 16px;right: 22px;transform: rotate(270deg);">
            <div style="    background: black;" class="cicled__btn">
                <svg viewBox="0 0 24 24" class="circled__btn-outer">
                    <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                    <defs>
                        <filter id="a">
                            <feColorMatrix in="SourceGraphic" values="0 0 0 0 0.000000 0 0 0 0 0.000000 0 0 0 0 0.000000 0 0 0 1.000000 0" />
                        </filter>
                    </defs>
                    <g transform="translate(-460 -6815)" filter="url(#a)" fill="none" fill-rule="evenodd">
                        <path d="M460 6823l6.547-7.373.002.003A1.99 1.99 0 01468 6815a1.99 1.99 0 011.451.63l.002-.003L476 6823l-7.002-3.501-.498 10.779c0 .398-.224.722-.5.722s-.5-.324-.5-.722l-.498-10.779L460 6823z" fill="#303030" />
                    </g>
                </svg>
            </div>

            <!--  <div class="hed_back">
           
            <h3> Back To Top</h3>
        </div> -->
        </button>
    </div>
</div>



<div class="top-to-bottom_btn">
    <div class="container">
        <button class="grid__button top_back_btn" style="translate: none;rotate: none;scale: none;transform: translate(0px, 0px);opacity: 1;position: fixed;bottom: 16px;right: 22px;transform: rotate(270deg);">
            <div style="    background: black;" class="cicled__btn">
                <svg viewBox="0 0 24 24" class="circled__btn-outer">
                    <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                    <defs>
                        <filter id="a">
                            <feColorMatrix in="SourceGraphic" values="0 0 0 0 0.000000 0 0 0 0 0.000000 0 0 0 0 0.000000 0 0 0 1.000000 0"></feColorMatrix>
                        </filter>
                    </defs>
                    <g transform="translate(-460 -6815)" filter="url(#a)" fill="none" fill-rule="evenodd">
                        <path d="M460 6823l6.547-7.373.002.003A1.99 1.99 0 01468 6815a1.99 1.99 0 011.451.63l.002-.003L476 6823l-7.002-3.501-.498 10.779c0 .398-.224.722-.5.722s-.5-.324-.5-.722l-.498-10.779L460 6823z" fill="#303030"></path>
                    </g>
                </svg>
            </div>
        </button>
    </div>
</div>


<footer class="footer">
    <div class="container-fluid">
        <?php if (have_rows('social_media', 'option')) : ?>
            <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                <?php if (get_row_layout() == 'all_contents') : ?>
                    <ul class="footer__social-list">

                        <li class="footer__social-link">
                            <a href="https://wa.me/<?php echo get_sub_field('footer_whatsapp_number', 'option'); ?>" target="_blank" class="d-flex align-items-center"> <i class="fab fa-whatsapp"></i> Whatsapp</a>
                        </li>

                        <li class="footer__social-link">
                            <a href="<?php echo get_sub_field('youtube_link', 'option'); ?>" target="_blank" class="d-flex align-items-center"> <i class="fab fa-youtube"></i> Youtube</a>
                        </li>

                        <li class="footer__social-link footer__social-link-has-sublinks">
                            <a href="javascript:void(0);" class="d-flex align-items-center">
                                <i class="fab fa-facebook-square"></i>
                                Facebook
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.063 8.938L.5 8.5a.5.5 0 0 1 0-1l6.563-.438L7.5.5a.5.5 0 0 1 1 0l.438 6.563L15.5 7.5a.5.5 0 0 1 0 1l-6.563.438L8.5 15.5a.5.5 0 0 1-1 0l-.438-6.563z"></path>
                                </svg>
                            </a>


                            <ul>
                                <?php

                                if (have_rows('facebook')) :
                                    while (have_rows('facebook')) : the_row();
                                ?>
                                        <li><a href="<?= the_sub_field('facebook_link'); ?>"><?= the_sub_field('facebook_text'); ?></a></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- <li> <a href="https://www.facebook.com/groups/theprattvillas">Group - The pratvillas</a></li>
                        <li><a href="https://www.facebook.com/groups/theprattvillas.comingsoonrealestate">Group - Coming soon real state</a></li>
                        <li><a href="https://www.facebook.com/groups/theprattvillas.furnishedfinderinraleigh">Furnished finder in raleigh</a></li>
                        <li><a href="https://www.facebook.com/groups/theprattvillas.luxuryrentalsinraleigh">Luxury rentals in raleigh</a></li> -->
                            </ul>
                        </li>

                        <li class="footer__social-link">
                            <a href="<?= the_sub_field('instagram_link', 'option'); ?>" target="_blank" class="d-flex align-items-center"> <i class="fab fa-instagram"></i> <?= the_sub_field('instagram_text', 'option'); ?></a>
                        </li>
                        <li class="footer__social-link">
                            <a href="<?= the_sub_field('twitter_link', 'option'); ?>" target="_blank" class="d-flex align-items-center"><i class="fab fa-twitter"></i> <?= the_sub_field('twitter_text', 'option'); ?></a>
                        </li>
                        <li class="footer__social-link">
                            <a href="mailto:<?= the_sub_field('email', 'option'); ?>" target="_blank" class="d-flex align-items-center"><i class="fas fa-envelope"></i> <?= the_sub_field('email', 'option'); ?></a>
                        </li>

                        <li class="footer__social-link">
                            <a href="tel:<?= the_sub_field('mobile_number', 'option'); ?>" target="_blank" class="d-flex align-items-center"><i class="fas fa-phone-alt"></i><?= the_sub_field('mobile_number', 'option'); ?></a>
                        </li>
                    </ul>
        <?php endif;
            endwhile;
        endif; ?>
        <!-- <div class="footer__copyright-content">
                <p>Ferrari N.V. - Holding company - A company under Dutch law, having its official seat in Amsterdam, the Netherlands and its corporate address at Via Abetone Inferiore No. 4, I-41053 Maranello (MO), Italy, registered with the Dutch trade register under number 64060977</p>

                <p>Ferrari S.p.A. - A company under Italian law, having its registered office at Via Emilia Est No. 1163, Modena, Italy, Companies’ Register of Modena, VAT and Tax number 00159560366 and share capital of Euro 20,260,000</p>

                <p>Copyright 2023 - All rights reserved</p>
            </div> -->
    </div>
    <div class="container service_box">

        <div class="row footer__socials pb-5 pt-5">

            <style type="text/css">
                .row.footer__socials ul li a {
                    color: white;
                    padding-top: 5px;
                    padding-bottom: 10px;
                    display: block;
                    font-size: 11px;
                    text-transform: uppercase;
                }

                .row.footer__socials ul {
                    padding-bottom: 30px;
                }

                .footer__socials h2 {
                    color: white;
                    font-size: 12px;
                    padding-bottom: 10px;
                   /* margin-bottom: 15px;
                    height: 45px;*/
                    border-bottom: 1px solid #928a8a;
                    line-height: revert;
                    width: fit-content;
                    text-transform: uppercase;
                }

                .row.footer__socials {
                    flex-direction: row;
                    text-align: left;
                }

                .hide {
                    display: none;
                }

                .read-more-show {
                    color: white !important;
                    /*    display: flex;*/
                    align-items: center;
                    background: #7f7f7f;
                    width: fit-content;
                    justify-content: center;
                    padding: 5px 5px 5px 7px;
                    font-size: 10px;
                }

                .read-more-hide {
                    color: white !important;
                    /*    display: flex;*/
                    align-items: center;
                    background: #7f7f7f;
                    width: fit-content;
                    justify-content: center;
                    padding: 5px 5px 5px 7px;
                }

                .read-more-show svg {
                    fill: #fff;
                    transform: rotateZ(0);
                    transition: 350ms;
                    margin-left: 7px;
                    transform: translate(0px, -2px);
                }

                .read-more-hide svg {
                    transform: rotateZ(45deg) !important;
                    transition: 350ms;
                    fill: white;
                    margin-left: 7px;
                    transform: translate(0px, -2px);
                    margin-top: -2px;
                }

                @media (max-width:768px) {
                    .service_box {
                        max-width: 100%;
                    }
                }
            </style>


            <div class="col-md-2 col-sm-6">
                <?php if (have_rows('corporate_rentals_section', 'option')) :
                    while (have_rows('corporate_rentals_section', 'option')) : the_row();
                        if (get_row_layout() == 'add_row') : ?>
                            <h2>CORPORATE <br> RENTALS</h2>
                            <ul>
                                <?php foreach (get_sub_field('retail_list', 'option') as $retail_list) : ?>
                                    <li><a href="<?php echo $retail_list['link']['url']; ?>"><?php echo $retail_list['link']['title']; ?></a></li>
                                <?php endforeach; ?>
                                <!-- 
                                <li><a href="https://theprattvillas.com/product/nehalem/">NEHALEM</a></li>
                                <li><a href="https://theprattvillas.com/product/fugaku/">FUGAKU</a></li>
                                <li><a href="https://theprattvillas.com/product/sierra/">SIERRA</a></li>
                                <li><a href="https://theprattvillas.com/product/summit/">SUMMIT</a></li> 
                            -->
                            </ul>
                <?php endif;
                    endwhile;
                endif; ?>
            </div>


                        <div class="col-md-2 col-sm-6">
                <?php if (have_rows('luxury_rental_section', 'option')) :
                    while (have_rows('luxury_rental_section', 'option')) : the_row();
                        if (get_row_layout() == 'add_row') : ?>

                            <h2>LUXURY <br>RENTAL</h2>
                            <ul class="col-align">
                                <?php $countlast = 1;
                                foreach (get_sub_field('luxury_rental_list', 'option') as $luxury_rental_list) : ?>
                                    <?php if ($countlast <= 3) : ?>
                                        <li><a href="<?php echo $luxury_rental_list['link']['url']; ?>"><?php echo $luxury_rental_list['link']['title']; ?></a></li>
                                    <?php endif; ?>
                                <?php $countlast++;
                                endforeach; ?>

                                <!--<li><a href="https://theprattvillas.com/product/pointe/">POINTE</a></li>
                            <li><a href="https://theprattvillas.com/product/creek/">CREEK</a></li>
                            <li><a href="https://theprattvillas.com/product/friendship/">FRIENDSHIP</a></li>
                            <li><a href="https://theprattvillas.com/product/twins/">TWINS</a></li>
                            <li><a href="https://theprattvillas.com/product/savaan/">SAVAAN</a></li>
                            <li><a href="https://theprattvillas.com/product/wylie/">WYLIE</a></li>
                            <li><a href="https://theprattvillas.com/product/santeetlah/">SANTEETLAH</a></li> -->

                                <a class="read-more-show hide" href="#" id="1">MORE

                                    <svg width="13" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.063 8.938L.5 8.5a.5.5 0 0 1 0-1l6.563-.438L7.5.5a.5.5 0 0 1 1 0l.438 6.563L15.5 7.5a.5.5 0 0 1 0 1l-6.563.438L8.5 15.5a.5.5 0 0 1-1 0l-.438-6.563z"></path>
                                    </svg>
                                </a>
                                <span class="read-more-content">
                                    <?php $countlasts = 1;
                                    foreach (get_sub_field('luxury_rental_list', 'option') as $luxury_rental_list) : ?>
                                        <?php if ($countlasts >= 4) : ?>
                                            <li><a href="<?php echo $luxury_rental_list['link']['url']; ?>"><?php echo $luxury_rental_list['link']['title']; ?></a></li>
                                        <?php endif; ?>
                                    <?php $countlasts++;
                                    endforeach; ?>

                                    <!-- <li><a href="https://theprattvillas.com/product/franklin/">FRANKLIN</a></li>
                            <li><a href="https://theprattvillas.com/product/jordan/">JORDAN</a></li>
                            <li><a href="https://theprattvillas.com/product/norman/">NORMAN</a></li>
                            <li><a href="https://theprattvillas.com/product/niagara/">NIAGARA</a></li>
                            <li><a href="https://theprattvillas.com/product/silicon/">SILICON</a></li>
                            <li><a href="https://theprattvillas.com/product/pentium/">PENTIUM</a></li>
                            <li><a href="https://theprattvillas.com/product/celeron/">CELERON</a></li> -->

                                    <a class="read-more-hide hide" href="#" more-id="1">LESS

                                        <svg width="13" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.063 8.938L.5 8.5a.5.5 0 0 1 0-1l6.563-.438L7.5.5a.5.5 0 0 1 1 0l.438 6.563L15.5 7.5a.5.5 0 0 1 0 1l-6.563.438L8.5 15.5a.5.5 0 0 1-1 0l-.438-6.563z"></path>
                                        </svg>
                                    </a>
                                </span>
                            </ul>
                <?php endif;
                    endwhile;
                endif; ?>
            </div>


             <div class="col-md-2 col-sm-6">
                <?php if (have_rows('property_managment_section', 'option')) :
                    while (have_rows('property_managment_section', 'option')) : the_row();
                        if (get_row_layout() == 'add_row') : ?>
                            <h2>PROPERTY <br>MANAGMENT</h2>
                            <ul>
                                <?php foreach (get_sub_field('property_managment_list', 'option') as $property_managment_list) : ?>
                                    <li><a href="<?php echo $property_managment_list['link']['url']; ?>"><?php echo $property_managment_list['link']['title']; ?></a></li>
                                <?php endforeach; ?>

                                <!-- <li><a href="https://theprattvillas.com/furnished/">FURNISHED STR PROPERTY MANAGEMENT</a></li>
                            <li><a href="https://theprattvillas.com/rental-property/">RENTAL PROPERTY MANAGEMENT</a></li>
                            <li><a href="https://theprattvillas.com/tenant-login/">TENANT HUB</a></li>
                            <li><a href="https://theprattvillas.com/owner-login/">OWNER HUB</a></li> -->
                            </ul>
                <?php endif;
                    endwhile;
                endif; ?>
            </div>

            <div class="col-md-2 col-sm-6">
                <?php if (have_rows('real_estates_section', 'option')) :
                    while (have_rows('real_estates_section', 'option')) : the_row();
                        if (get_row_layout() == 'add_row') : ?>
                            <h2>REAL <br>ESTATES</h2>
                            <ul>
                                <?php foreach (get_sub_field('real_estates_list', 'option') as $real_estates_list) : ?>
                                    <li><a href="<?php echo $real_estates_list['link']['url']; ?>"><?php echo $real_estates_list['link']['title']; ?></a></li>
                                <?php endforeach; ?>
                                <!-- <li><a href="https://theprattvillas.com/buyers-new/">Buyers</a></li>
                            <li><a href="https://theprattvillas.com/sellers/">Sellers</a></li>
                            <li><a href="https://theprattvillas.com/real-estates/">Renters</a></li>
                            <li><a href="https://theprattvillas.com/real-estates/">Visitors</a></li> -->
                            </ul>
                <?php endif;
                    endwhile;
                endif; ?>
            </div>



               <div class="col-md-2 col-sm-6">
                <?php if (have_rows('relocation_consulting_section', 'option')) :
                    while (have_rows('relocation_consulting_section', 'option')) : the_row();
                        if (get_row_layout() == 'add_row') : ?>
                            <h2>RELOCATION <br>CONSULTING</h2>
                            <ul>
                                <?php foreach (get_sub_field('relocation_consulting_list', 'option') as $relocation_consulting_list) : ?>
                                    <li><a href="<?php echo $relocation_consulting_list['link']['url']; ?>"><?php echo $relocation_consulting_list['link']['title']; ?></a></li>
                                <?php endforeach; ?>

                                <!-- <li><a href="relocation-consulting">Global & Domestic Relocation</a></li>
                            <li><a href="relocation-consulting">Transportation Assistance</a></li>
                            <li><a href="relocation-consulting">Corporate Professional Accommodation</a></li>
                            <li><a href="relocation-consulting">Temporary Accommodation</a></li> -->
                            </ul>
                <?php endif;
                    endwhile;
                endif; ?>
            </div>




           

            <div class="col-md-2 col-sm-6">
                <?php if (have_rows('design_consulting_section', 'option')) :
                    while (have_rows('design_consulting_section', 'option')) : the_row();
                        if (get_row_layout() == 'add_row') : ?>
                            <h2>DESIGN <br>CONSULTING</h2>
                            <ul>
                                <?php $designcount = 1; foreach (get_sub_field('design_consulting_list', 'option') as $design_consulting_list) : ?>
                                    <?php if($designcount <= 3): ?><li><a href="<?php echo $design_consulting_list['link']['url']; ?>"><?php echo $design_consulting_list['link']['title']; ?></a></li>
                                    <?php endif; ?>
                                <?php $designcount++; endforeach; ?>


                                  <a class="read-more-show hide" href="#" id="2">MORE

                                    <svg width="13" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.063 8.938L.5 8.5a.5.5 0 0 1 0-1l6.563-.438L7.5.5a.5.5 0 0 1 1 0l.438 6.563L15.5 7.5a.5.5 0 0 1 0 1l-6.563.438L8.5 15.5a.5.5 0 0 1-1 0l-.438-6.563z"></path>
                                    </svg>
                                </a>
                                <span class="read-more-content">
                                    <?php $designcounts = 1;
                                    foreach (get_sub_field('design_consulting_list', 'option') as $design_consulting_list) : ?>
                                        <?php if ($designcounts >= 4) : ?>
                                            <li><a href="<?php echo $design_consulting_list['link']['url']; ?>"><?php echo $design_consulting_list['link']['title']; ?></a></li>
                                        <?php endif; ?>
                                    <?php $designcounts++;
                                    endforeach; ?>

                            
                                    <a class="read-more-hide hide" href="#" more-id="2">LESS

                                        <svg width="13" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.063 8.938L.5 8.5a.5.5 0 0 1 0-1l6.563-.438L7.5.5a.5.5 0 0 1 1 0l.438 6.563L15.5 7.5a.5.5 0 0 1 0 1l-6.563.438L8.5 15.5a.5.5 0 0 1-1 0l-.438-6.563z"></path>
                                        </svg>
                                    </a>
                                </span>
                                <!-- <li><a href="design-consulting">Interiors</a></li>
                            <li><a href="design-consulting">Windows</a></li>
                            <li><a href="design-consulting">Renovation</a></li>
                            <li><a href="design-consulting">Staging</a></li>
                            <li><a href="design-consulting">Website Design</a></li> -->
                            </ul>
                <?php endif;
                    endwhile;
                endif; ?>
            </div>



        <div class="col-md-2 col-sm-6">
              
                            <h2>Quick <br>Links</h2>
                            <ul class="col-align">
                            <li><a href="#">TENANTS HUB</a></li>
                            <li><a href="#">OWNERS HUB</a></li>
                            <li><a href="#">GLOBAL RELOC</a></li>
                            <a class="read-more-show" href="#" id="3">MORE

                                    <svg width="13" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.063 8.938L.5 8.5a.5.5 0 0 1 0-1l6.563-.438L7.5.5a.5.5 0 0 1 1 0l.438 6.563L15.5 7.5a.5.5 0 0 1 0 1l-6.563.438L8.5 15.5a.5.5 0 0 1-1 0l-.438-6.563z"></path>
                                    </svg>
                                </a>
                                <span class="read-more-content">
                                    
                                <li><a href="#">TRANSPORTATION</a></li>
                                <li><a href="#">RENTAL APP</a></li>
                                <li><a href="#">LEASE AGRMT</a></li>
                                 <li><a href="#">MAINTENANCE</a></li>
                            
                                    <a class="read-more-hide" href="#" more-id="3">LESS

                                        <svg width="13" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.063 8.938L.5 8.5a.5.5 0 0 1 0-1l6.563-.438L7.5.5a.5.5 0 0 1 1 0l.438 6.563L15.5 7.5a.5.5 0 0 1 0 1l-6.563.438L8.5 15.5a.5.5 0 0 1-1 0l-.438-6.563z"></path>
                                        </svg>
                                    </a>
                                </span>
                            
                            </ul>
            </div>






        </div>

    </div>

    <div class="container-fluid">

        <div class="footer__bottom">
            <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class' => 'footer_links')); ?>

            <!--    <ul class="footer_links">
                    <li><a href="javascript:void(0);">Legal</a></li>
                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                    <li><a href="javascript:void(0);">Cookie Policy</a></li>
                    <li><a href="about-us">About Us</a></li>
                    <li><a href="javascript:void(0);">Contacts</a></li>
                    <li><a href="javascript:void(0);">Media Centre</a></li>
                    <li><a href="javascript:void(0);">Career</a></li>
                    <li><a href="javascript:void(0);">Corporate ENG</a></li>
                    <li><a href="javascript:void(0);">Corporate ITA</a></li>
                    <li><a href="javascript:void(0);">Responsible Disclosure</a></li>
                </ul> -->
        </div>
        <div class="copyright__bottom">
            <p><?= the_field('copyright_text', 'option'); ?></p>
        </div>
    </div>
</footer>


<?php get_template_part('template-parts/footer/footer-widgets'); ?>



</div><!-- #page -->



<!-- Newsletter Popup Start -->

<div class="newsletter-popup__overlay">
    <div class="newsletter-popup__wrapper">
        <button class="newsletter__close-btn">
            <svg viewBox="0 0 12 12" class="icon" style="height: 12px; width: 12px;">
                <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z"></path>
            </svg>
        </button>

        <div class="newsletter__form">
            <?php echo do_shortcode('[contact-form-7 id="70" title="Newsletter"]') ?>

        </div>
    </div>
</div>

<!-- Newsletter Popup End -->


<!-- Header Pupup Navigation Start  -->

<header class="header__popup-navigation-wrapper default">
    <div class="header__popup-row">
        <div class="header__popup-left-column">
            <div class="header__popup-topbar">
                <a href="<?php echo get_site_url(); ?>" class="header__logo">
                    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/Logo-1-1.png" alt="">
                </a>
            </div>

            <button class="header__popup-close-btn">
                <div class="cicled__btn">
                    <svg viewBox="0 0 24 24" class="circled__btn-outer">
                        <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                    </svg>
                    <svg viewBox="0 0 12 12" class="icon" style="height: 12px; width: 12px;">
                        <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z"></path>
                    </svg>
                </div>
            </button>

            <h4 class="header__popup-menu-name">Universe</h4>

            <ul class="header__popup-navigation">
                <li class="header__popup-navigation-link"><a href="javascript:void(0)">News</a>
                    <div class="header__popup-navigation-link-preview">
                        <div class="header__popup-navigation-link-preview-bg-image">
                            <img src="https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                        </div>
                    </div>
                </li>

                <li class="header__popup-navigation-link"><a href="javascript:void(0)">History</a>
                    <div class="header__popup-navigation-link-preview">
                        <div class="header__popup-navigation-link-preview-bg-image">
                            <img src="https://theprattvillas.com/wp-content/uploads/2023/02/5ca628775d32fb0b9e2ac5fb-mito-gtw.jpg" alt="">
                        </div>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-sublink">
                    <div class="d-flex align-items-center justify-content-between">
                        <span>The Official Ferrari Magazine</span>
                        <svg width="8" height="16" viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </div>
                    <div class="header__popup-navigation-link-preview">
                        <div class="header__popup-navigation-link-preview-bg-image">
                            <img src="https://theprattvillas.com/wp-content/uploads/2023/02/63d6ea4318573e0127a88b23-2023-ferrari-24h-daytona-race-report-gtw2.jpg" alt="">
                        </div>
                        <ul class="header__popup-navigation-sublinks">
                            <li><a href="javascript:void(0)">Home</a></li>

                            <li class="header__popup-navigation-has-list">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span> Ferrari Maranello Museum </span>
                                    <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;">
                                        <path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path>
                                    </svg>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Welcome</a></li>
                                    <li><a href="javascript:void(0);">Exhibitions</a></li>
                                    <li><a href="javascript:void(0);">The Museum</a></li>
                                    <li><a href="javascript:void(0);">Experiences</a></li>
                                </ul>
                            </li>

                            <li class="header__popup-navigation-has-list">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span> Enzo Ferrari Modena Museum </span>
                                    <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;">
                                        <path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path>
                                    </svg>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Welcome</a></li>
                                    <li><a href="javascript:void(0);">Exhibitions</a></li>
                                    <li><a href="javascript:void(0);">The Museum</a></li>
                                    <li><a href="javascript:void(0);">Experiences</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-sublink">
                    <div class="d-flex align-items-center justify-content-between">
                        <span>Ristorante Cavallino</span>
                        <svg width="8" height="16" viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </div>
                    <div class="header__popup-navigation-link-preview">
                        <div class="header__popup-navigation-link-preview-bg-image">
                            <img src="https://theprattvillas.com/wp-content/uploads/2023/02/63d6ea4318573e0127a88b23-2023-ferrari-24h-daytona-race-report-gtw2.jpg" alt="">
                        </div>

                        <ul class="header__popup-navigation-sublinks">
                            <li><a href="javascript:void(0)">Home</a></li>

                            <li class="header__popup-navigation-has-list">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span> Ferrari Maranello Museum </span>
                                    <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;">
                                        <path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path>
                                    </svg>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Welcome</a></li>
                                    <li><a href="javascript:void(0);">Exhibitions</a></li>
                                    <li><a href="javascript:void(0);">The Museum</a></li>
                                    <li><a href="javascript:void(0);">Experiences</a></li>
                                </ul>
                            </li>

                            <li class="header__popup-navigation-has-list">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span> Enzo Ferrari Modena Museum </span>
                                    <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;">
                                        <path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path>
                                    </svg>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Welcome</a></li>
                                    <li><a href="javascript:void(0);">Exhibitions</a></li>
                                    <li><a href="javascript:void(0);">The Museum</a></li>
                                    <li><a href="javascript:void(0);">Experiences</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="javascript:void(0)">Ferrari Purosangue</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578546.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">
                                <img src="https://theprattvillas.com/wp-content/uploads/2023/02/6319e2f974b2846f6b4ab57c-ferrari-purosangue-logo-site-launch.png" alt="">
                                <p>Unlike any other</p>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="javascript:void(0)">Ferrari 812 GTS</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578546.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">
                                <img src="https://theprattvillas.com/wp-content/uploads/2023/02/5d6fb38d71ec043826a39e6e-ferrari-812-gts-logo-2.png" alt="">

                                <p>The v12 spider returns</p>
                            </div>

                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-sublink">
                    <div class="d-flex align-items-center justify-content-between">
                        <span>MyFerrari</span>
                        <svg width="8" height="16" viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </div>
                    <div class="header__popup-navigation-link-preview">
                        <div class="header__popup-navigation-link-preview-bg-image">
                            <img src="https://theprattvillas.com/wp-content/uploads/2023/02/63d6ea4318573e0127a88b23-2023-ferrari-24h-daytona-race-report-gtw2.jpg" alt="">
                        </div>
                        <ul class="header__popup-navigation-sublinks">
                            <li><a href="javascript:void(0)">Home</a></li>

                            <li class="header__popup-navigation-has-list">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span> Ferrari Maranello Museum </span>
                                    <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;">
                                        <path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path>
                                    </svg>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Welcome</a></li>
                                    <li><a href="javascript:void(0);">Exhibitions</a></li>
                                    <li><a href="javascript:void(0);">The Museum</a></li>
                                    <li><a href="javascript:void(0);">Experiences</a></li>
                                </ul>
                            </li>

                            <li class="header__popup-navigation-has-list">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span> Enzo Ferrari Modena Museum </span>
                                    <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;">
                                        <path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path>
                                    </svg>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0);">Welcome</a></li>
                                    <li><a href="javascript:void(0);">Exhibitions</a></li>
                                    <li><a href="javascript:void(0);">The Museum</a></li>
                                    <li><a href="javascript:void(0);">Experiences</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </li>

            </ul>
        </div>

        <div class="header__popup-right-column">
            <!-- <div class="header__popup-navigation-link-preview">
                            <div class="header__popup-navigation-link-preview-bg-image">
                                <img src="https://theprattvillas.com/wp-content/uploads/2023/02/63d6ea4318573e0127a88b23-2023-ferrari-24h-daytona-race-report-gtw2.jpg" alt="">
                            </div>
                            <ul class="header__popup-navigation-sublinks">
                                <li><a href="javascript:void(0)">Home</a></li>
                    
                                <li class="header__popup-navigation-has-list"> 
                                    <div class="d-flex align-items-center justify-content-between">
                                            <span> Ferrari Maranello Museum </span>
                                            <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;"><path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path></svg>
                                    </div> 
                                    <ul>
                                        <li><a href="javascript:void(0);">Welcome</a></li>
                                        <li><a href="javascript:void(0);">Exhibitions</a></li>
                                        <li><a href="javascript:void(0);">The Museum</a></li>
                                        <li><a href="javascript:void(0);">Experiences</a></li>
                                    </ul>
                                </li>

                                <li class="header__popup-navigation-has-list"> 
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span> Enzo Ferrari Modena Museum </span>
                                        <svg viewBox="0 0 16 8" class="icon" width="16" height="8" xmlns="http://www.w3.org/2000/svg" style="height: 8px; width: 16px;"><path d="M9.547 7.268L16 0 8 4 0 0l6.453 7.268A1.996 1.996 0 0 0 8 8c.623 0 1.18-.285 1.547-.732z"></path></svg>
                                    </div> 
                                    <ul>
                                        <li><a href="javascript:void(0);">Welcome</a></li>
                                        <li><a href="javascript:void(0);">Exhibitions</a></li>
                                        <li><a href="javascript:void(0);">The Museum</a></li>
                                        <li><a href="javascript:void(0);">Experiences</a></li>
                                    </ul>
                                </li>


                            </ul>
                    </div> -->
        </div>
    </div>
</header>

<header class="header__popup-navigation-wrapper design-consulting">
    <div class="header__popup-row">
        <div class="header__popup-left-column">
            <div class="header__popup-topbar">
                <a href="<?php echo get_site_url(); ?>" class="header__logo">
                    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/Logo-1-1.png" alt="">
                </a>
            </div>

            <button class="header__popup-close-btn">
                <div class="cicled__btn">
                    <svg viewBox="0 0 24 24" class="circled__btn-outer">
                        <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                    </svg>
                    <svg viewBox="0 0 12 12" class="icon" style="height: 12px; width: 12px;">
                        <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z"></path>
                    </svg>
                </div>
            </button>

            <h4 class="header__popup-menu-name">DESIGN CONSULTING</h4>

            <ul class="header__popup-navigation">
                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="javascript:void(0)">News</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578540.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">
                                <p>TPV is a team of Designers and partners with other local designers to provide a great designing capabilities from Interiors to material selection during the build process, from leading projects of renovation to adding new space/area into existing homes.</p>
                                <P> TPV also specializes and partners with designers to assist in the Staging of homes for Sales/Rental in the area, Interior Designing, Windows Designing and small Renovation Projects.
                                </P>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="javascript:void(0)">Interiors</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578540.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">

                                <p>TPV provides consultancy for Interior Designing from creating modern living spaces to giving a very soothing ambience for a Bedroom, Living and other spaces inside your home. Consulting for furnishings is another area of excellence in the Interior Designing world</p>
                                <p>
                                    TPV consults with several Investors, Home Owners for their project on Furnishing the space for Short Term Rentals for a given budget in the Triangle area.
                                </p>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video">

                    <a href="javascript:void(0);"> Windows</a>

                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578540.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">

                                <p>TPV specializes in the Widow designing, varying from the window custom drapery design to cornices and Electronic Windows.</p>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video">
                    <a href="javascript:void(0);">
                        Renovation
                    </a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578540.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">

                                <p>TPV collaborates with partners for renovation projects and boasts on delivering the project on budget and on time for anything from space addition to renovating an existing space.</p>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="javascript:void(0)">Staging</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578540.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">

                                <p>TPV team of designers and partners provide assistance on Staging for a property on Sale or Rental in the Triangle area.</p>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="javascript:void(0)">Contact Us</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-kindel-media-7578540.mp4" autoplay muted loop></video>
                            </div>

                            <div class="header__popoup-navigation-video-content">


                                <p>The v12 spider returns</p>
                            </div>

                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="header__popup-right-column">

        </div>
    </div>
</header>

<header class="header__popup-navigation-wrapper real-estate">
    <div class="header__popup-row">
        <div class="header__popup-left-column">
            <div class="header__popup-topbar">
                <a href="<?php echo get_site_url(); ?>" class="header__logo">
                    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/Logo-1-1.png" alt="">
                </a>
            </div>

            <button class="header__popup-close-btn">
                <div class="cicled__btn">
                    <svg viewBox="0 0 24 24" class="circled__btn-outer">
                        <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                    </svg>
                    <svg viewBox="0 0 12 12" class="icon" style="height: 12px; width: 12px;">
                        <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z"></path>
                    </svg>
                </div>
            </button>

            <h4 class="header__popup-menu-name">Real Estate</h4>

            <ul class="header__popup-navigation">
                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="https://www.bizjournals.com/triangle/news/residential-real-estate">News</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/Powerful-Billionaire-LUXURY-LIFESTYLE-Visualization-_-I-AM-RICH-Affirmations-for-Wealth-_-Motivation.mp4" autoplay muted loop></video>
                            </div>

                            <!-- <div class="header__popoup-navigation-video-content">
                                    <p>TPV is a team of Designers and partners with other local designers to provide a great designing capabilities from Interiors to material selection during the build process, from leading projects of renovation to adding new space/area into existing homes.</p>
                                    <P> TPV also specializes and partners with designers to assist in the Staging of homes for Sales/Rental in the area, Interior Designing, Windows Designing and small Renovation Projects.
                                    </P>
                                </div> -->
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video"><a href="https://theprattvillas.com/buyers/">Buyers</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/Powerful-Billionaire-LUXURY-LIFESTYLE-Visualization-_-I-AM-RICH-Affirmations-for-Wealth-_-Motivation.mp4" autoplay muted loop></video>
                            </div>

                            <!-- <div class="header__popoup-navigation-video-content">
                                    
                                    <p>TPV provides consultancy for Interior Designing from creating modern living spaces to giving a very soothing ambience for a Bedroom, Living and other spaces inside your home. Consulting for furnishings is another area of excellence in the Interior Designing world</p>
                                    <p>
                                    TPV consults with several Investors, Home Owners for their project on Furnishing the space for Short Term Rentals for a given budget in the Triangle area.
                                    </p>
                                </div> -->
                        </a>
                    </div>
                </li>

                <li class="header__popup-navigation-link header__popup-navigation-link-has-video">

                    <a href="javascript:void(0);"> Agent</a>
                    <div class="header__popup-navigation-link-preview">
                        <div class="header__popup-navigation-link-preview-bg-image">
                            <img src="https://theprattvillas.com/wp-content/uploads/2023/02/Screenshot-2023-02-13-at-4.31.20-PM.png" alt="">
                        </div>
                    </div>

                </li>
                <li class="header__popup-navigation-link header__popup-navigation-link-has-video">

                    <a href="javascript:void(0);" data-toggle="modal" data-target="#sellersModal"> Sellers</a>
                    <div class="header__popup-navigation-link-preview">
                        <a href="javascript:void(0);" class="header__popup-navigation-link-video-wrapper">
                            <div class="header__popup-navigation-video">
                                <video src="https://theprattvillas.com/wp-content/uploads/2023/02/Powerful-Billionaire-LUXURY-LIFESTYLE-Visualization-_-I-AM-RICH-Affirmations-for-Wealth-_-Motivation.mp4" autoplay muted loop></video>
                            </div>

                            <!-- <div class="header__popoup-navigation-video-content">
                                    
                                    <p>TPV provides consultancy for Interior Designing from creating modern living spaces to giving a very soothing ambience for a Bedroom, Living and other spaces inside your home. Consulting for furnishings is another area of excellence in the Interior Designing world</p>
                                    <p>
                                    TPV consults with several Investors, Home Owners for their project on Furnishing the space for Short Term Rentals for a given budget in the Triangle area.
                                    </p>
                                </div> -->
                        </a>
                    </div>
                </li>

            </ul>
        </div>

        <div class="header__popup-right-column">

        </div>
    </div>
</header>

<!-- Header Pupup Navigation End  -->




<!-- Loader Start -->

<div class="loader__wrapper">
    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/Logo-1.png" alt="" class="loader__img">
</div>

<!-- Loader End-->

<!-- Sellers Modal Start -->
<div class="theme-modal__overlay" id="sellersModal">
    <div class="theme-modal__outer">
        <div class="theme-modal__wrapper">
            <button class="theme-modal__close-btn">
                <div class="cicled__btn">
                    <svg viewBox="0 0 24 24" class="circled__btn-outer">
                        <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                    </svg>
                    <svg viewBox="0 0 12 12" class="icon" style="height: 12px; width: 12px;">
                        <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z"></path>
                    </svg>
                </div>
            </button>

            <div class="theme-modal__body">
                <?php echo do_shortcode('[contact-form-7 id="36" title="Untitled"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Sellers Modal End -->

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://theprattvillas.com/wp-content/themes/theprattvillas/assets/js/t-datepicker.min.js"></script> -->
<!--   <button onclick="scrollToTop()" class="grid__button" style="translate: none;rotate: none;scale: none;transform: translate(0px, 0px);opacity: 1;position: fixed;bottom: 16px;right: 22px;transform: rotate(270deg);"><div style="    background: black;" class="cicled__btn">
            <svg viewBox="0 0 24 24" class="circled__btn-outer">
                <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
            </svg>
            <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16" xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                </path>
            </svg>
        </div>
    </button> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://theprattvillas.com/wp-content/themes/theprattvillas/assets/js/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.js"></script>
<!-- <script src="<?php //echo get_stylesheet_directory_uri(); 
                    ?>/assets/js/mobiscroll.jquery.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js?<?= rand(1000, 9999); ?>"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script> -->


<script>
    AOS.init();
</script>

<script>
    $(document).ready(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 300) {
                $(".top-to-bottom_btn").hide();
            } else {
                $(".top-to-bottom_btn").show();
            }
        });
        $(".top-to-bottom_btn").on("click", function() {
            $("html, body").animate({
                scrollTop: $(document).height()
            });
        });
    });
</script>

<script>
    function scrollToTop() {
        window.scrollTo(0, 0);
    }
</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.closeBtncustom').click(function() {
            jQuery('#simpleModal').hide();
        })
    })
</script>


<script>
    $(document).ready(function() {
        $(".share_btn_new").click(function() {
            $(".share_btn_link").addClass("fon-menu mainfon");
        });

        $(".close_btn").click(function() {
            $(".share_btn_link").removeClass("fon-menu");
        });
    });
</script>

<script>
    function copyLink() {
        var link = document.getElementById("link");
        link.select();
        document.execCommand("copy");
        console.log(link);
    }
</script>


<script type="text/javascript">
    <?php $product_id = get_the_ID(); // Get the ID of the current product
    $checkout_days = 5;
    if (getParentCategoryID($product_id) === 65) {
        $checkout_date = 366;
    }
    ?>
    // jQuery(document).ready(function($) {
    //     let total_nights = parseInt('<?= $checkout_date; ?>');
    //     $('#dp1').datepicker({
    //         templates: {
    //             leftArrow: '<i class="fa fa-chevron-left"></i>',
    //             rightArrow: '<i class="fa fa-chevron-right"></i>'
    //         },
    //         format: "mm/dd/yyyy",
    //         startDate: new Date(),
    //         keyboardNavigation: false,
    //         autoclose: true,
    //         todayHighlight: true,
    //         disableTouchKeyboard: true,
    //         orientation: "bottom auto"
    //     });

    //     $('#dp2').datepicker({
    //         templates: {
    //             leftArrow: '<i class="fa fa-chevron-left"></i>',
    //             rightArrow: '<i class="fa fa-chevron-right"></i>'
    //         },
    //         format: "mm/dd/yyyy",
    //         startDate: moment().add(total_nights, 'days').toDate(),
    //         keyboardNavigation: false,
    //         autoclose: true,
    //         todayHighlight: true,
    //         disableTouchKeyboard: true,
    //         orientation: "bottom auto"

    //     });


    //     $('#dp1').datepicker().on("changeDate", function() {
    //         var startDate = $('#dp1').datepicker('getDate');
    //         var oneDayFromStartDate = moment(startDate).add(total_nights, 'days').toDate();
    //         $('#dp2').datepicker('setStartDate', oneDayFromStartDate);
    //         $('#dp2').datepicker('setDate', oneDayFromStartDate);
    //     });

    //     $('#dp2').datepicker().on("show", function() {
    //         var startDate = $('#dp1').datepicker('getDate');
    //         $('.day.disabled').filter(function(index) {
    //             return $(this).text() === moment(startDate).format('D');
    //         }).addClass('active');
    //     });

    // });
    //    var nowTemp = new Date();
    // var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    // var checkin = $('#dp1').datepicker({
    //    format: 'mm/dd/yyyy',
    //   beforeShowDay: function(date) {
    //     return date.valueOf() >= now.valueOf();
    //   },
    //   autoclose: true

    // }).on('changeDate', function(ev) {
    //   if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

    //     var newDate = new Date(ev.date);
    //     newDate.setDate(newDate.getDate() + 1);
    //     checkout.datepicker("update", newDate);

    //   }
    //   $('#dp2')[0].focus();
    // });


    // var checkout = $('#dp2').datepicker({
    //    format: 'mm/dd/yyyy',
    //   beforeShowDay: function(date) {
    //     if (!checkin.datepicker("getDate").valueOf()) {
    //       return date.valueOf() >= new Date().valueOf();
    //     } else {
    //       return date.valueOf() > checkin.datepicker("getDate").valueOf();
    //     }
    //   },
    //   autoclose: true

    // }).on('changeDate', function(ev) {});



    // Hide the extra content initially, using JS so that if JS is disabled, no problemo:
    $('.read-more-content').addClass('hide')
    $('.read-more-show, .read-more-hide').removeClass('hide')

    // Set up the toggle effect:
    $('.read-more-show').on('click', function(e) {
        $(this).next('.read-more-content').removeClass('hide');
        $(this).addClass('hide');
        e.preventDefault();
    });

    $('.read-more-hide').on('click', function(e) {
        $(this).parent('.read-more-content').addClass('hide');
        var moreid = $(this).attr("more-id");
        $('.read-more-show#' + moreid).removeClass('hide');
        e.preventDefault();
    });
</script>

<script>
    function showLoader() {
        const loader = document.querySelector(".loader");
        loader.style.display = "grid";
        setTimeout(() => {
            loader.style.display = "none";
        }, 2500);
    }
    const buttons = document.querySelectorAll(".booking-category__active");
    buttons.forEach((button) => {
        button.addEventListener("click", showLoader);
    });
</script>

<script>
    $('.test-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        adaptiveHeight: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        rows: 0
    });
</script>

<script>
    //Hide Nitro pack footer
    jQuery(".for_fav_new").children('li:first-child').hide();
    jQuery(document).ready(function() {

        setTimeout(function() {

            //var tag_new = jQuery("template").eq(38).attr("id");
            var tag_new = jQuery("template").last().attr("id");
            console.log(tag_new);

            //alert(tag_new);
            jQuery("#" + tag_new).css("display", "none");
            jQuery("#" + tag_new).next().next().css("display", "none");
        }, 100);

    });
    setTimeout(function(){
       jQuery("#share-button").show(); 
    },1500);
</script>
<?php wp_footer(); ?>

</body>

</html>