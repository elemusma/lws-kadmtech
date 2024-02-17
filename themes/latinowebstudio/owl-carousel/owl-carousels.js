$('.products-carousel').owlCarousel({
    // center: true,
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    // autoHeight: false,
    // autoHeightClass: 'owl-height',
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 2500,
    autoplaySpeed: 5000, // this seems to make it autoscroll
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    responsive: {
        0: {
            items: 2,
            // slideBy: 2
        },
        600: {
            items: 3,
            // slideBy: 3
        },
        1000: {
            items: 4,
            // slideBy: 4
        }
    }
});

$('.gallery-carousel').owlCarousel({
    // center: true,
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    // autoHeight: false,
    // autoHeightClass: 'owl-height',
    // stagePadding:170,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 1500, // this seems to make it autoscroll
    autoplayHoverPause: false,
    slideBy: 1,
    // animateIn: 'fadeIn',
    // animateOut: 'fadeOut',
    navText: ["<img src='https://buildupuniversity.com/wp-content/uploads/2024/02/Arrow-Circle-Left-Gold.png' />", "<img src='https://buildupuniversity.com/wp-content/uploads/2024/02/Arrow-Circle-Right-Gold.png' />"],
    responsive: {
        0: {
            items: 1,
            // slideBy: 2
        },
        600: {
            items: 2,
            // slideBy: 3
        },
        1000: {
            items: 3,
            // slideBy: 4
        }
    }
});

$('.big-gallery').owlCarousel({
    // center: true,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    // stagePadding:170,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplaySpeed: 2000,
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    items: 1,
    // responsive: {
    //     0: {
    //         items: 1
    //     },
    //     600: {
    //         items: 1
    //     },
    //     1000: {
    //         items: 1
    //     }
    // }
});

$('.small-gallery').owlCarousel({
    // center: true,
    // rtl: true,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    // stagePadding:170,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplaySpeed: 3000,
    autoplayHoverPause: false,
    animateOut: 'slideOutRight',
    animateIn: 'slideInLeft',
    // animateIn: 'fadeIn',
    // animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    items: 1,
    // responsive: {
    //     0: {
    //         items: 1
    //     },
    //     600: {
    //         items: 1
    //     },
    //     1000: {
    //         items: 1
    //     }
    // }
});

$('.triangle-carousel').owlCarousel({
    // center: true,
    // rtl: true,
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    // stagePadding:170,
    autoplay: true,
    autoplayTimeout: 3500,
    autoplaySpeed: 3000,
    autoplayHoverPause: false,
    // animateOut: 'slideOutRight',
    // animateIn: 'slideInLeft',
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    // navText : ["<img src='/wp-content/uploads/2021/07/Arrow-Left-Blair-ITC.png' />","<img src='/wp-content/uploads/2021/07/Arrow-Right-Blair-ITC.png' />"],
    items: 1,
    // responsive: {
    //     0: {
    //         items: 1
    //     },
    //     600: {
    //         items: 1
    //     },
    //     1000: {
    //         items: 1
    //     }
    // }
});

$('.testimonial-carousel').owlCarousel({
    // center: true,
    loop: false,
    margin: 0,
    nav: true,
    dots: false,
    autoHeight: true,
    autoHeightClass: 'testing-height-class',
    // stagePadding:170,
    autoplay: false,
    autoplayTimeout: 2500,
    autoplaySpeed: 5000, // this seems to make it autoscroll
    autoplayHoverPause: false,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: ["<img src='https://buildupuniversity.com/wp-content/uploads/2024/02/Arrow-Circle-Black-Left.png' />", "<img src='https://buildupuniversity.com/wp-content/uploads/2024/02/Arrow-Circle-Black-Right.png' />"],
    items: 1
    // responsive: {
    //     0: {
    //         items: 1,
    //         // slideBy: 2
    //     },
    //     600: {
    //         items: 2,
    //         // slideBy: 3
    //     },
    //     1000: {
    //         items: 3,
    //         // slideBy: 4
    //     }
    // }
});