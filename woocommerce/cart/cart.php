<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>
<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
   <?php do_action('woocommerce_before_cart_table'); ?>

   <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
      <thead>
         <tr>
            <th class="product-remove"><span class="screen-reader-text"><?php esc_html_e('Remove item', 'woocommerce'); ?></span></th>
            <th class="product-thumbnail"><span class="screen-reader-text"><?php esc_html_e('Thumbnail image', 'woocommerce'); ?></span></th>
            <th class="product-name"><?php esc_html_e('Property', 'woocommerce'); ?></th>
            <th class="product-price"><?php esc_html_e('Rate', 'woocommerce'); ?></th>
            <!-- <th class="product-quantity"><?php esc_html_e('Quantity', 'woocommerce'); ?></th> -->
            <th class="product-subtotal"><?php esc_html_e('Charges', 'woocommerce'); ?></th>
         </tr>
      </thead>
      <tbody>
         <?php do_action('woocommerce_before_cart_contents'); ?>

         <?php
         foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
            $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
            /**
             * Filter the product name.
             *
             * @since 7.8.0
             * @param string $product_name Name of the product in the cart.
             */
            $product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
               $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
         ?>
               <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                  <td class="product-remove">
                     <?php
                     echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        'woocommerce_cart_item_remove_link',
                        sprintf(
                           '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                           esc_url(wc_get_cart_remove_url($cart_item_key)),
                           /* translators: %s is the product name */
                           esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), $product_name)),
                           esc_attr($product_id),
                           esc_attr($_product->get_sku())
                        ),
                        $cart_item_key
                     );
                     ?>
                  </td>

                  <td class="product-thumbnail">
                     <?php
                     $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                     if (!$product_permalink) {
                        echo $thumbnail; // PHPCS: XSS ok.
                     } else {
                        printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                     }
                     ?>
                  </td>

                  <td class="product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                     <?php
                     if (!$product_permalink) {
                        /**
                         * Filter the product name.
                         *
                         * @since 7.8.0
                         * @param string $product_name Name of the product in the cart.
                         * @param array $cart_item The product in the cart.
                         * @param string $cart_item_key Key for the product in the cart.
                         */
                        echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $product_name, $cart_item, $cart_item_key) . '&nbsp;');
                     } else {
                        /**
                         * Filter the product name.
                         *
                         * @since 7.8.0
                         * @param string $product_url URL the product in the cart.
                         */
                        echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $product_name), $cart_item, $cart_item_key));
                     }

                     do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                     // Meta data.
                     echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                     // Backorder notification.
                     if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                        echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                     }
                     ?>
                  </td>

                  <td class="product-price" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                     <?php
                     echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                     ?>
                  </td>

                 <!--   <td class="product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                  <?php
                  if ($_product->is_sold_individually()) {
                     $min_quantity = 1;
                     $max_quantity = 1;
                  } else {
                     $min_quantity = 0;
                     $max_quantity = $_product->get_max_purchase_quantity();
                  }

                  $product_quantity = woocommerce_quantity_input(
                     array(
                        'input_name'   => "cart[{$cart_item_key}][qty]",
                        'input_value'  => $cart_item['quantity'],
                        'max_value'    => $max_quantity,
                        'min_value'    => $min_quantity,
                        'product_name' => $product_name,
                     ),
                     $_product,
                     false
                  );

                  echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                  ?>
                  </td> -->

                  <td class="product-subtotal" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
                     <?php
                     echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                     ?>
                  </td>
               </tr>
         <?php
            }
         }
         ?>

         <?php do_action('woocommerce_cart_contents'); ?>
         <!-- custom option designed -->
         <tr>
            <td colspan="6">
               <div class="row">
                  <div class="col-md-6">
                     <?php if (have_rows('rent_a_tesla_section', 'option')) :
                        while (have_rows('rent_a_tesla_section', 'option')) : the_row();
                     ?>
                           <div class="options_box">
                              <h3><?php echo get_sub_field('first_heading', 'option'); ?></h3>
                              <div class="options">
                                 <?php $firstoptionvalue = 1;
                                 $rentatesla_fees  = !empty(WC()->session->get('rentatesla')) ? WC()->session->get('rentatesla') : '';
                                 foreach (get_sub_field('firstoption', 'option') as $firstoption) : ?>
                                    <div class="custom_option">
                                       <input type="checkbox" name="rentatesla" value="<?php echo $firstoption['price']; ?>" id="tesla<?php echo $firstoptionvalue;  ?>" <?= $rentatesla_fees == $firstoption['price'] ? 'checked' : ''; ?>>
                                       <label for="tesla<?php echo $firstoptionvalue;  ?>">
                                          <?php //echo get_woocommerce_currency_symbol(); ?><?php echo $firstoption['price_text']; ?>
                                       </label>
                                       <span class="price">
                                          <?php echo get_woocommerce_currency_symbol(); ?><?php echo $firstoption['price']; ?>
                                       </span>
                                    </div>
                                 <?php $firstoptionvalue++;
                                 endforeach; ?>
                              </div>
                           </div>
                     <?php endwhile;
                     endif;
                     ?>

                  </div>
                  <div class="col-md-6">
                     <?php if (have_rows('rent_electric_bikes_section', 'option')) :
                        while (have_rows('rent_electric_bikes_section', 'option')) : the_row();
                     ?>
                           <div class="options_box">
                              <h3><?php echo get_sub_field('second_heading'); ?> </h3>
                              <div class="options">
                                 <?php $secondoptionvalue = 1;
                                 $electricbike_fees  = !empty(WC()->session->get('electricbike')) ? WC()->session->get('electricbike') : '';
                                 foreach (get_sub_field('second_option', 'option') as $second_option) : ?>
                                    <div class="custom_option">
                                       <input type="checkbox" name="electricbike" value="<?php echo $second_option['price']; ?>" id="electric<?php echo $secondoptionvalue; ?>" <?= $electricbike_fees == $second_option['price'] ? 'checked' : ''; ?>>
                                       <label for="electric<?php echo $secondoptionvalue; ?>"><?php //echo get_woocommerce_currency_symbol(); ?><?php echo $second_option['price_text']; ?></label>
                                       <span class="price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $second_option['price']; ?></span>
                                    </div>
                                 <?php $secondoptionvalue++;
                                 endforeach; ?>
                              </div>
                           </div>
                     <?php endwhile;
                     endif; ?>
                  </div>
                  <div class="col-md-6">
                     <?php if (have_rows('early_check_in_section', 'option')) :
                        while (have_rows('early_check_in_section', 'option')) : the_row();
                     ?>
                           <div class="options_box">
                              <h3><?php echo get_sub_field('third_heading'); ?></h3>
                              <div class="options">
                                 <?php $thirdoptionvalue = 1;
                                 $earlyin_fees  = !empty(WC()->session->get('earlyin')) ? WC()->session->get('earlyin') : '';
                                 foreach (get_sub_field('third_option', 'option') as $third_option) : ?>
                                    <div class="custom_option">
                                       <input type="checkbox" name="earlyin" value="<?php echo $third_option['price'] ?>" id="early<?php echo $thirdoptionvalue; ?>" <?= $earlyin_fees == $third_option['price'] ? 'checked' : ''; ?>>
                                       <label for="early<?php echo $thirdoptionvalue; ?>"><?php //echo get_woocommerce_currency_symbol(); ?><?php echo $third_option['price_text'] ?></label>
                                       <span class="price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $third_option['price'] ?></span>
                                    </div>
                                 <?php $thirdoptionvalue++;
                                 endforeach; ?>
                              </div>
                              <p class="paragraph_text">Note: Will be confirmed 48 hrs before Check-In</p>
                           </div>
                     <?php endwhile;
                     endif; ?>
                  </div>
                  <div class="col-md-6">
                     <?php if (have_rows('late_check_out_section', 'option')) :
                        while (have_rows('late_check_out_section', 'option')) : the_row();
                     ?>
                           <div class="options_box">
                              <h3><?php echo get_sub_field('forth_heading'); ?></h3>
                              <div class="options">
                                 <?php $forthoptionvalue = 1;
                                 $latecheckout_fees  = !empty(WC()->session->get('latecheckout')) ? WC()->session->get('latecheckout') : '';
                                 foreach (get_sub_field('forth_option', 'option') as $forth_option) : ?>
                                    <div class="custom_option">
                                       <input type="checkbox" name="latecheckout" value="<?php echo $forth_option['price'] ?>" id="latec<?php echo $forthoptionvalue; ?>" <?= $latecheckout_fees == $forth_option['price'] ? 'checked' : ''; ?>>
                                       <label for="latec<?php echo $forthoptionvalue; ?>"><?php //echo get_woocommerce_currency_symbol(); ?><?php echo $forth_option['price_text']; ?></label>
                                       <span class="price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $forth_option['price']; ?></span>
                                    </div>
                                 <?php $forthoptionvalue++;
                                 endforeach; ?>
                              </div>
                              <p class="paragraph_text">Note: Will be confirmed 48 hrs before Check-In</p>
                           </div>
                     <?php endwhile;
                     endif; ?>
                  </div>
                  <div class="col-md-6">
                     <?php if (have_rows('special_package_section', 'option')) :
                        while (have_rows('special_package_section', 'option')) : the_row();
                     ?>
                           <div class="options_box">
                              <h3><?php echo get_sub_field('fifth_heading'); ?></h3>
                              <div class="options special_package">
                                 <div class="custom_option">
                                    <?php $price_value = get_sub_field('price');
                                    $spacialoffer_fees  = !empty(WC()->session->get('spacialoffer')) ? WC()->session->get('spacialoffer') : ''; ?>
                                    <input type="checkbox" name="spacialoffer" value="<?php echo get_sub_field('price'); ?>" id="add" <?= $spacialoffer_fees == $price_value ? 'checked' : ''; ?>>
                                    <label for="add">Add</label>
                                    <span class="price"><?php echo get_woocommerce_currency_symbol(); ?><?php echo get_sub_field('price'); ?></span>
                                 </div>
                                 <ul>
                                    <?php foreach (get_sub_field('details_list') as $details_list) : ?>
                                       <li><?php echo $details_list['list_text']; ?></li>
                                    <?php endforeach; ?>
                                 </ul>
                              </div>
                              <p class="paragraph_text">Note: Early Check-In & Late Check-Out need to be confirmed</p>
                           </div>
                     <?php endwhile;
                     endif; ?>
                  </div>


                  <div class="col-md-6">
                     <div class="options_box">
                        <h3>DISCOUNTS</h3>
                        <div class="options special_package">
                           <?php if (wc_coupons_enabled()) { ?>
                  <div class="coupon">
                     <label for="coupon_code" class="screen-reader-text"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" /> <button type="submit" class="button <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
                     <?php do_action('woocommerce_cart_coupon'); ?>
                  </div>
               <?php } ?>
                           <ul>
                              
                              <li style="margin-top: 20px;">$100 / 20% Off (To show how much off like 20% or $100 Off) Based on Value set in backend</li>
                              <!-- <li>
                                 <?php 
                                    // if(count($cart->get_applied_coupons()) > 0){ 
                                    //    $applied_coupons = $cart->get_applied_coupons();

                                    //      // Loop through each applied coupon
                                    //      foreach ($applied_coupons as $coupon_code) {
                                    //          // Get the coupon object
                                    //          $coupon = new WC_Coupon($coupon_code);

                                    //          // Get the coupon type (fixed_cart, percent, etc.)
                                    //          $coupon_type = $coupon->get_discount_type();

                                    //          // Get the coupon amount or percentage value
                                    //          $coupon_value = $coupon->get_amount();

                                    //          // Display coupon details
                                    //          echo "Coupon Code: $coupon_code<br>";
                                    //          echo "Coupon Type: $coupon_type<br>";
                                    //          echo "Coupon Value: $coupon_value<br><br>";
                                    //      }
                                    // } 
                                  ?>
                                    
                              </li> -->
                           </ul>

                        </div>
                     </div>
                  </div>
               </div>
            </td>
         </tr>

         <!--  <tr>
            <td colspan="6" class="actions">

               <?php if (wc_coupons_enabled()) { ?>
                  <div class="coupon">
                     <label for="coupon_code" class="screen-reader-text"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" /> <button type="submit" class="button <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
                     <?php do_action('woocommerce_cart_coupon'); ?>
                  </div>
               <?php } ?>

               <button type="submit" class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

               <?php do_action('woocommerce_cart_actions'); ?>

               <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
            </td>
         </tr>-->

         <?php do_action('woocommerce_after_cart_contents'); ?>

      </tbody>
   </table>
   <?php do_action('woocommerce_after_cart_table'); ?>
</form>

<?php do_action('woocommerce_before_cart_collaterals'); ?>

<div class="cart-collaterals">
   <?php
   /**
    * Cart collaterals hook.
    *
    * @hooked woocommerce_cross_sell_display
    * @hooked woocommerce_cart_totals - 10
    */
   do_action('woocommerce_cart_collaterals');
   ?>
</div>

<?php do_action('woocommerce_after_cart'); ?>