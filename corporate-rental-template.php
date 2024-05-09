<?php 
/* Template Name: Corporate Rental Page Template */ 

get_header();
?>


<!-- Page Header Start -->

<!-- <section class="page__header hero-v2__section make_header-dark for-all-ani" style="background-image:url('https://theprattvillas.com/wp-content/uploads/2023/05/corporate.jpg')">
    <div class="container">
        <h3 class="search__title">Corporate Rental</h3>
    </div>
</section> -->

<section class="page_main_head_title">
    <div class="row">
        <div class="container">
        <div class="main_tit_new_corp">
            <h3>Kamal Hospitality Group <span>Presents</span></h3>
            </div>
        </div>
    </div>
</section>

<section class="page_head_title">
    <div class="row">
        <div class="container">
        <div class="main_tit_new_corp">
            <h3>Corporate Rental</h3>
            </div>
        </div>
    </div>
</section>

<section class="page_head_title_para">
    <div class="row">
        <div class="container">
        <div class="main_tit_new_corp">
            <p>Luxury Living Furnished Boutiques by The Pratt Villas

</p>
            </div>
        </div>
    </div>
</section>

<!-- <?php
$terms = get_terms( array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    'child_of' => 22,
) );

?>
<section class="booking-categories__section make_header-light" >
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
</section> -->


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
            if(empty($products)){
                echo "No Product Found";
            }else{
                echo $products;
            }
            ?>
        </div>
    </div>
</section>

<section class="grid__section make_header-dark trans-bg">
    <div class="container">
        <div class="row justify-content-md-center">
          
            <div class="col-md-6 col-lg-6 ">
                <div class="grid__column" style="width: 100%;">
                    <div class="grid_item property-sec" style="background-image: url(https://theprattvillas.com/wp-content/uploads/2023/06/pexels-photo-2724749-1-scaled.jpeg); opacity: 1;">
                        <div class="grid__content">
                            <h3 class="grid__heading">NEHALEM</h3>
                            <a href="https://theprattvillas.com/product/nehalem/" target="_blank">
                                <button class="grid__button">Explore <div class="cicled__btn">
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

            <div class="col-md-6 col-lg-6 ">
                <div class="grid__column" style="width: 100%;">
                    <div class="grid_item property-sec" style="background-image: url(https://theprattvillas.com/wp-content/uploads/2023/06/pexels-photo-259962-1.jpeg); opacity: 1;">
                        <div class="grid__content">
                            <h3 class="grid__heading">FUGAKU</h3>
                            <a href="https://theprattvillas.com/product/fugaku/" target="_blank">
                                <button class="grid__button">Explore <div class="cicled__btn">
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


               <div class="col-md-6 col-lg-6 ">
                <div class="grid__column" style="width: 100%;">
                    <div class="grid_item property-sec" style="background-image: url(https://theprattvillas.com/wp-content/uploads/2023/06/pexels-photo-276724.jpeg); opacity: 1;">
                        <div class="grid__content">
                            <h3 class="grid__heading">SIERRA</h3>   

                            <a href="https://theprattvillas.com/product/sierra/" target="_blank">
                                <button class="grid__button">Explore <div class="cicled__btn">
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

             <div class="col-md-6 col-lg-6" >
                <div class="grid__column" style="width: 100%;">
                    <div class="grid_item property-sec" style="background-image: url(https://theprattvillas.com/wp-content/uploads/2023/06/pexels-photo-3773579.jpeg); opacity: 1;">
                        <div class="grid__content">
                            <h3 class="grid__heading">SUMMIT</h3>

                            <a href="https://theprattvillas.com/product/summit/" target="_blank" >
                                <button class="grid__button">Explore<div class="cicled__btn">
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

            <div class="col-md-6 col-lg-6" >
                <div class="grid__column" style="width: 100%;">
                    <div class="grid_item property-sec" style="background-image: url(https://theprattvillas.com/wp-content/uploads/2023/07/photo-1604014237800-1c9102c219da.jpg); opacity: 1;">
                        <div class="grid__content">
                            <h3 class="grid__heading">COMING SOON</h3>

                            <a href="#" target="_blank" >
                                <button class="grid__button">Explore<div class="cicled__btn">
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

            <div class="col-md-6 col-lg-6" >
                <div class="grid__column" style="width: 100%;">
                    <div class="grid_item property-sec" style="background-image: url(https://theprattvillas.com/wp-content/uploads/2023/07/blairgowrie-house-1-powda-con-img1d01ad8709002b5c_14-8282-1-5d44a86.jpg); opacity: 1;">
                        <div class="grid__content">
                            <h3 class="grid__heading">COMING SOON</h3>

                            <a href="#" target="_blank" >
                                <button class="grid__button">Explore<div class="cicled__btn">
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