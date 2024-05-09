<?php 
/* Template Name: relocation consulting Template */ 

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

/*===== Seprate Css Start ====*/

.design-consulting.relocating{
   background-position: 100% 36%;
}



/*===== Seprate Css End ====*/

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
    text-align: left;
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

.servsec.relopage{
   padding: 60px 0 30px;
}
.relopage .content{
   height: 400px;
   display: block;
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
    /*background-image: url(<//?php echo get_field( 'image' ); ?>);*/
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
}
section.servsec:after {
   /* background-color: #33333385;*/
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

.for_mrjn {
    margin-bottom: 30px;
}

@media(max-width: 1199px){
    .content {
    padding: 20px;
}

.content h3 {
    font-size: 26px;
}

}

@media (max-width:1024px){
/* .design-consulting {
    padding: 160px 0 160px 0;
} */
.absec .col-lg-12 {
    max-width: 100%;
}

.relopage .content {
    height: 450px;
}

}

@media (max-width:992px){
.relopage .content {
    height:fit-content;
    margin-bottom: 20px;
}

.for_mrjn {
    margin-bottom: 0px;
}

}

@media (max-width:768px){

.absec .col-lg-12 {
    max-width: 100%;
}
section.absec {
    padding: 50px 0;
}

.servsec.relopage .row:nth-child(1),.row:nth-child(3) {
   flex-direction: column-reverse;
}
.absec .col-lg-12 h4 {
    font-size: 36px;
}
.design-consulting h3 {
/*    font-size: 36px;*/
/*    margin-top: 40px;   */
}

.servsec.relopage{
   padding: 30px 0 0px;
}

}

@media (max-width:567px){

.content_slider-section .container {
    max-width: calc(100% - 30px);
}
.absec .col-lg-12 h4 {
    font-size: 28px;
}
.content {
    padding: 30px 20px;
}
/* .design-consulting {
    padding: 100px 0 100px 0;
} */
.content h3 {
    font-size: 22px;
}

.for_mrjn {
    margin-bottom: 16px;
}

}
</style>


<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>Relocation Consulting</h3>
            </div>
        </div>
    </div>
</section>



<!-- <section class="absec content_slider-section make_header-light">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <span><?php echo get_field( 'sub_heading' ); ?></span>
            <h4><?php echo get_field( 'main_heading' ); ?></h4>
            <p><?php echo get_field( 'paragraph_text' ); ?></p>
         </div>
      </div>
   </div>
</section> -->




<section class="servsec relopage make_header-dark">
   <div class="container">
      <div class="row">
            <?php if ( have_rows( 'servsec' ) ) : ?>
            <?php $i = 1; ?>
        <?php while ( have_rows( 'servsec' ) ) : the_row(); ?>
         <div class="col-lg-6 colrobg for_mrjn" id="<?= 'relocationConsulting'.$i; ?>">
            <!-- <div class="imgbx">
               <img src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-pixabay-271816.jpg">
            </div> -->
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(<?php echo get_sub_field( 'service_image' ); ?>);">
                    </div>
                </div>
            <div class="content grid__column">
               <h3 data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field( 'service_heading' ); ?></h3>
               <p data-aos="fade-down" data-aos-duration="2000"><?php echo get_sub_field( 'service_text' ); ?></p>

            </div>
         </div>
            <?php $i++; endwhile; ?>
        <?php endif; ?>
         <!-- <div class="col-lg-6">
                <div class="grid__column">
                    <div class="grid_item"
                        style="background-image:url(https://theprattvillas.com/wp-content/uploads/2023/02/pexels-saviesa-home-2089696.jpg);">
                    </div>
                </div>
             <div class="imgbx">
               <img src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-saviesa-home-2089696.jpg">
            </div> 
             <div class="content grid__column">
               <h3 data-aos="fade-down" data-aos-duration="2000">Global & Domestic Relocation</h3>
               <p data-aos="fade-down" data-aos-duration="2000">The Pratt Villas team assists the clients right from the Airport Arrival to applying for SSN, opening Bank accounts, Taxi, Car Rental, Driving Training, Assistance in writing Driving test for Permit & License, provides guidance on the nearby city/town, restaurants, other places of interest area, schooling assistance for kids, Temporary accommodation - providing assistance on short term furnished rentals, permanent housing on long term rental upto finally home purchases by our team of realtors.</p>

            </div>
         </div>-->
        </div>

   </div>
</section>



<?php  get_footer(); ?>