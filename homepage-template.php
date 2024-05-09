<?php 
/* Template Name: Homepage Template */ 

get_header();
?>



<style type="text/css">
 /*  .test_review {
    padding: 1rem 1rem;
    border: 1rem solid #000000;
    -o-border-image: repeating-linear-gradient(45deg, transparent, transparent 5px, #aaaaff 6px, #aaaaff 15px, transparent 16px, transparent 20px) 20/1rem;
    border-image: repeating-linear-gradient(45deg, transparent, transparent 5px, #000000 6px, #000000 15px, transparent 16px, transparent 20px) 20/1rem;
    
}*/
/* .test_review {
    padding: 1rem 1rem;
    border: 1rem solid #000000;
    -o-border-image: repeating-linear-gradient(45deg, transparent, transparent 5px, #aaaaff 6px, #aaaaff 15px, transparent 16px, transparent 20px) 20/1rem;
    border-image: url(https://theprattvillas.com/wp-content/uploads/2023/05/border-1.png) 14 stretch;
    background_image:url(https://theprattvillas.com/wp-content/uploads/2023/06/Reviews-Frame-1.png);
    margin-bottom: 20px;
} */
.test_review {
    padding: 8% 6%;
    background-image: url(https://theprattvillas.com/wp-content/uploads/2023/06/Reviews-Frame-1.png);
    background-repeat: no-repeat;
    margin-bottom: 20px;
    background-size: 100% 100%;
}

.test_reviews{
/*    background: linear-gradient(135deg, yellow 41%, #FD0E35);*/
}

@media (max-width:991px){

/*.slick-slide img {
    display: block;
    height: 423px;
    width: 100%;
    object-fit: contain;
}*/

.test_review {
    padding: 6rem 3rem
}

}

@media (max-width:768px){
.test_review {
    padding: 5rem 3rem;
    margin-bottom: 20px;
}
}

@media (max-width:576px){

.test_review {
    padding: 5rem 3rem;
    margin-bottom: 20px;
}

}

@media (max-width:425px){

.test_review {
    padding: 4rem 2rem;
    margin-bottom: 80px;
}

.content_slider .slick-dots {
    bottom: 0px;
}

}

</style>


<!-- Hero Section Start  -->
<?php if( have_rows('hero_slider') ): ?>
    <?php while( have_rows('hero_slider') ): the_row(); ?>
      <?php if( get_row_layout() == 'all_contents' ): ?>
<section class="hero__section make_header-dark">
    <div class="hero__slider-wrapper">
        <div class="hero__slider">

        <?php 

            if(have_rows('slide_repeat')):
                while(have_rows('slide_repeat')): the_row();
            ?>
            <div class="hero__slide">
                <video
                    src="<?= the_sub_field('slider_video');?>"
                    autoplay muted loop class="hero__video"></video>
                <div class="hero__slide-content">
                    <h4 class="hero__slider-content-subheading">
                        <?= the_sub_field('slider_content', false);?>
                    </h4>
                    <h2 class="hero__slider-content-heading"><?= the_sub_field('main_heading');?></h2>
                    <a href="<?= the_sub_field('discover_link');?>" class="hero__slider-button"><?= the_sub_field('discover_button');?> 
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
                    </a>

                    <a href="<?= the_sub_field('button_link');?>" class="hero__btn"><?= the_sub_field('button_text');?></a>
                </div>
            </div>
           <?php endwhile;?>
            <?php endif;?>
        </div>
        <div class="hero__scroll-indicator">
            <svg width="40" height="15" viewBox="0 0 40 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 9L0 0l16.182 13.35a6 6 0 0 0 7.636 0L40 0 20 9z" fill="#fff"></path>
            </svg>
            <svg width="40" height="15" viewBox="0 0 40 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 9L0 0l16.182 13.35a6 6 0 0 0 7.636 0L40 0 20 9z" fill="#fff"></path>
            </svg>
        </div>
    </div>
</section>
<?php endif;
endwhile;
endif;?>
<!-- Hero Section End -->

<!-- Content Slider Start -->
<section class="content_slider-section make_header-light">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="test_review">
            <div class="home-test">
                    <div class="content_slider-wrapper test_reviews" >


                        <div class="test_mo">
                            <div class="col-md-12 br_br">
                                <h2><?= the_field('main_title','option'); ?> </h2>
    <br>
                            </div>
                        

                        <div class="content_slider">
                            <?php 

                                if(have_rows('testimonials_sec','option')):
                                    while(have_rows('testimonials_sec','option')): the_row();
                            ?>
                            <div class="content_slide">
                                <div class="row m-0">
                                    <div class="col-md-12 p-0">
                                        <div class="content_slide-text">
                                            <!-- <h2>Remembering gianni agnelli</h2> -->
                                            <p><?= the_sub_field('description');?></p>
                                            <div class="author_detail">
                                                <div class="author_pic">
                                                <p>
                                                    <img src="<?php echo esc_url( get_sub_field( 'author_image', 'options' ) ); ?>" alt="avatar" />
                                                    </p>
                                                </div>
                                                <div class="aithor_name">
                                                    <p class="mb-0"><b><?= the_sub_field('author');?></b></p>
                                                    <p class="mb-0"><?= the_sub_field('date');?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    <?php endif;?>
                         
                        </div>

                    </div>
                        <div class="slider-custom-buttons">

                            <button type='button' class='content_slider-arrow content_slider-left-arrow' data-command="slickPrev">
                                <svg width="8" height="16" viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M.732 9.547L8 16 4 8l4-8L.732 6.453A1.996 1.996 0 0 0 0 8c0 .623.285 1.18.732 1.547z">
                                    </path>
                                </svg>
                            </button>
                            <button type='button' class='content_slider-arrow content_slider-right-arrow' data-command="slickPrev">
                                <svg width="8" height="16" viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                   </div>
                     </div>
                    </div>
            </div>

            <!-- ------------------- -->
            <div class="col-md-6 reviews-right">
                    <div class="content_slider-wrapper image_slide_image">


                        <div class="hero__slider">
                            <?php 

                                if(have_rows('testimonials_sec','option')):
                                    while(have_rows('testimonials_sec','option')): the_row();
                            ?>
                            <div class="hero__slide">
                                <img src="<?php the_sub_field('image');?>"
                                                                alt="">
                            </div>
                        <?php endwhile;?>
                    <?php endif;?>

                        </div>
                            <div class="hero__scroll-indicator">
                                <svg width="40" height="15" viewBox="0 0 40 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 9L0 0l16.182 13.35a6 6 0 0 0 7.636 0L40 0 20 9z" fill="#fff"></path>
                                </svg>
                                <svg width="40" height="15" viewBox="0 0 40 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 9L0 0l16.182 13.35a6 6 0 0 0 7.636 0L40 0 20 9z" fill="#fff"></path>
                                </svg>
                            </div>
                    </div>
            </div>
        
        
            
        </div>




           
    </div>
</section>
 
<style type="text/css">


.image_slide_image .hero__slider .slick-dots {
    position: absolute;
    bottom: 0px;
    display: none !important;
}
.image_slide_image .hero__scroll-indicator {
    display: none;
}

 .content_slider-left-arrow {
    left: 0px;
}
.image_slide_image .content_slider .slick-dots {
    display: none !important;

}

.content_slider .slick-dots{
    display: none !important;
}

.content_slide-img {
    margin:0px 10px;
    padding: 20px;
    background-color: #eeeded;
    transform-origin: right;
}
.content_slider {
    padding: 0 0px;
}

.content_slider-right-arrow {
    right: 0px;
}
.content_slide-text {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding-right: 30px;
    padding-left: 30px;
}

.author_detail {
    align-items: center;
    display: flex;
}

.author_detail .author_pic img {
    width: 50px !important;
    height: 50px;
    object-fit: cover;
    border-radius: 50%;
}

.author_detail .author_pic {
    margin-right: 10px;
}

.content_slide-text > p {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 6;
    overflow: hidden;
}

@media(max-width:768px){
    .br_br br{
        display: none;
    }

    .br_br h2 {
    font-size: 25px;
}
}
</style>
<!-- Content Slider End -->

<!-- Grid Section Start  -->
<?php if( have_rows('grid_section') ): ?>
    <?php while( have_rows('grid_section') ): the_row(); ?>
                     <?php if( get_row_layout() == 'corporate_rentals' ): ?>

<section class="grid__section make_header-dark">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-md-6 p-0 grid__item-active" id="corporateRentals">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(<?= the_sub_field('background_image');?>);">
                        <div class="grid__content">
                            <p class="grid__subbheading"><?= the_sub_field('sub_heading');?></p>
                            <h3 class="grid__heading"><?= the_sub_field('heading');?></h3>
                            <p class="grid__text"><?= the_sub_field('paragraph');?> </p>

                            <a href="<?= the_sub_field('button_link');?>">
                                <button class="grid__button"><?= the_sub_field('button_text');?><div class="cicled__btn">
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

           <?php elseif(get_row_layout() == 'luxury_rentals' ): ?>
            <div class="col-md-6 p-0" id="luxuryRentals">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(<?= the_sub_field('background_image');?>);">
                        <div class="grid__content">
                            <p class="grid__subbheading"><?= the_sub_field('sub_heading');?></p>
                            <h3 class="grid__heading"><?= the_sub_field('heading');?></h3>
                            <p class="grid__text"><?= the_sub_field('paragraph');?> </p>

                            <a href="<?= the_sub_field('button_link');?>">
                                <button class="grid__button"><?= the_sub_field('button_text');?> <div class="cicled__btn">
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
            <?php elseif( get_row_layout() == 'real_estates' ): ?>
            <div class="col-md-6 p-0" id="realEstates">
                <div class="grid__column">
                    <div  class="grid_item"
                        style="background-image:url(<?= the_sub_field('background_image');?>);">
                        <div class="grid__content">
                            <p class="grid__subbheading"><?= the_sub_field('sub_heading');?></p>
                            <h3 class="grid__heading"><?= the_sub_field('heading');?></h3>
                            <p class="grid__text"><?= the_sub_field('paragraph');?></p>

                            <a href="<?= the_sub_field('button_link');?>">
                                <button class="grid__button"><?= the_sub_field('button_text');?> <div class="cicled__btn">
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
          <?php elseif( get_row_layout() == 'property_managment' ): ?>
            <div class="col-md-6 p-0" id="propertyManagment">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(<?= the_sub_field('background_image');?>);">
                        <div class="grid__content">
                            <p class="grid__subbheading"><?= the_sub_field('sub_heading');?></p>
                            <h3 class="grid__heading"><?= the_sub_field('heading');?></h3>
                            <p class="grid__text"><?= the_sub_field('paragraph');?></p>

                            <a href="<?= the_sub_field('button_link');?>">
                                <button class="grid__button"><?= the_sub_field('button_text');?> <div class="cicled__btn">
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

          <?php elseif( get_row_layout() == 'relocation_consulting' ): ?>
            <div class="col-md-6 p-0" id="relocationConsulting">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(<?= the_sub_field('background_image');?>);">
                        <div class="grid__content">
                            <p class="grid__subbheading"><?= the_sub_field('sub_heading');?></p>
                            <h3 class="grid__heading"><?= the_sub_field('heading');?></h3>
                            <p class="grid__text"><?= the_sub_field('paragraph');?></p>

                            <a href="<?= the_sub_field('button_link');?>">
                                <button class="grid__button"><?= the_sub_field('button_text');?> <div class="cicled__btn">
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

           <?php elseif( get_row_layout() == 'design_consulting' ): ?>
            <div class="col-md-6 p-0" id="designConsulting">
                <div class="grid__column">
                    <div  class="grid_item"
                        style="background-image:url(<?= the_sub_field('background_image');?>);">
                        <div class="grid__content">
                            <p class="grid__subbheading"><?= the_sub_field('sub_heading');?></p>
                            <h3 class="grid__heading"><?= the_sub_field('heading');?></h3>
                            <p class="grid__text"><?= the_sub_field('paragraph');?></p>

                            <a href="<?= the_sub_field('button_link');?>">
                                <button class="grid__button"><?= the_sub_field('button_text');?> <div class="cicled__btn">
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
            <div>
        
        </div>
    </div>
</section>

<?php endif;?>
<?php endwhile;?>
<?php endif;?>
<!-- Grid Section End -->

<!-- Newsletter Section Start -->

<section class="newsletter__section">
    <div class="container">
        <div class="newsletter__wrapper">
            <a href="javascript:void(0);" class="newsletter__btn">
                <?php the_field('main_heading');?> <div class="cicled__btn">
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
            </a>
        </div>
    </div>
</section>

<!-- Newsletter Section End -->


<?php  get_footer(); ?>