


// mobile menu
jQuery(document).ready(function ($) {
    $('.menu-trigger').on('click', function () {
        $(this).toggleClass('active');
        
        if ($('.hamburger-menu').hasClass('isOpen')) {
            $('.hamburger-menu').removeClass('isOpen');
            $('.menu-overlay').removeClass('active');
        } else {
            $('.hamburger-menu').addClass('isOpen');
            $('.menu-overlay').addClass('active');
        }
    });

    $('.menu-overlay').on('click', function () {
        $('.hamburger-menu').removeClass('isOpen');
        $('.menu-overlay').removeClass('active');
        $('.menu-trigger').removeClass('active');
    });
});






// client review
// jQuery(document).ready(function ($) {
//     $('.client-review').slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: true,
//         prevArrow: `<span type="button" class="slick-prev">
//             <img class="svg" src="${my_ajax_object.angleLeftIcon}" alt="Previous">
//         </span>`,
//         nextArrow: `<span type="button" class="slick-next">
//             <img class="svg" src="${my_ajax_object.angleRightIcon}" alt="Next">
//         </span>`,
//         dots: false,
//         centerMode: false,
//     });
// });
