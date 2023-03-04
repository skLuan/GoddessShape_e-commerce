console.log('yay');
$swiperProductThumb = new Swiper(".swiper-single-thumb", {
  loop: true,
  slidesPerView: 4,
  centeredSlides: true,
});

$swiperProduct = new Swiper(".swiper-single-product", {
    loop: true,
    spaceBetween: 20,
    thumbs: {
        swiper: $swiperProductThumb,
    }
});

try {
    


} catch (error) {
    
}