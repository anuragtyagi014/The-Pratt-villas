<?php
/* Template Name: Booking Page Template */

get_header();
?>
<!-- Page Header Start -->

<section class="page__header" style="background-image:url('https://theprattvillas.com/wp-content/uploads/2023/02/pexels-pixabay-164338.jpg')">
    <div class="container">
        <h3 class="search__title">Book Now</h3>
    </div>
</section>

<!-- Page Header End -->

<!-- Book Section Start -->


<section class="book__section">
    <div class="container-fluid">
        <div class="book__search">
            <div class="row">
                <div class="col-lg-2 offset-lg-1">
                    <div class="theme__form-group">
                        <label for="">Check In</label>
                        <input type="text" class="theme__form-control" id="bookingCheckIn">
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="theme__form-group">
                        <label for="">Check Out</label>
                        <input type="date" class="theme__form-control">
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="theme__form-group">
                        <label for="">Guests</label>
                        <input type="text" class="theme__form-control">
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="theme__form-group">
                        <label for="">Furnished / Unfurnished</label>
                        <div class="theme__select-wrapper">
                            <select name="" id="" class="theme__form-control">
                                <option value="">Furnished</option>
                                <option value="">Unfurnished</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="theme__form-group">
                        <label for="">&nbsp;</label>
                        <button class="form__submit"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>


            </div>
        </div>
        <div class="book_results">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="theme__table-overflow">
                        <table class="theme__table">
                            <thead>
                                <tr>
                                    <th>Sno.</th>
                                    <th>Modal</th>
                                    <th>Available Date</th>
                                    <th>Guests</th>
                                    <th>Furnished / Unfurnished</th>
                                    <th>Book</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $args = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => 30,
                                );

                                $loop = new WP_Query($args);
                                $productloopcount = 1;
                                while ($loop->have_posts()) : $loop->the_post();
                                    global $product;
                                ?>
                                    <tr>
                                        <td><?php echo $productloopcount; ?></td>
                                        <td><?php echo get_the_title(); ?></td>
                                        <td><?php echo get_the_date('Y-m-d', $product->get_id()); ?></td>
                                        <td>8</td>
                                        <td>Furnished</td>
                                        <td>
                                            <a class="book__btn" href="javascript:void(0)">Book
                                                <div class="cicled__btn">
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

                                <?php
                                    $productloopcount++;
                                endwhile;
                                wp_reset_query();
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Book Section End -->

<?php get_footer(); ?>