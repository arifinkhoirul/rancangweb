import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const testimonialSwiper = new Swiper('.testimonials-carousel', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    grabCursor: true,
    speed: 800,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
});
