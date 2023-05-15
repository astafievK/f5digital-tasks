new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: -150,
    effect: 'coverflow' ,


    coverflowEffect: {
        rotate: 0,
        stretch: 70,
        shadow: false,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});