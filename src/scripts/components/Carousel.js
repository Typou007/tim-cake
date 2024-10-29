import Swiper from 'swiper/bundle';

export default class Carousel {
  constructor(element) {
    this.element = element;

    this.options = {
      slidesPerView: 1,
      spaceBetween: 0,
      pagination: {
        el: this.element.querySelector('.swiper-pagination'),
        clickable: true,
      },
      navigation: {
        nextEl: this.element.querySelector('.swiper-button-next'),
        prevEl: this.element.querySelector('.swiper-button-prev'),
      },
    };
    this.init();
  }
  init() {
    this.setOptions();
    new Swiper(this.element, this.options);
    console.log('alloha');
  }
  setOptions() {
    if ('split' in this.element.dataset) {
      this.options.breakpoints = { 768: { slidesPerView: 3 } };
    }
    if (`autoplay` in this.element.dataset) {
      this.options.autoplay = {
        delay: 5000,
        pauseOnMouseEnter: true,
        disableOnInteraction: true,
      };
    }
    if (`loop` in this.element.dataset) {
      this.options.loop = true;
    }
    if (`slides` in this.element.dataset) {
      const slidesValue =
        this.element.dataset
          .slides; /*extrait la valeur de l'attribut data-slides, permet d'accéder aux attributs d'un élément HTml,  récupère la valeur de l'attribut*/
      const slidesPerView =
        slidesValue === 'auto' ? 'auto' : parseFloat(slidesValue);
      this.options.slidesPerView = slidesPerView || this.options.slidesPerView;
    }
  }
}
