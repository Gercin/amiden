$(document).ready(function() {
    const main_events = new Swiper('.main-events__list.swiper', {
        navigation: {
            nextEl: '.main-events__list .swiper-button-next',
            prevEl: '.main-events__list .swiper-button-prev',
        },
    });


    const main_news = new Swiper('.main-news__list.swiper', {
        navigation: {
            nextEl: '.main-news__list .swiper-button-next',
            prevEl: '.main-news__list .swiper-button-prev',
        },
        slidesPerView: 1,
        //spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                //spaceBetween: 20
            },
            // when window width is >= 480px
            500: {
                slidesPerView: 1.5,
                //spaceBetween: 30
            },
            // when window width is >= 640px
            991: {
                slidesPerView: 2,
                //spaceBetween: 40
            },
            1230: {
                slidesPerView: 2.5,
                //spaceBetween: 40
            }
        }
    });
})