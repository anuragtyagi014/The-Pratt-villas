<?php 
/* Template Name: Luxury Rental Page Template */ 

get_header();
?>

<!-- Page Header Start -->

<!-- <section class="page__header hero-v2__section make_header-dark for-all-ani" style="background-image:url('https://theprattvillas.com/wp-content/uploads/2023/05/corporate.jpg')">
    <div class="container">
        <h3 class="search__title">Luxury Rental</h3>
    </div>
</section> -->

<section class="page_main_head_title">
    <div class="row">
        <div class="container">
        <div class="main_tit_new_corp">
            <h3><?php echo get_field('group_name'); ?> <span><?php echo get_field('group_presentation_name'); ?></span></h3>
            </div>
        </div>
    </div>
</section>

<section class="page_head_title">
    <div class="row">
        <div class="container">
        <div class="main_tit_new_corp">
                <h3><?php echo get_field('page_name'); ?></h3>
            </div>
        </div>
    </div>
</section>

<section class="page_head_title_para">
    <div class="row">
        <div class="container">
        <div class="main_tit_new_corp">
            <p><?php echo get_field('title_model'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- <?php
$terms = get_terms( array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false, 
    'child_of' => 65,
) );
?>
<section class="booking-categories__section " >
    <div class="container">
        <div class="booking-categories__row">
            <ul class="booking-categories__list">
                <?php
                $first_term_id=0;
                foreach($terms as $key => $term){ 
                    if($key===0){ 
                        $first_term_id=$term->term_id;
                    }
                    
                    $thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
                    $term_img = wp_get_attachment_url(  $thumb_id );
                    ?>
                    <li>
                        <a href="javascript:void(0);" class="<?= $key==0 ? 'booking-category__active' : '';?>" term_id="<?= $term->term_id;?>">
                            <img src="<?= $term_img;?>" alt="<?= $term->name;?>">
                            <p><?= $term->name;?></p>
                        </a>
                    </li>
                <?php }
                ?>
                
            </ul>

        </div>
    </div>
</section>
 -->

<!-- Page Header End -->

<!-- Booking listing Start -->
<?php
$products=getCyberRiskBasicPostAjax($first_term_id);
?>
<section class="booking__listing-section make_header-light" style="display:none">
    <div class="container">
        <div class="row" id="fetched_results">
            <div class="loader">
                <div id="loader-content"></div>
            </div>
            <?php
            echo $products;
            ?>
        </div>
    </div>
</section>


<section class="grid__section make_header-dark trans-bg">
    <div class="container">
        <div class="row justify-content-md-center">
            <?php $luxurypropertiescount=1; foreach (get_field('luxury_rentals_properties_list') as $luxury_rentals_properties_list): if(!empty($luxury_rentals_properties_list)): ?>
                <div class="col-md-6 col-lg-6 ">
                    <div class="grid__column" style="width: 100%;">
                        <div class="grid_item property-sec" style="background-image: url(<?php echo $luxury_rentals_properties_list['background_image']; ?>); opacity: 1;">
                            <div class="grid__content">
                                <h3 class="grid__heading"><?php echo $luxury_rentals_properties_list['properties_name']; ?></h3>
                                <a href="<?php echo $luxury_rentals_properties_list['properties_button']['url']; ?>" target="_blank">
                                    <button class="grid__button"><?php echo $luxury_rentals_properties_list['properties_button']['title']; ?> <div class="cicled__btn">
                                            <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                                <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                            </svg>
                                            <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16" xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                                <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                                </path>
                                            </svg>
                                        </div>
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>        
            <?php endif; $luxurypropertiescount++; endforeach; ?>
            
        </div>
    </div>
</section>


<?php  get_footer(); ?>
<script>
    jQuery(document).ready(function($){
    $('.booking-categories__list li a').click(function(){
        let term_id=$(this).attr("term_id");
        let that=$(this);
        $.ajax({
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            method: "POST",
            dataType: "json",
            beforeSend:function(){
                $(".booking__listing-section").addClass("filter-loader");
            },
            data: {
                action: 'getTermWiseProducts',
                term_id: term_id
            },
            success: function(res) {
                $(".booking__listing-section").removeClass("filter-loader");
                $('.booking-categories__list li a').removeClass("booking-category__active");
                that.addClass("booking-category__active");
                $("#fetched_results").html(res.posts);
                initalizeSlider();
            }
        });

    });


    function initalizeSlider(){
        $('.booking__slides').each(function (idx, slider) {

var total = $(slider).find('.booking__slide-item').length,
    rand = Math.floor(Math.random() * total);

$(slider).slick({
    autoplay: false,
    arrows: true,
    dots: true,
    infinite: false,
    prevArrow: "<button type='button' class='slick-prev'><i class='fas fa-chevron-left'></i></button>",
    nextArrow: "<button type='button' class='slick-next'><i class='fas fa-chevron-right'></i></button>"
});



$(slider).slick('slickGoTo', rand);

});
    }

});
</script>