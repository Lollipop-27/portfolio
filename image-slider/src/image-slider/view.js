document.querySelectorAll('.wp-block-portfolio-blocks-image-slider .swiper').forEach(slider => {
    const loop = slider.dataset.loop === '1';
    const autoplayDelay = parseInt(slider.dataset.autoplay, 10) || 0;

    new Swiper(slider, {
        loop: loop,
        autoplay: false, // set false if you don't want automatic switching
        pagination: { el: slider.querySelector('.swiper-pagination'), clickable: true },
        navigation: { 
            nextEl: slider.querySelector('.swiper-button-next'), 
            prevEl: slider.querySelector('.swiper-button-prev') 
        },
    });
});
