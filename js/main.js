popup = {
    init: function(){
      $('figure').click(function(){
        popup.open($(this));
      });
      
      $(document).on('click', '.popup img', function(){
        return false;
      }).on('click', '.popup', function(){
        popup.close();
      })
    },
    open: function($figure) {
      $('.gallery').addClass('pop');
      $popup = $('<div class="popup" />').appendTo($('body'));
      $fig = $figure.clone().appendTo($('.popup'));
      $bg = $('<div class="bg" />').appendTo($('.popup'));
      $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
      $shadow = $('<div class="shadow" />').appendTo($fig);
      src = $('img', $fig).attr('src');
      $shadow.css({backgroundImage: 'url(' + src + ')'});
      $bg.css({backgroundImage: 'url(' + src + ')'});
      setTimeout(function(){
        $('.popup').addClass('pop');
      }, 10);
    },
    close: function(){
      $('.gallery, .popup').removeClass('pop');
      setTimeout(function(){
        $('.popup').remove()
      }, 100);
    }
  }
  
  popup.init()


  carousal();

        function carousal() {
            $("#banner-slider-demo-17").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                nav: false,
                dots: true,
                navRewind: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                loop: true
            });
        }


        $('.owl-carousel').owlCarousel({
            autoplay: true,
            /*center: true,*/
            loop: true,
            infinite:true,
            nav: false,
            rtl: true,
            dots:false,
            items: 4,
            autoplayTimeout:4000,
        autoplayHoverPause:true,
          });