<?php 
/* Template Name: design consulting Template */ 

get_header();
?>

<style type="text/css">
.design-consulting::After {
    position: absolute;
    content: "";
    inset: 0;
    background-color: #24242a80;
    z-index: -1;
}
.design-consulting {
    background-position: 100% 66%;
}

.design-consulting h3 {
    color: #fff;
    text-align: center;
}

section.absec {
    padding: 70px 0;
}
.absec .col-lg-12 {
    max-width: 82%;
    margin: 0 auto;
    display: block;
    text-align: justify;
}

.absec .col-lg-12 span {
    color: #da291c;
    text-align: justify;
    display: block;
    text-transform: uppercase;
}

.absec .col-lg-12 h4 {
    font-size: 36px;
    margin: 10px 0 20px;
}

section.servsec {
    padding: 20px 0 100px;
}

.content {
    width: 100%;
    height: 100%;
    background-color: #333;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center;
}
.imgbx img {
    height: 344px;
    object-fit: cover;
    width: 100%;
}

.content h3 {
    color: #fff;
    font-size: 28px;
    text-align: left;
}
.content p {
    color: #fff;
    line-height: 26px;
    text-align: left;
}
.row.secrow {
    margin-top: 30px;
}
section.servsec {
    padding: 60px 0 60px;
    background-image: url(<?// echo esc_url( get_field( 'bg_image' ) ); ?>);
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
}
section.servsec:after {
    /*background-color: #33333385;*/
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
section.servsec .container{
    z-index: 9;
    position: relative;
}
a.content_slide-read-more {
    opacity: unset !important;
}

.spacing {
    margin-top: 0px;
}

.servsec .grid_item {
    padding:0;
    height: 364px;
}

@media (max-width:1024px){
.design-consulting {
/*    padding: 160px 0 160px 0;*/
}
.absec .col-lg-12 {
    max-width: 100%;
}
.servsec .grid_item {
    height: 425px;
}
}

@media(max-width:992px){
    .for-fon-clm-rev .row {
    flex-direction: column-reverse;
}

.row.secrow {
    flex-direction: inherit !important;
    margin-bottom:30px;
}
}

@media (max-width:768px){

.absec .col-lg-12 {
    max-width: 100%;
}
section.absec {
    padding: 50px 0;
}

.row:nth-child(1),.row:nth-child(3) {
    flex-direction: column-reverse;
}
.absec .col-lg-12 h4 {
    font-size: 36px;
}

.servsec .grid_item {
    height: 364px;
}

}

@media (max-width:567px){

.content_slider-section .container {
    max-width: calc(100% - 30px);
}
.absec .col-lg-12 h4 {
    font-size: 24px;
}
.content {
    padding: 30px 20px;
}
.design-consulting {
/*    padding: 100px 0 100px 0;*/
}
.content h3 {
    font-size: 22px;
}

}
</style>

<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>Design Consulting</h3>
            </div>
        </div>
    </div>
</section>



<!-- <section class="absec content_slider-section make_header-light for-all-ani">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="for-txt-ani"><?php echo get_field( 'sub_heading' ); ?></span>
                <h4 class="for-txt-ani"><?php echo get_field( 'main_heading' ); ?></h4>
                <p class="for-txt-ani"><?php echo get_field( 'paragraph_text' ); ?></p>
                <?php
                $link = get_field( 'explore' );
                if ( $link ) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                <a href="<?php echo esc_url( $link_url ); ?>" class="content_slide-read-more spacing"><?php echo esc_html( $link_title ); ?>
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
            <?php endif; ?>
            </div>
        </div>
    </div>
</section> -->

<section class="servsec for-fon-clm-rev" id="interiors">
    <div class="container">
        <?php  if(have_rows('services')): $coutnser=1;
                        while(have_rows('services')):the_row();
                            ?>
           <?php if(($coutnser == 1) || ($coutnser == 3) || ($coutnser == 5)){  ?>
        <div class="row" id="boxid<?= $coutnser; ?>"> 
            <div class="col-lg-6 colrobg">
                <div class="content">
                    <h3 class="" data-aos="fade-down" data-aos-duration="2000"><?php   echo get_sub_field( 'heading' );?></h3>
                    <p class="" data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field( 'paragraph' );?></p>

                </div>
            </div>
            <div class="col-lg-6" id="relocationConsulting">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(<?php echo esc_url( get_sub_field( 'image' ) ); ?>);">
                    </div>
                </div>
            </div>
        </div>
    <?php }   
    else{ ?>
        <div class="row secrow" id="boxid<?= $coutnser; ?>">
            <div class="col-lg-6" id="relocationConsulting">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(<?php echo esc_url( get_sub_field( 'image' ) ); ?>);">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 colrobg" id="relocationConsulting">
                <div class="content">
                    <h3 data-aos="fade-down" data-aos-duration="2000"><?php   echo get_sub_field( 'heading' );?></h3>
                    <p data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field( 'paragraph' );?></p>

                </div>

            </div>
        </div>
   <?php  }
    $coutnser++; ?>
        <?php endwhile; endif; ?>
        

<!--         <div class="row secrow">
            <div class="col-lg-6 colrobg" >
                <div class="content ">
                    <h3 data-aos="fade-down" data-aos-duration="2000">Renovation</h3>
                    <p data-aos="fade-down" data-aos-duration="2000">The Pratt Villas boasts the renovation piece of work the team undertakes and delivers on
                        budget and time for the space addition or renovating an existing space.</p>
                </div>
            </div>
            <div class="col-lg-6" id="relocationConsulting">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/04/3.jpg);">
                    </div>
                </div>
            </div>
        </div> -->

       <!--  <div class="row secrow">
            <div class="col-lg-6" id="relocationConsulting">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/04/4.jpeg);">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 colrobg">
                <div class="content ">
                    <h3 data-aos="fade-down" data-aos-duration="3000">Staging</h3>
                    <p data-aos="fade-down" data-aos-duration="3000">The Pratt Villas team of designers and partners provide assistance on Staging a property for
                    Sale in the Triangle area.</p>
                </div>
            </div>
        </div> -->

       <!--  <div class="row secrow">
            <div class="col-lg-6 colrobg">
                <div class="content ">
                    <h3 data-aos="fade-down" data-aos-duration="3000">Website Design</h3>
                    <p data-aos="fade-down" data-aos-duration="3000">The Pratt Villas team of designers and partners provide assistance on Staging a property for
                    Sale in the Triangle area.</p>
                </div>
            </div>
            <div class="col-lg-6" id="relocationConsulting">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/05/website-banner.png); background-position:inherit;">
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>


<?php  get_footer(); ?>