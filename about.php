<?php 

/* Template Name: About Us Template */ 



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

/*    padding: 230px 0 160px 0;*/

    background-position: 100% 66%;

}



.design-consulting h3 {

    color: #fff;

    text-align: center;

/*    font-size: 36px;*/

}



section.absec {

    padding: 70px 70px;

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

    padding: 60px 0 100px;

    background-image: url(<?php echo get_field( 'section2_bg_image' ); ?>);

    background-size: cover;

    background-repeat: no-repeat;

    position: relative;

}

section.servsec:after {

    background-color: #33333385;

    position: absolute;

    content: "";

    z-index: 8;

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





@media (max-width:991px){



.flex_prop {

    flex-direction: column-reverse;

}

.about_img {

    padding-bottom: 30px;

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

.design-consulting h3 {

/*    font-size: 36px;*/

/*    margin-top: 30px;*/

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

    font-size: 28px;

}

.design-consulting h3 {

    /*font-size: 28px;

    margin-top: 40px;*/

}

}

</style>









<!-- <section class="page__header design-consulting make_header-dark" style="background-image:url(<?php echo get_field( 'bg_image' ); ?>)">

    <div class="container">

        <h3 class="grid__heading"><?///php echo get_field( 'main_heading' ); ?></h3>

    </div>

</section> -->

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
                <h3>About Us</h3>
            </div>
        </div>
    </div>
</section>





<section class="absec content_slider-section make_header-light for-all-ani">

    <div class="container-fluid">

        <div class="row flex_prop">

            <div class="col-lg-6">

                <h4 class="for-txt-ani"><?php echo get_field( 'section1_heading' ); ?></h4>

                <br>

                <p class="for-txt-ani"><?php echo get_field( 'section1_text' ); ?></p>



                <!-- <a href="#interiors" class="content_slide-read-more spacing">Contact Us

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

                </a> -->

            </div>



            <div class="col-md-6">

                <img class="about_img" src="<?php echo get_field( 'section1_image' ); ?>">

            </div>

        </div>

    </div>

</section>



<section class="servsec" id="interiors">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 colrobg">

                <div class="content">

                    <h3 class="" data-aos="fade-down" data-aos-duration="2000"><?php echo get_field( 'section2_heading' ); ?></h3>

                    <p class="" data-aos="fade-down" data-aos-duration="2000"><?php echo get_field( 'section2_text' ); ?></p>



                </div>

            </div>

            <div class="col-lg-6" id="relocationConsulting">

                <div class="grid__column">

                    <div class="grid_item"

                        style="background-image:url(<?php echo get_field( 'section2_image' ); ?>);">

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>





<section class="absec content_slider-section make_header-light for-all-ani secblnk">

    <div class="container-fluid">

        <div class="row flex_prop">

            

            <div class="col-md-6">

                <img class="about_img akg" src="<?php echo get_field( 'section3_image' ); ?>">

            </div>

            <div class="col-lg-6">

                <h4 class="for-txt-ani"><?php echo get_field( 'section3_heading' ); ?></h4>

                <br>

                <p class="for-txt-ani"><?php echo get_field( 'section3_text' ); ?></p>



                <!-- <a href="#interiors" class="content_slide-read-more spacing">Contact Us

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

                </a> -->

            </div>



        </div>

    </div>

</section>
<section class="about_user_sec">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="about_headmain">
                <h2><?php echo get_field('section_4_heading'); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach(get_field('list_of_person') as $list_of_person){ ?>
                <div class="col-md-4">
                    <div class="user_inner_box">
                        <div class="user_imk">
                            <img src="<?php echo $list_of_person['userimage']; ?>">
                        </div>
                        <div class="user_contt">
                            <h2><?php echo $list_of_person['userpost']; ?></h2>
                            <p><?php echo $list_of_person['user_name']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>







<?php  get_footer(); ?>