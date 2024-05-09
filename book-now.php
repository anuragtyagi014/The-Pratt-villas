<?php
/* Template Name: Book Now Template */

get_header();
?>

<style type="text/css">
    @media (max-width:991px) {
        .Carers_section {
            padding: 0px 15px;
        }
    }

    .main_contact_wrapper .gform_heading {
        display: none;
    }


    .real_estates__content {
        padding: 0px;
        background: white;
        box-shadow: none;
    }

    .fitter_form input {
        display: block;
        width: 100%;
        box-shadow: none;
        outline: none;
        border: 1px solid #e8e8e8;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 22px;
        border-radius: 4px;
    }


    .fitter_form select {
        display: block;
        width: 100%;
        box-shadow: none;
        outline: none;
        border: 1px solid #e8e8e8;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 22px;
        border-radius: 4px;
        background: white;
    }

    .table_data_table {
        overflow: auto;
    }

    button.btn_link {
        /* width: 100%; */
        box-shadow: none;
        outline: none;
        border: 1px solid #e8e8e8;
        padding: 10px 70px;
        margin-top: 25px;
        margin-bottom: 10px;
        border-radius: 4px;
        background: black;
    }

    .table_data_info {
        width: 100%;
    }

    .table_data_info th,
    .table_data_info td {
        padding: 10px;
        text-align: center;
    }

    .content_slide-read-more {
        margin-top: 0;
        display: inline-flex;
        align-items: center;
        font-size: 12px;
        color: var(--text-primary);
        cursor: pointer;
        opacity: 1 !important;
        transform: none !important;
        scale: none !important;
    }

    form.fitter_form {
        background: #7f7f7f66;
        padding: 25px;
        margin-bottom: 20px;
    }

    .table_data_info td {
        text-transform: capitalize;
    }

    .table_data_info tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<!-- Hero Section Start  -->


<section class="page_main_head_title">
    <div class="row">
        <div class="container">
            <div class="main_tit_new_corp">
                <h3>Book Now</h3>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->

<section class="property__features make_header-light for-all-ani ">


    <div class="container">
        <div class="col-md-12 col-lg-12 Carers_section" style="padding: 0px;background: white;">
            <div class="real_estates__content manin_tab_tenant_portal">
                <form method="post" action="#" class="fitter_form">
                    <div class="row" style="justify-content: center;
">
                        <!-- <div class="col-lg-4 col-md-6">
                                  <label>Check In</label>
                                  <input type="date" name="checkin">  
                            </div>
        
                            <div class="col-lg-4 col-md-6">
                                  <label>Check Out</label>
                                  <input type="date" name="checkout">  
                            </div> -->

                        <div class="col-lg-3 col-md-6">
                            <label>Size</label>
                            <select name="size">
                                <option>--select--</option>
                                <option value="1" <?php if ($_POST['size'] == 1) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>1</option>
                                <option value="2" <?php if ($_POST['size'] == 2) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>2</option>
                                <option value="3" <?php if ($_POST['size'] == 3) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>3</option>
                                <option value="4" <?php if ($_POST['size'] == 4) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>4</option>
                                <option value="5" <?php if ($_POST['size'] == 5) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>5</option>
                                <option value="6" <?php if ($_POST['size'] == 6) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>6</option>
                                <option value="7" <?php if ($_POST['size'] == 7) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>7</option>
                                <option value="8" <?php if ($_POST['size'] == 8) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>8</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <label>Bedrooms</label>
                            <select name="bedroom">
                                <option>--select--</option>
                                <option value="1" <?php if ($_POST['bedroom'] == 1) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>1</option>
                                <option value="2" <?php if ($_POST['bedroom'] == 2) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>2</option>
                                <option value="3" <?php if ($_POST['bedroom'] == 3) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>3</option>
                                <option value="4" <?php if ($_POST['bedroom'] == 4) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>4</option>
                                <option value="5" <?php if ($_POST['bedroom'] == 5) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>5</option>
                                <option value="6" <?php if ($_POST['bedroom'] == 6) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>6</option>
                                <option value="7" <?php if ($_POST['bedroom'] == 7) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>7</option>
                                <option value="8" <?php if ($_POST['bedroom'] == 8) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>8</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <label>Furnished / Unfurnished</label>
                            <select name="furniscat">
                                <option>--select--</option>
                                <option value="Furnished" <?php if ($_POST['furniscat'] == 'Furnished') {
                                                                echo "selected";
                                                            } else {
                                                            } ?>>Furnished</option>
                                <option value="UnFurnished" <?php if ($_POST['furniscat'] == 'UnFurnished') {
                                                                echo "selected";
                                                            } else {
                                                            } ?>>Unfurnished</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <label>Bath</label>
                            <select name="bath">
                                <option>--select--</option>
                                <option value="1" <?php if ($_POST['bath'] == 1) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>1</option>
                                <option value="2" <?php if ($_POST['bath'] == 2) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>2</option>
                                <option value="3" <?php if ($_POST['bath'] == 3) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>3</option>
                                <option value="4" <?php if ($_POST['bath'] == 4) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>4</option>
                                <option value="5" <?php if ($_POST['bath'] == 5) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>5</option>
                                <option value="6" <?php if ($_POST['bath'] == 6) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>6</option>
                                <option value="7" <?php if ($_POST['bath'] == 7) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>7</option>
                                <option value="8" <?php if ($_POST['bath'] == 8) {
                                                        echo "selected";
                                                    } else {
                                                    } ?>>8</option>
                            </select>
                        </div>
                        <?php //echo do_shortcode('[searchandfilter id="wpf_64d5b554bba65"]'); 
                        ?>


                        <div class="col-lg-3 col-md-12" style="text-align: center;">
                            <!-- <label style="opacity: 0;">search</label> -->
                            <button type="submit" name="searchpro" style="color: white;" class="btn_link"><i class="fas fa-search"></i> SEARCH</button>
                        </div>
                    </div>
                </form>

                <br>
                <div class="table_data_table">
                    <table class="table_data_info" border="1">
                        <thead>
                            <tr style="background: #020202;color: white;">
                                <th>Modal</th>
                                <th>Furnished / Unfurnished</th>
                                <th>Date</th>
                                <th>Location</th>
                                <!-- <th>Area(Sq Ft)</th> -->
                                <th>Bed/Bath</th>
                                <th>Monthly Rental</th>
                                <th>Book</th>
                            </tr>
                        </thead>
                        <tbody>



                            <?php
                            if (isset($_POST['searchpro'])) {


                                $args = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => 30,
                                );

                                $loop = new WP_Query($args);

                                while ($loop->have_posts()) : $loop->the_post();
                                    global $product;
                                    $product_id = $product->get_id();;

                                    $loc = get_field('notes');
                                    // print_r($loc);
                            ?>

                                    <?php $termsizeoption = get_the_terms($product_id, 'size_option');
                                    $termbedoption = get_the_terms($product_id, 'bed_option');
                                    $termbathoption = get_the_terms($product_id, 'bath_option');
                                    $termfurnishedoption = get_the_terms($product_id, 'furnished_option');

                                    if (($_POST['size'] == $termsizeoption[0]->name) || ($_POST['bedroom'] == $termbedoption[0]->name) || ($_POST['bath'] == $termbathoption[0]->name) || ($_POST['furniscat'] == $termfurnishedoption[0]->name)) {
                                    ?>

                                        <tr>
                                            <td><?php echo get_the_title(); ?></td>
                                            <td><?php echo $termfurnishedoption[0]->name; ?> </td>
                                            <td><?php echo get_the_date('Y-m-d', $product->get_id()); ?></td>
                                            <td><?php echo get_field('location_text'); ?></td>
                                            <!-- <td>2300</td> -->
                                            <td><?php echo $termbedoption[0]->name ?> / <?php echo $termbathoption[0]->name; ?></td>
                                            <td><?php echo $product->get_price_html(); ?></td>

                                            <td>
                                                <a href="<?php echo get_the_permalink(); ?>" class="content_slide-read-more spacing" style="translate: none; rotate: none; scale: none; opacity: 0; transform: translate(0px, 10px);">Book <div class="cicled__btn">
                                                        <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                                            <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                                        </svg>
                                                        <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16" xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php }

                                endwhile;
                                wp_reset_query();
                            } else {

                                $args = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => 30,
                                );

                                $loop = new WP_Query($args);

                                while ($loop->have_posts()) : $loop->the_post();
                                    global $product;
                                    $product_id = $product->get_id();;

                                    $loc = get_field('notes');
                                    // print_r($loc);
                                    ?>

                                    <?php $termsizeoption = get_the_terms($product_id, 'size_option');
                                    $termbedoption = get_the_terms($product_id, 'bed_option');
                                    $termbathoption = get_the_terms($product_id, 'bath_option');
                                    $termfurnishedoption = get_the_terms($product_id, 'furnished_option');

                                    // if(($_POST['size'] == $termsizeoption[0]->name) || ($_POST['bedroom'] == $termbedoption[0]->name) || ($_POST['bath'] == $termbathoption[0]->name) || ($_POST['furniscat'] == $termfurnishedoption[0]->name))
                                    // {
                                    ?>

                                    <tr>
                                        <td><?php echo get_the_title(); ?></td>
                                        <td><?php echo $termfurnishedoption[0]->name; ?> </td>
                                        <td><?php echo get_the_date('Y-m-d', $product->get_id()); ?></td>
                                        <td><?php echo get_field('location_text'); ?></td>
                                        <!-- <td>2300</td> -->
                                        <td><?php echo $termbedoption[0]->name ?> / <?php echo $termbathoption[0]->name; ?></td>
                                        <td><?php echo $product->get_price_html(); ?></td>

                                        <td>
                                            <a href="<?php echo get_the_permalink(); ?>" class="content_slide-read-more spacing" style="translate: none; rotate: none; scale: none; opacity: 0; transform: translate(0px, 10px);">Book <div class="cicled__btn">
                                                    <svg viewBox="0 0 24 24" class="circled__btn-outer">
                                                        <circle cx="12" cy="12" r="11" stroke="1" style=""></circle>
                                                    </svg>
                                                    <svg viewBox="0 0 8 16" class="circled__btn-arrow" width="8" height="16" xmlns="http://www.w3.org/2000/svg" style="height: 16px; width: 8px;">
                                                        <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>

                            <?php //}

                                endwhile;
                                wp_reset_query();
                            }
                            ?>




                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>



<?php get_footer(); ?>