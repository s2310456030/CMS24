
/*!
 * kwm24 v1.0.0 (https://fh-ooe.at/campus-hagenberg)
 * Copyright 2017-2024 Alexander Wimmer
 * Licensed under the GPL-2.0-or-later license
 */
console.log("Hey");
// Banner slider
const maskSwiper = new Swiper('.mask-swiper', {
    // Optional parameters
    loop: true, // Enables looping of slides

    // If we need pagination
    pagination: {
        el: '.swiper-pagination', // Pagination element
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next', // Button to go to the next slide
        prevEl: '.swiper-button-prev', // Button to go to the previous slide
    },

    autoplay: {
        delay: 10000, // Auto-advance delay in milliseconds
    },

    centeredSlides: true, // Centers the active slides

    effect: 'slide', // Transition effect
});