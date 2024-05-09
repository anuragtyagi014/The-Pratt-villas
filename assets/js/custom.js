// On DOM Ready
$(document).ready(function () {
  // Hero Text animation
  const heroTimeline = gsap.timeline({ duration: 0.25 });

  $(".hero__slider").on("afterChange", function (slick, currentSlide) {
    // reset styling before animation
    gsap.to(".hero__slide:not(.slick-active) .hero__slider-content-heading", {
      opacity: 0,
      skewX: 5,
      rotateZ: 3,
    });
    gsap.to(
      ".hero__slide:not(.slick-active) .hero__slider-content-subheading",
      { opacity: 0 }
    );
    gsap.to(".hero__slide:not(.slick-active) .hero__slider-button", {
      opacity: 0,
    });
    gsap.to(".hero__slide:not(.slick-active) .hero__btn", { opacity: 0 });

    // Animate on slide change
    heroTimeline
      .to(".slick-active .hero__slider-content-heading", {
        opacity: 1,
        skewX: 0,
        rotate: 0,
      })
      .to(".slick-active .hero__slider-content-subheading", { opacity: 1 })
      .to(".slick-active .hero__slider-button", { opacity: 1 })
      .to(".slick-active .hero__btn", { opacity: 1 });
  });

  //  Hero slider onInit
  $(".hero__slider").on("init", function () {
    heroTimeline
      .to(".slick-active .hero__slider-content-heading", {
        opacity: 1,
        skewX: 0,
        rotate: 0,
      })
      .to(".slick-active .hero__slider-content-subheading", { opacity: 1 })
      .to(".slick-active .hero__slider-button", { opacity: 1 })
      .to(".slick-active .hero__btn", { opacity: 1 });
  });

  // Hero Slider
  $(".hero__slider").slick({
    autoplay: true,
    autoplaySpeed: 6000,
    pauseOnFocus: false,
    pauseOnHover: false,
    dots: true,
    arrows: false,
    customPaging: function (slider, i) {
      return `<div class="slider__dots-wrapper">
                            <svg width="20" height="20">
                            <mask id="carousel-bullet-mask-358">
                            <circle cx="10" cy="10" r="9" stroke-width="2" stroke="#ffffff" fill="none"></circle>
                            </mask>
                            <g mask="url(#carousel-bullet-mask-358)">
                            <circle class="bullet-bg" cx="10" cy="10" r="10" fill="#ffffff"></circle>
                            <circle class="bullet-progress-circle" cx="10" cy="10" r="9" stroke-width="3" fill="none"></circle>
                            </g>
                        </svg>
                    </div>`;
    },
  });

  // hero subeheading blip effect
  $(".hero__slider-content-subheading").bxSlider({
    speed: 50,
    auto: true,
    mode: "fade",
  });

  // Content slider
  const contentSlider = $(".content_slider").slick({
    // autoplay: true,
    autoplaySpeed: 6000,
    pauseOnFocus: false,
    pauseOnHover: false,
    dots: true,
    speed: 0,
    fade: true,
    customPaging: function (slider, i) {
      return `<div class="slider__dots-wrapper">
                            <svg width="20" height="20">
                            <mask id="carousel-bullet-mask-358">
                            <circle cx="10" cy="10" r="9" stroke-width="2" stroke="#ffffff" fill="none"></circle>
                            </mask>
                            <g mask="url(#carousel-bullet-mask-358)">
                            <circle class="bullet-bg" cx="10" cy="10" r="10" fill="#ffffff"></circle>
                            <circle class="bullet-progress-circle" cx="10" cy="10" r="9" stroke-width="3" fill="none"></circle>
                            </g>
                        </svg>
                    </div>`;
    },
    arrows: false,
  });

  // Append all news text in slick dots
  $(".content_slider .slick-dots").append($(".content_slider-view-more"));

  //Footer sublinks toggle
  $(".footer__social-link-has-sublinks a").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("footer__social-link-active");
    $(this).siblings("ul").slideToggle(350);
  });

  // Newsletter Popup
  $(".newsletter__btn, .newsletter__close-btn").click(function () {
    $("body").toggleClass("hide__overflow");
    $(".newsletter-popup__overlay").toggleClass("newletter-popup__show");

    if ($(".newsletter-popup__overlay").hasClass("newletter-popup__show")) {
      console.log("class added");
      gsap.fromTo(
        $(".newsletter-popup__overlay .theme__form-group"),
        { opacity: 0, y: 10 },
        { opacity: 1, y: 0, stagger: 0.15 }
      );
    }
  });

  //Header popup sublinks
  $(document).on("click", ".header__popup-navigation-has-list", function () {
    $(this).toggleClass("show__list");
    $(this).find("ul").slideToggle(350);
  });

  // Header popup navigation

  $("[data-toggle='menu']").click(function () {
    const headerPopupTimeline = gsap.timeline({ duration: 0.25 });

    $("body").addClass("hide__overflow");
    const target = $(this).data("target");
    const subPreview = $(target)
      .find(".header__popup-navigation-link-preview")
      .first()
      .clone();
    $(target).find(".header__popup-right-column").html(subPreview);

    headerPopupTimeline
      .to(".hero__section", { rotationY: 15, y: 80 })
      .to(target, { bottom: 0 }, ">-0.30")
      .fromTo(
        $(target).find(".header__popup-navigation-link"),
        { y: 10, opacity: 0, rotateZ: 10, transformOrigin: "left" },
        {
          y: 0,
          opacity: 1,
          rotateZ: 0,
          transformOrigin: "left",
          stagger: { each: 0.15 },
        },
        "<10%"
      )
      .to(
        $(target).find(".header__popup-right-column"),
        { width: "64%" },
        "<50%"
      )
      .fromTo(
        $(target).find(
          ".header__popup-right-column .header__popup-navigation-link-preview"
        ),
        { opacity: 0 },
        { opacity: 1 }
      );
  });

  $(".header__popup-close-btn .cicled__btn").click(function () {
    const headerPopupTimeline = gsap.timeline({ duration: 0.25 });

    $("body").removeClass("hide__overflow");
    headerPopupTimeline
      .to(".header__popup-navigation-wrapper", { bottom: "-100%" })
      .to(".hero__section", { rotationY: 0, y: 0 }, ">-0.30")
      .to($(".header__popup-right-column"), { width: "0" })
      .to(
        $(".header__popup-right-column .header__popup-navigation-link-preview"),
        { opacity: 0 }
      );
  });

  // Header links grey
  $(".header__popup-navigation-link").mouseenter(function () {
    $(".header__popup-navigation-link").removeClass("linkActiveHover");
    $(this).parents(".header__popup-navigation").addClass("greyout");
    $(this).addClass("linkActiveHover");

    const subPreview = $(this)
      .find(".header__popup-navigation-link-preview")
      .clone();

    $(".header__popup-right-column").html(subPreview);
  });

  // Content slider animation
  const contentSlideTimeline = gsap.timeline();

  const contentAnimationDone = (command) => {
    clearInterval(timeoutId);
    $(".content_slide").removeClass("contentAnimating");
    $(".content_slider").slick(command);
  };

  function contentSlideHideAnimation(command) {
    contentSlideTimeline
      .to(".content_slide-read-more", {
        y: 10,
        opacity: 0,
        onStart: () => $(".content_slide").addClass("contentAnimating"),
      })
      .to(".content_slide-text  p", { y: 10, opacity: 0 })
      .to(".content_slide-text h2", { y: 10, opacity: 0, rotateZ: 5 })
      .to(".content_slide-img img", { opacity: 0 }, "<")
      .to(".content_slide-img", {
        rotateY: 90,
        onComplete: () => contentAnimationDone(command),
        transformOrigin: "right",
      });
  }

  function contentSlideShowAnimation() {
    contentSlideTimeline
      .to(".content_slide-img", {
        rotateY: 0,
        transformOrigin: "left",
        onStart: () => $(".content_slide").addClass("contentAnimating"),
      })
      .to(".content_slide-img img", { opacity: 1 })
      .to(".content_slide-text h2", { y: 0, opacity: 1, rotateZ: 0 }, "<")
      .to(".content_slide-text  p", { y: 0, opacity: 1 })
      .to(".content_slide-read-more", {
        y: 0,
        opacity: 1,
        onComplete: () => $(".content_slide").removeClass("contentAnimating"),
      });
  }

  let timeoutId = setTimeout(function () {
    contentSlideHideAnimation("slickNext");
  }, 6000);

  $(".content_slider").on("afterChange", function () {
    timeoutId = setTimeout(function () {
      contentSlideHideAnimation("slickNext");
    }, 6000);
    contentSlideShowAnimation();
  });

  $(".content_slider-right-arrow,  .content_slider-left-arrow").click(
    function () {
      if ($(".content_slide").hasClass("contentAnimating")) return;
      clearTimeout(timeoutId);
      const command = $(this).data("command");
      contentSlideHideAnimation(command);
    }
  );

  // Service Grid Section Animations
  const boxes = gsap.utils.toArray(".grid__column");
  boxes.forEach((box) => {
    gsap.to(box, {
      scrollTrigger: {
        start: "top 70%",
        trigger: box,
        onEnter: () => {
          const gridItemsTimeline = gsap.timeline({ duration: 0.5 });
          gridItemsTimeline
            .to(box, { width: "100%" })
            .to($(box).find(".grid_item"), { opacity: 1 })
            .fromTo(
              $(box).find(".grid__subbheading"),
              { opacity: 0, y: 5 },
              { opacity: 1, y: 0 },
              "<50%"
            )
            .fromTo(
              $(box).find(".grid__heading"),
              { opacity: 0, y: 5 },
              { opacity: 1, y: 0 },
              "<50%"
            )
            .fromTo(
              $(box).find(".grid__text"),
              { opacity: 0, y: 5 },
              { opacity: 1, y: 0 },
              "<50%"
            )
            .fromTo(
              $(box).find(".grid__button"),
              { opacity: 0, y: 5 },
              { opacity: 1, y: 0 },
              "<50%"
            );
        },
      },
    });
  });

  // Loader
  $('body').addClass('hide__overflow');
  setTimeout(() => {
      $(".loader__wrapper").fadeOut(250);
      $('body').removeClass('hide__overflow');
  }, 1500);

  // Buyers Search Toggle
  $('[data-toggle="search"]').click(function () {
    const target = $(this).data("target");

    $(".search__title span").hide(0);
    $(".search__bars > div").hide(0);
    $(".search__toggle li").removeClass("active");

    $(target).fadeIn(350);
    $(this).addClass("active");
  });

  // Header toggle on scroll
  let lastScrollPosition = 0;
  $(window).scroll(function () {
    if (lastScrollPosition > $(window).scrollTop()) {
      $(".header").addClass("show__header");
    } else {
      $(".header").removeClass("show__header");
    }

    lastScrollPosition = $(window).scrollTop();
  });

  // Header Dark/Light on scroll

  const darkSections = gsap.utils.toArray(".make_header-dark");
  darkSections.forEach((box) => {
    ScrollTrigger.create({
      trigger: box,
      start: "10px top",
      onEnter: function () {
        $(".header").addClass("header__dark");
      },
      onEnterBack: function () {
        $(".header").addClass("header__dark");
      },
      onLeaveBack: function () {
        $(".header").removeClass("header__dark");
      },
      onLeave: function () {
        $(".header").removeClass("header__dark");
      },
    });
  });

  const lightSections = gsap.utils.toArray(".make_header-light");
  lightSections.forEach((box) => {
    ScrollTrigger.create({
      trigger: box,
      start: "10px top",
      onEnter: function () {
        $(".header").addClass("header__light");
      },
      onEnterBack: function () {
        $(".header").addClass("header__light");
      },
      onLeaveBack: function () {
        $(".header").removeClass("header__light");
      },
      onLeave: function () {
        $(".header").removeClass("header__light");
      },
    });
  });

  // Booking Slides

  // get the number of slides

  $(".booking__slides").each(function (idx, slider) {
    var total = $(slider).find(".booking__slide-item").length,
      rand = Math.floor(Math.random() * total);

    $(slider).slick({
      autoplay: false,
      arrows: true,
      dots: true,
      infinite: false,
      prevArrow:
        "<button type='button' class='slick-prev'><i class='fas fa-chevron-left'></i></button>",
      nextArrow:
        "<button type='button' class='slick-next'><i class='fas fa-chevron-right'></i></button>",
    });

    $(slider).slick("slickGoTo", rand);
  });

  // Sellers popup modal
  $('[data-toggle="modal"]').click(function () {
    const target = $(this).data("target");
    $(target).fadeIn(350);

    gsap
      .fromTo(
        $(target).find(".theme__form-group"),
        { opacity: 0, y: 10 },
        { opacity: 1, y: 0, stagger: 0.15 }
      )
      .fromTo(
        $(target).find(".form__submit"),
        { opacity: 0, y: 10 },
        { opacity: 1, y: 0 }
      );
  });

  $(".theme-modal__overlay").click(function () {
    $(this).fadeOut(350);
  });

  $(".theme-modal__wrapper").click((e) => e.stopPropagation());

  // Close Popup
  $(".theme-modal__close-btn").click(function () {
    $(this).parents(".theme-modal__overlay").fadeOut(350);
  });

  // // Daterange picker
  // $("#bookingCheckIn").daterangepicker();

  // // Search checkin/Checkout
  // $("#checkInCheckOut").daterangepicker();

  // // Search checkin/Checkout
  // $("#mobCheckIn").daterangepicker({ singleDatePicker: true });
  // $("#mobCheckOut").daterangepicker({ singleDatePicker: true });

  // Grid menu dropdown
  $(".grid_item-menu-has-submenu").click(function () {
    if ($(this).hasClass("grid_item-menu-active")) {
      $(this).removeClass("grid_item-menu-active");
      $(this).find("ul").slideUp(350);
    } else {
      $(".grid_item-menu-has-submenu").removeClass("grid_item-menu-active");
      $(".grid_item-menu-has-submenu ul:visible").slideUp(350);
      $(this).find("ul").slideDown(350);
      $(this).addClass("grid_item-menu-active");
    }
  });

  $(".grid_item-menu-has-submenu ul").click((e) => e.stopPropagation());

  // Header Scroll Effect
  $("[data-scroll]").click(function () {
    const target = $(this).data("target");

    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(target).offset().top,
      },
      2000
    );
  });

  // grid Submenu
  $("[data-toggle-right-menu]").click(function () {
    const target = $(this).data("target");

    $(".grid__right-side-item").hide();

    $(target).show();
    $(".grid__right-side").addClass("grid__right-side-item-active");
    $(".grid__right-side").show();

    if (
      !jQuery(target).find(".right-slide-items").hasClass("slick-initialized")
    ) {
      jQuery(target).find(".right-slide-items").slick({
        dots: false,
        fade: true,
        arrows: false,
        autoplay: true,
        infinite: 0,
        autoplaySpeed: 2000,
        speed: 3000,
        pauseOnHover: false,
        pauseOnFocus: false,
      });
    }
  });

  // Grid Submenu image toggles
  // $('[data-toggle-pics]').click(function(){
  //   $('.grid__item-menu-list-content > div').hide();
  //   $('.grid_item-menu-list-content-pictures').show();
  // });

  // $('[data-toggle-videos]').click(function(){
  //   $('.grid__item-menu-list-content > div').hide();
  //   $('.grid_item-menu-list-content-videos').show();
  // });

  // Booking categories slide
  $(".booking-categories__list").slick({
    // variableWidth: true,
    swipeToSlide: true,
    prevArrow:
      "<button type='button' class='slick-prev'><i class='fas fa-chevron-left'></i></button>",
    nextArrow:
      "<button type='button' class='slick-next'><i class='fas fa-chevron-right'></i></button>",
    infinite: false,
    slidesToShow: 9,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // For Toggle Menu
  $(".tgl-menu-btn").click(function () {
    $(".mobile-menu").slideDown();
    $("body").addClass("mobile-menu-open");
  });

  $(".crss").click(function () {
    $(".mobile-menu").slideUp();
    $("body").removeClass("mobile-menu-open");
  });

  $(function () {
    var children = $(".mobile_sub > a").filter(function () {
      return $(this).nextAll().length > 0;
    });
    $('<span class="toChild fa fa-angle-down"></span>').insertAfter(children);
    $(".mobile_sub .toChild").click(function (e) {
      $(this).next().slideToggle(300);
      return false;
    });

    $(".mobile_sub .toChild").click(function () {
      $(this).toggleClass("active-icon");
    });
  });
});

// $(document).ready(function () {

//     let section = document.querySelectorAll('.manin_tab_tenant_portal');
//     let menuLinks = document.querySelectorAll('.section-nav li a');
//     let sectionHeight = document.querySelector('.manin_tab_tenant_portal').offsetHeight;
//     let sectionStartingPointArray = [];
//     let menuLinksArray = [];
//     section.forEach((sec) => { sectionStartingPointArray.push(sec.offsetTop); });
//     menuLinks.forEach((menuLink) => { menuLinksArray.push(menuLink); });
//     window.onscroll = () => {
//         let downwardScroll = window.scrollY;
//         sectionStartingPointArray.forEach((sectionStart, sectionIndex) => {
//             if (downwardScroll >= sectionStart - sectionHeight / 2) {
//                 menuLinksArray.forEach((menu) => { menu.parentNode.classList.remove('active'); });
//                 menuLinksArray[sectionIndex].parentNode.classList.add('active');
//             }
//         });
//     }

// })

$(".filter_portel").click(function () {
  $(".section-nav").addClass("active");
});
$(".cross").click(function () {
  $(".section-nav").removeClass("active");
});
$(".section-nav li a").click(function () {
  $(".section-nav").removeClass("active");
});

// Date Picker calender single page

$(".main_sel_new").click(function () {
  $(".drop_new_ado").slideToggle();
  $(this).toggleClass("active");
});


$(".page-template-thank-you header.header").addClass('header__dark');