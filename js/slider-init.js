document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.image-slider-frontend').forEach((el) => {
        new Swiper(el, {
            loop: true,
            slidesPerView: 1,
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                clickable: true,
            },
        });
    });
});
