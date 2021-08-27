const swiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 700,
    // autoplay: {
    //     delay: 5000,
    //   },
    // autoHeight: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 100,
});