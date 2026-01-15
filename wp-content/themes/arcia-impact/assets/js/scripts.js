


// mobile menu
jQuery(document).ready(function ($) {

    // Hamburger menu
    $('.menu-trigger').click(function() {
        $('.hamburger-menu').addClass('isOpen');
    } );

    $('.close-icon').click(function() {
        $('.hamburger-menu').removeClass('isOpen');
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
