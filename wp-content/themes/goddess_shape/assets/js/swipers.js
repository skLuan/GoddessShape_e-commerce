$swiperProductThumb = new Swiper(".swiper-single-thumb", {
  slidesPerView: 3,
  breakpoints: {
    1000: {
      slidesPerView: 5,

    }
  }
});

$swiperProduct = new Swiper(".swiper-single-product", {
  loop: true,
  spaceBetween: 20,
  thumbs: {
    swiper: $swiperProductThumb,
  },
});

if (window.innerWidth > 1000) {
  $swiperProductThumb.changeDirection("vertical");
  $swiperProductThumb.slidesPerView = 5;
} else {
  $swiperProductThumb.changeDirection("horizontal");
}

try {
} catch (error) {}
