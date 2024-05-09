<?php
/* Template Name: Buyers Page Template */

get_header();
?>



<!-- Hero v2 Section start -->
<section class="page__header hero-v2__section" style="background-image:url('https://theprattvillas.com/wp-content/uploads/2023/02/pexels-pixabay-271816.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="search__wrapper">
                    <h2 class="search__title">
                        <span class="toggle__buy active">Find homes first. <br> Tour homes fast.</span>
                        <span class="toggle__rent">Local rentals <br> at your fingertips</span>
                        <span class="toggle__sell">1% listing fee <br> when you buy + sell </span>
                        <span class="toggle__mortgage">Compare lenders <br> and find a low rate</span>
                        <span class="toggle__homeEstimate">See your home's <br> Redfin Estimate</span>
                    </h2>
                    <ul class="search__toggle">
                        <li data-toggle="search" data-target=".toggle__buy" class="active">Buy</li>
                        <li data-toggle="search" data-target=".toggle__rent">Rent</li>
                        <li data-toggle="search" data-target=".toggle__sell">Sell</li>
                        <li data-toggle="search" data-target=".toggle__mortgage">Mortgage</li>
                        <li data-toggle="search" data-target=".toggle__homeEstimate">Home Estimate</li>
                    </ul>

                    <div class="search__bars">
                        <div class="toggle__buy active">
                            <div class="search__row">
                                <input type="text" class="theme__form-control" placeholder="City, Address, School, Agent, ZIP">
                                <button class="search__btn"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="toggle__rent">
                            <div class="search__row">
                                <input type="text" class="theme__form-control" placeholder="City, Address, School,Building, ZIP">
                                <button class="search__btn"><i class="fas fa-search"></i></button>
                            </div>
                        </div>

                        <div class="toggle__sell">
                            <div class="search__row">
                                <input type="text" class="theme__form-control" placeholder="Enter your steeet address">
                                <button class="search__btn">Next</button>
                            </div>
                        </div>

                        <div class="toggle__mortgage">
                            <div class="search__row">
                                <input type="text" class="theme__form-control" placeholder="City, Country, ZIP">
                                <button class="search__btn"><i class="fas fa-search"></i></button>
                            </div>
                        </div>

                        <div class="toggle__homeEstimate">
                            <div class="search__row">
                                <input type="text" class="theme__form-control" placeholder="Enter your street address">
                                <button class="search__btn"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero v2 Section start -->


<!-- Property Features Start -->

<section class="property__features">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="property__img">
                    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-ender-vatan-2932549.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="property__content">
                    <h2>Sell for more than the home next door</h2>
                    <p>Local Redfin Agents price your home right and make it shine online. Get started with a free consultation.</p>

                    <div class="property__search-wrapper">
                        <div class="search__row">
                            <input type="text" class="theme__form-control" placeholder="Enter your steeet address">
                            <button class="search__btn">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="property__content">
                    <h2>Your perfect rental is now on Redfin</h2>
                    <p>Finding the apartment, condo, or house you’ll love to rent just got easier.</p>
                    <div class="property__search-wrapper">
                        <div class="search__row">
                            <input type="text" class="theme__form-control" placeholder="City, Address, School, Agent, ZIP">
                            <button class="search__btn"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="property__img">
                    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-saviesa-home-2089696.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="property__img">
                    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-level-media-3016430.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="property__content">
                    <h2>Get real-time market updates</h2>
                    <p>We’re bringing you the latest on how COVID-19 is impacting the real estate market.</p>
                    <a href="javascript:void(0);" class="theme_primary-btn">See housing news</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="property__content">
                    <h2>Get the Redfin app</h2>
                    <p>Take your home search to the next level with our top-rated real estate apps for iOS and Android.</p>
                    <p>Scan the QR code with your phone's camera to download the app.</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="property__img">
                    <img src="https://theprattvillas.com/wp-content/uploads/2023/02/pexels-karl-solano-2883049.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Property Features End -->

<?php get_footer(); ?>