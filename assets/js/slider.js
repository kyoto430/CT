console.log('slider running...');

new Swiper('.partners__slider', {
  spaceBetween: 20,
  loop: false,
  navigation: {
    prevEl: '.slider__btn-prev-1',
    nextEl: '.slider__btn-next-1',
  },
  pagination: {
    el: '.partners-slider__pagination',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
    },
    744: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

new Swiper('.trust__slider', {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: false,
  navigation: {
    prevEl: '.slider__btn-prev-2',
    nextEl: '.slider__btn-next-2',
  },
  pagination: {
    el: '.trust-slider__pagination',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 2,
    },
    744: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

new Swiper('.sert__slider', {
  slidesPerView: 3,
  spaceBetween: 20,
  loop: false,
  navigation: {
    prevEl: '.slider__btn-prev-3',
    nextEl: '.slider__btn-next-3',
  },
  pagination: {
    el: '.sert-slider__pagination',
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
    },
    744: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
