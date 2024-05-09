<?php get_header();
$product = wc_get_product(get_the_ID());
$product_id = get_the_ID(); // Get the ID of the current product
$checkout_date = "";
if (getParentCategoryID($product_id) === 65) {
    $checkout_date = !empty(get_field('check_in_date')) ? date('m/d/Y', strtotime(get_field('check_in_date') . " + 365 day")) : date('m/d/Y', strtotime(date("m/d/Y", mktime()) . " + 366 day"));
}

?>
<?php $available_dates = getAvailableBookingDates(get_the_ID());
$dates_arr = !empty($available_dates) ? explode(' ', $available_dates) : [];
$inputCheckInCheckOut = returnCheckInCheckOut($dates_arr);
?>
<?php do_action('single_page_internal_css'); ?>
<style>
    .sub-right a:nth-child(4)~a {
        display: none;
    }

    ul.for_fav_new img.icon_8 {
        width: 100%;
        max-width: 10px;
        height: auto;
        margin-right: 10px;
    }

    .error {
        color: red;
    }

    .yith-wcwl-add-to-wishlist {
    margin-top: 0px;
}
</style>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/date-picker/dist/css/hotel-datepicker.css">
<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <?php
            $head_module = get_field('head_module');
            if (!empty(get_field('head_module'))) { ?>
                <div class="main_tit_new_corp">
                    <h3><?= $head_module['group_name'] ?? ''; ?> <span><?= $head_module['group_presentation_name'] ?? ''; ?></span></h3>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>
<section class="page_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3><?= $product->get_name(); ?></h3>
            </div>
        </div>
    </div>
</section>

<!-- <section class="page_head_title_para">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <p><?= !empty($head_module['title_model']) ? $head_module['title_model'] . " -" : ''; ?><span> <?= $product->get_name(); ?></span>&nbsp;<?= $head_module['model_presented_by'] ?? ''; ?></p>
            </div>
        </div>
    </div>
</section> -->

<section class="galle_and_title make_header-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 title_sing_page">
                <div class="con_left_tit">
                    <!-- <h2 class="tit_sig_main"><?//= $product->get_name(); ?></h2> -->
                    <p><?= !empty($head_module['title_model']) ? $head_module['title_model'] . " -" : ''; ?><span> <?= $product->get_name(); ?></span>&nbsp;<?= $head_module['model_presented_by'] ?? ''; ?></p>

                    <div class="rev-and-loc">
                        <ul class="for_fav_new">
                            <li><i class="far fa-star"></i> <?= $product->get_average_rating(); ?> ·<a href="#reviews">
                                    <?= $product->get_review_count(); ?> reviews</a></li>
                            <li><a href="#map"><?= get_field('map_address'); ?> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 align-self-end">
                <div class="btn-sav-share">
                    <ul class="for_fav_new">
                        <li id="share-button"><a href="<?= get_field('share_link'); ?>"> <!-- <img class="icon_8" src="https://theprattvillas.com/wp-content/uploads/2023/07/share-icon-1.png"> --><i class="fa fa-share" aria-hidden="true"></i> Share </a>

                        </li>
                        <li><?= do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
/* 
   # Gallery Hook
   #add_action('product_gallery_hook', 'product_gallery_hook_fn')
*/?>
<?php
do_action('product_gallery_hook');
/* 
   # Feature Hook
   #add_action('product_features_hook', 'product_features_hook_fn')
*/
do_action('product_features_hook');
?>
<section class="reviews_sec make_header-light" id="reviews">
    <div class="container">
        <div class="double-sec">
            <div class="left-block">
                <div class="offers">
                    <h3 class="sub_tit offer-tit" style="text-transform: uppercase;padding-top: 25px;"><?= get_field('feature_title'); ?></h3>
                    <div class="main_offer">
                        <?php
                        $offers_module = get_field('offers_module');
                        foreach ($offers_module as $offer_module) { ?>
                            <div class="ro_in_det">
                                <div class="im_main">
                                    <?php
                                    if (!empty($offer_module['icon'])) { ?>
                                        <img src="<?= $offer_module['icon']; ?>" alt="img">
                                    <?php }
                                    ?>
                                </div>
                                <div class="main_con_in">
                                    <h4><?= $offer_module['offer_title'] ?? ''; ?></h4>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="review-block">

                    <div class="test-slider">
                        <?= do_shortcode('[rvx-review-listx product_id="' . get_the_ID() . '"]'); ?>

                    </div>
                    <div class="main_bx_prog for_bdr">

                        <?= comment_form(apply_filters('woocommerce_product_review_comment_form_args', $comment_form), get_the_ID()); ?>
                    </div>
                </div>
            </div>
            <div class="main_con-right">
                <div class="pop_pri_new">
                    <h3 class="sub_tit offer-tit" style="text-transform: uppercase;">Interests</h3>
                    <div class="rev-and-loc">
                        <ul class="for_fav_new">
                            <li><span>$<?= $product->get_price(); ?></span> /night</li>
                            <li><i class="far fa-star"></i> <?= $product->get_average_rating(); ?> ·<a href="#reviews">
                                    <?= $product->get_review_count(); ?> reviews</a></li>
                        </ul>
                        <form action="#">
                            <div class="demo__item">
                                <div style="padding-left:10px">CheckIn - CheckOut</div>
                                <div class="demo__input">
                                    <input type="text" id="demo29" value="<?php echo getCheckInOutDates($inputCheckInCheckOut, get_the_ID());
                                                                            ?>" aria-label="Check-in and check-out dates" aria-describedby="demo29-input-description" placeholder="checkin and checkout" />
                                </div>
                            </div>

                            <div class="sel_div">
                                <div class="main_sel_new">
                                    <div class="text_lab">
                                        <label for="cars">Guests</label>
                                    </div>
                                    <div class="text_lab">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="drop_new_ado">
                                    <ul>
                                        <li>
                                            <div class="set-adoult">
                                                <div class="adoult_left">
                                                    <p>Adults </p>
                                                    <!-- <span class="none_mes">Age 13+</span> -->
                                                </div>
                                                <div class="adoult_right adult_number">
                                                    <i class="fas fa-minus"></i>
                                                    <span>1</span>
                                                    <i class="fas fa-plus"></i>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="set-adoult">
                                                <div class="adoult_left">
                                                    <p>Kids </p>
                                                    <!-- <span class="none_mes">Age 13+</span> -->
                                                </div>
                                                <div class="adoult_right kids_number">
                                                    <i class="fas fa-minus"></i>
                                                    <span>0</span>
                                                    <i class="fas fa-plus"></i>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="set-adoult">
                                                <div class="adoult_left">
                                                    <p>Infants </p>
                                                    <!-- <span class="none_mes">Age 13+</span> -->
                                                </div>
                                                <div class="adoult_right infant_number">
                                                    <i class="fas fa-minus"></i>
                                                    <span>0</span>
                                                    <i class="fas fa-plus"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn_for_sub">
                                <?php
                                    global $post;
                                    $terms = get_the_terms( $post->ID, 'product_cat' );
                                ?>
                                <button type="button" id="addToCart"><?php if(isLuxary(get_the_ID())){ ?> RENT IT NOW <?php } else { ?> BOOK IT NOW <?php } ?></button>
                                <div class="booking_message"></div>
                            </div>
                        </form>
                        
                        <button type="button" id="schedule-tour"><?php if(isLuxary(get_the_ID())){ ?> SCHEDULE TOUR <?php } else { ?> CONTACT HOST <?php } ?></button>
                        <form id="schedule-tour-form" action="<?php echo admin_url('admin-post.php'); ?>" method="POST" style="display:none">
                            <input type="hidden" name="action" value="tour_schedule">
                            <input type="hidden" name="_wpnonce" value="<?php echo wp_create_nonce('tour_schedule'); ?>">
                            <div class="schedule-close">X</div>
                            <div class="form-title">
                                <h5>My Details</h5>
                            </div>
                            <div class="text-inputs">
                                <div class="fname-input-container">
                                    <input name="title" type="hidden" value="<?= get_the_title(); ?>">
                                    <input id="fname" name="fname" type="text" placeholder="First Name" value="">
                                </div>
                                <div class="lname-input-container">
                                    <input id="lname" name="lname" type="text" placeholder="Last Name" value="">
                                </div>
                                <div class="fname-input-container">
                                    <input id="email" name="email" type="email" placeholder="Email*" value="" required>
                                </div>
                                <div class="lname-input-container">
                                    <input id="phone" name="phone" type="tel" placeholder="Cell" value="">
                                </div>
                            </div>
                            <div class="che_ou_in">
                                <div class="check-in" id="check-in">
                                    <p>Tour Date</p>
                                    <div class="inl-input">
                                        <input id="tourDate" name="tour_date" type="date" placeholder="Tour Date" value="">
                                    </div>
                                </div>
                                <div class="check-out" id="check-out">
                                    <p>Tour Time</p>
                                    <div class="inl-input">
                                        <input type="time" id="appt" name="appt" min="07:00" max="19:00" step="3600000" />
                                    </div>
                                </div>
                            </div>
                           <div class="text-inputs_message">
                                <div class="fname-input--message">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" ></textarea>
                                </div>
                            </div>

                            <div class="btn_for_sub mt-0">
                                <button type="submit"><?php if(isLuxary(get_the_ID())){ ?> SCHEDULE TOUR <?php } else { ?> CONTACT HOST <?php } ?></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="map_go make_header-light" id="map">
    <div class="container">
        <div class="sub_tit_box">
            <h3 class="sub_tit"><?= get_field('map_title'); ?></h3>
        </div>
        <div class="map_main">
            <?= get_field('map_module'); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
<script>
    jQuery(document).ready(function($) {
        const galleryInstance = $('.images_gallery').fancybox({
            arrows: true,
            infobar: true
        });

        $("#show-all-img").click(function() {
            $(".images_gallery").eq(5).trigger("click")
        });
    })
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/date-picker/dist/fecha.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/date-picker/dist/js/hotel-datepicker.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/date-picker/dist/js/common.js"></script>
<script>
    let is_luxary = Number('<?= isLuxary(get_the_ID()); ?>');
    let minNights = parseInt('<?= isLuxary(get_the_ID()) ? 365 : 1; ?>');
    var input = document.getElementById("demo29");
    let date = new Date();
    let today = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(
        2,
        "0"
      )}-${String(date.getDate()).padStart(2, "0")}`;
    let last_date = addMonthsToDate(3); // adding 3 months
    let all_dates = getAllDatesBetween(today, last_date);
    let available_date = '<?= $available_dates; ?>'.split(" ");
    //console.log(available_date);
    const disabled_date = !is_luxary ? removeElementsByComparison(all_dates, available_date) : [];
    //console.log(disabled_date);
    let endDate = !is_luxary ? addMonthsToDate(12) : addMonthsToDate(120);
    //console.log(formatDate(endDate));
    var datepicker = new HotelDatepicker(input, {
        disabledDates: disabled_date,
        endDate: formatDate(endDate),
        enableCheckout: true,
        // minNights: minNights
        // extraDayText: function(date, attributes) {
        //     if (
        //         attributes.class.includes("datepicker__month-day--visibleMonth")
        //     ) {
        //         return "<span>$150</span>";
        //     }
        // },
    });

    function addMonthsToDate(months) {
        const today = new Date();
        const currentMonth = today.getMonth();
        today.setMonth(currentMonth + months);
        return today;
    }

    function getAllDatesBetween(startDateStr, endDateStr) {
        const startDate = new Date(startDateStr);
        const endDate = new Date(endDateStr);
        const allDates = [];
        let currentDate = new Date(startDate);
        while (currentDate <= endDate) {
            allDates.push(formatDate(currentDate));
            currentDate.setDate(currentDate.getDate() + 1);
        }

        return allDates;
    }

    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, "0");
        const day = String(date.getDate()).padStart(2, "0");
        return `${year}-${month}-${day}`;
    }

    function removeElementsByComparison(originalArray, elementsToRemove) {
        return originalArray.filter(
            (element) => !elementsToRemove.includes(element)
        );
    }

    function getTotalDaysBetweenDates(startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const oneDay = 24 * 60 * 60 * 1000; // milliseconds in a day

        const totalDays = Math.round(Math.abs((end - start) / oneDay)) + 1;
        return totalDays - 1;
    }

    // Add to cart functionality
    jQuery(document).ready(function($) {
        $('#addToCart').click(function() {
            const LUXURY_MAX_DATE_RANGE = parseInt('<?= LUXURY_MAX_DATE_RANGE; ?>');
            const CORPORATE_MAX_DATE_RANGE = parseInt('<?= CORPORATE_MAX_DATE_RANGE; ?>');

            let is_luxary = Number('<?= isLuxary(get_the_ID()); ?>');
            let dates = $("#demo29").val();
            let adult = $(".adult_number span").text();
            let kids = $(".kids_number span").text();
            let infant = $(".infant_number span").text();
            let separate_dates = dates.split(" - ");
            let booking_type = '';

            let is_action = false;
            if (dates.length >= 23) {
                $('.booking_message').html('');
                if (!is_luxary) {
                    if (getTotalDaysBetweenDates(separate_dates[0], separate_dates[1]) < 1) {
                        is_action = false;
                        $('.booking_message').html(`<span style="color:red;">Please select atleast 1 day.</span>`);
                    } else {
                        $('.booking_message').html('');
                        booking_type = 'Corporate';
                        is_action = true;
                    }
                    console.log("Corporate");
                } else {
                    console.log(getTotalDaysBetweenDates(separate_dates[0], separate_dates[1]));
                    if (getTotalDaysBetweenDates(separate_dates[0], separate_dates[1]) < LUXURY_MAX_DATE_RANGE) {
                        is_action = false;
                        $('.booking_message').html(`<span style="color:red;">Please select atleast ${LUXURY_MAX_DATE_RANGE} days.</span>`);
                    } else {
                        $('.booking_message').html('');
                        booking_type = 'Luxury';
                        is_action = true;
                    }
                    console.log("Luxury");
                }
                if (is_action) {
                    let total_date = dates;
                    let total_night = getTotalDaysBetweenDates(separate_dates[0], separate_dates[1]);
                    console.log({
                            action: 'addToCartAction',
                            product_id: '<?= get_the_ID(); ?>',
                            total_adult: adult,
                            total_kids: kids,
                            total_infant: infant,
                            total_night: total_night,
                            total_date: total_date,
                            booking_type: booking_type,
                            checkin: separate_dates[0],
                            checkout: separate_dates[1]
                        });

                    $.ajax({
                        url: "<?php echo admin_url('admin-ajax.php'); ?>",
                        method: "POST",
                        beforeSend: function() {
                            $('#addToCart').addClass("button loading");
                        },
                        dataType: "json",
                        data: {
                            action: 'addToCartAction',
                            product_id: '<?= get_the_ID(); ?>',
                            total_adult: adult,
                            total_kids: kids,
                            total_infant: infant,
                            total_night: total_night,
                            total_date: total_date,
                            booking_type: booking_type,
                            checkin: separate_dates[0],
                            checkout: separate_dates[1]
                        },
                        success: function(res) {
                            $('#addToCart').removeClass("button loading");
                            if (res.code == 200) {
                                $('.success').remove();
                                let cart_url = '<?= site_url("/cart"); ?>';
                                $('#addToCart').after('<p class="success" style="color:green;"><a href="' + cart_url + '">Review & Pay</a></p>');
                            } else if (res.code == 402) {
                                $('.success').remove();
                                $('#addToCart').after('<p class="success" style="color:red;">Item already added into cart.<a href="' + cart_url + '">Review & Pay</a></p>');
                            }
                        }
                    });
                }
            } else {
                $('.booking_message').html(`<span style="color:red;">Please select checkin and checkout date.</span>`);
            }
        });
        //  schedular enable and disable
        $('#schedule-tour').click(function() {
            $('#schedule-tour-form').show();
            $(this).hide();
        });
        $('.schedule-close').click(function() {
            $('#schedule-tour-form').hide();
            $('#schedule-tour').show();
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function() {
        $.validator.addMethod("customemail",
            function(value, element) {
                return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
            },
            "Please Enter Valid Email Id"
        );


        $("#schedule-tour-form").validate({
            rules: {
                fname: {
                    required: true,
                    minlength: 3
                },
                lname: {
                    required: true,
                    minlength: 3
                },

                email: {
                    required: true,
                    customemail: true
                },
                phone: {
                    required: true,
                    minlength: 10,
                    number: true
                },
                tour_date: {
                    required: true
                },
                tour_time: {
                    required: true

                }

            }

        });
    });
</script>