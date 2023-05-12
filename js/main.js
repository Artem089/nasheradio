

$(document).ready(function () {
  $('.slider').slick({
    dots: false, // показывать точки-индикаторы
    arrows: false,
    infinite: true, // зациклить слайдер
    speed: 300, // скорость анимации
    slidesToShow: 3, // показывать 3 слайда за раз
    slidesToScroll: 1, // прокручивать по 1 слайду
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});
