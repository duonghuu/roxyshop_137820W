$('.spnoibat-main').on({
      beforeChange: function(event, slick, currentSlide, nextSlide) {
          myLazyLoad.update();
      }
  }).slick({
      lazyLoad: 'ondemand',
      infinite: true,
      accessibility: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 1000,
      arrows: true,
      centerMode: false,
      dots: false,
      draggable: true,
      responsive: [{
          breakpoint: 830,
          settings: {
              slidesToShow: 3
          }
      },{
          breakpoint: 500,
          settings: {
              slidesToShow: 2
          }
      },{
          breakpoint: 330,
          settings: {
              slidesToShow: 1
          }
      }]
  });
  $('.tinnb-main').on({
        beforeChange: function(event, slick, currentSlide, nextSlide) {
            myLazyLoad.update();
        }
    }).slick({
        lazyLoad: 'ondemand',
        infinite: true,
        accessibility: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        centerMode: false,
        dots: false,
        draggable: true,
        responsive: [{
            breakpoint: 830,
            settings: {
                slidesToShow: 2
            }
        },{
            breakpoint: 500,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.themanh-main').on({
          beforeChange: function(event, slick, currentSlide, nextSlide) {
              myLazyLoad.update();
          }
      }).slick({
          lazyLoad: 'ondemand',
          infinite: true,
          accessibility: false,
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: true,
          centerMode: false,
          dots: false,
          draggable: true,
          responsive: [{
              breakpoint: 800,
              settings: {
                  slidesToShow: 2
              }
          },{
              breakpoint: 500,
              settings: {
                  slidesToShow: 2
              }
          },{
              breakpoint: 430,
              settings: {
                  slidesToShow: 1
              }
          }
          ]
      });
  
  $('.sliderma-main').slick({lazyLoad: 'ondemand',
    infinite: true,
    accessibility:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay:true,
    autoplaySpeed:3000,
    speed:1000,
    arrows:false,
    fade:true,
    centerMode:false,
    dots:false,
    draggable:true,
  });