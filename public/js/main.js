$( window ).on( "load", function() {
        console.log( "window loaded" );
        $('.loading').fadeOut();
        $('.wrapper').addClass('body-ef')
    });
$(document).ready(function($){
  if($('header.top').length){
    $(window).scroll(function(){
      /*var anchor = $('header.top').offset().top;*/
      var anchor = $('header.top').offset().top;
      /*console.log(anchor);*/
      if(anchor >= 130){
          $('header.top').addClass('cmenu');
          /*$('.cate-list').removeClass('on');*/
          $('.tcate-list').slideUp();
      }
      else{
          $('header.top').removeClass('cmenu');
      }
    });
  }
  $('[data-toggle="tooltip"]').tooltip()
  $('.video-modal').on('hide.bs.modal', function (e) {
    $('.video-modal iframe').attr('src', '');
  })
  /*$("#menu").mmenu({
    "extensions": [
          "pagedim-black",
          "shadow-panels"
       ]
      // options
      "offCanvas": {
              "position": "right"
          }
    }, {
        // configuration
        clone: true
  });*/

  $('.toggle-menu').on('click', function(event) {
    event.preventDefault();
    /* Act on the event */
    $('.menu').slideToggle();
  });

  /*if($('.counter').length){
    $('.counter').counterUp({
        delay: 350,
        time: 3000
    });
  }*/

  new WOW().init();

  if($('.to-top').length){
    $('.to-top').on('click',function(event){
        event.preventDefault();
    $('body, html').stop().animate({scrollTop:0},800)});
    $(window).scroll(function(){
        var anchor=$('.to-top').offset().top;
        if(anchor>1000){
            $('.to-top').css('opacity','1')
        }
        else{
            $('.to-top').css('opacity','0')
        }
    });
  }

  $('.menu-btn').click(function(){
    $('#nav-icon3').toggleClass('open');
    $('.menu').toggleClass('open');
  });

  $('.search-open').on('click', function(event) {
    event.preventDefault();
    $('.search-frm').toggleClass('on');
  });

  $(".button").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input.qty").val();
    if ($button.children().hasClass('fa fa-plus') === true) {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }
    $button.parent().find("input.qty").val(newVal);
    var txt = $('.younger').val() ;
    var txt2 = $('.older').val() ;
    $('.choice-child').val(txt + ' trẻ 0 - 3, ' + txt2 + ' trẻ 4 - 12');
  });
  $('.choice-child').on('click', function(event) {
    event.preventDefault();
    $('.child-list').toggleClass('open');
  });
  /*$('.child-wrap').on('click', function(event) {
    event.preventDefault();
    $(this).children('.child-list').removeClass('open')
  });*/
  $(document).mouseup(function(e) 
  {
      var container = $(".child-list.open");
      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) 
      {
          container.removeClass('open');
      }
  });
  $('.scroll-link').click(function(e){
      e.preventDefault();
      $('.on').removeClass('on');
      el = $(this);
      name = el.attr('href');
      if($(window).width() >= 992) {
          pos = $(name).position().top;
      }
      /*else {
          pos = $(name).position().top + 80;
      }
      el.addClass('on');*/
      $('html,body').stop().animate({scrollTop:pos},600);
      return false;
  });

  if($('[data-fancybox="gallery"]').length){
    $('[data-fancybox="gallery"]').fancybox({
    // Options will go here
      loop:true,
      animationEffect: "zoom",
      transitionEffect: "zoom-in-out",
    });
  }

  $('.video-content a').on('click', function(event) {
    event.preventDefault();
    var link = $(this).attr('data-link');
    var relink = link.replace("watch?v=", "embed/");
    console.log(relink);
    $('.video-modal .modal-body iframe').attr('src', relink);
  });

  $('.index-slider').slick({
    dots: true,
    arrows:false,
    autoplay:true,
    infinite:true,
    nextArrow: '<button type="button" class="slick-next"><img src="images/right.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/left.png" alt="" title=""></button>',
    focusOnSelect: true,
    fade: false,
    speed: 750,
    autoplaySpeed:5000,
    /*lazyLoad: 'ondemand'*/
  });

  $('.video-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots:false,
    fade: false,
    asNavFor: '.video-nav',
    autoplay:false
  });
  $('.video-nav').slick({
    slidesToShow: 3,
    arrows:true,
    dots:false,
    slidesToScroll: 1,
    asNavFor: '.video-for',
    nextArrow: '<button type="button" class="slick-next"><img src="images/left1.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/right1.png" alt="" title=""></button>',
    vertical: true,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          /*vertical:false,*/
          arrows:true
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          vertical:false,
          arrows:true
        }
      }
    ]
  });

  $('.sdetail-tabscontent').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots:false,
    fade: false,
    asNavFor: '.sdetail-tabs',
    autoplay:false,
    swipeToSlide:true,
    touchMove:true
  });
  $('.sdetail-tabs').slick({
    slidesToShow: 5,
    variableWidth: false,
    arrows:false,
    dots:false,
    swipeToSlide:true,
    touchMove:true,
    draggable:false,
    slidesToScroll: 1,
    asNavFor: '.sdetail-tabscontent',
    nextArrow: '<button type="button" class="slick-next"><img src="images/right1.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/left1.png" alt="" title=""></button>',
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          /*vertical:false,*/
          arrows:true
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          vertical:false,
          arrows:true
        }
      }
    ]
  });

  $('.brand-slider').slick({
    dots: false,
    arrows:true,
    nextArrow: '<button type="button" class="slick-next"><img src="images/right1.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/left1.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 1300,
    autoplaySpeed: 3500,
    slidesToShow: 4,
    rows:3,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          rows:2
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          rows:2
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          rows: 1,
          slidesToScroll: 1,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.allpro-slider').slick({
    dots: false,
    arrows:false,
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    rows:2,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.blog-slider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="images/right-arrow.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/left-arrow.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.bdetail-re-slider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="images/right-arrow.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/left-arrow.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.serpage-slider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="images/right-arrow.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/left-arrow.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 500,
    autoplaySpeed: 3000,
  });

  $('.bdetail-reslider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="images/right1.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="images/left1.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          arrows:true
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.bank-choice').on('click', function(event) {
    console.log('click');
    event.preventDefault();
    $('.bank-choice').parent('.bank-wrap').removeClass('active');
    $(this).parent('.bank-wrap').addClass('active').closest('.bank-wrap').find('input').prop('checked', 'true');
  });
  // filter
  CustomTheme.init();
  //$('.br-current-rating').text('Cảm ơn bạn đã đánh giá'  );

  if($('#example').length){
    var score = parseInt($('.rate-score').text());
    var quan = parseInt($('.rate-quan').text());
    console.log(score, quan);
    $('#example').barrating({
        theme: 'fontawesome-stars-o',
        initialRating:null,
        allowEmpty: null,
        emptyValue: '',
        deselectable: true,
        onSelect: function() {
          var text = parseInt($('#example').next('.br-widget').children('.br-current-rating').text());
          //console.log('Cảm ơn bạn đã bình chọn '+ text + ' sao!');
          quan += 1;
          score = (score + text)/2;
          console.log(score, quan);
          $('#example').next('.br-widget').children('.br-current-rating').css({
            display: 'inline-block',
            color: 'red'
          }); // manually trigger change event when a rating is selected
        }
    });
    //$('#example').barrating('set', 0);
  }

    $('.open').on('click', function(event) {
      event.preventDefault();
      $(this).parent().addClass('open');
      $(this).parent().prev('.pdetail-sh').addClass('open');
    });
    $('.pclose').on('click', function(event) {
      event.preventDefault();
      $(this).parent().removeClass('open');
      $(this).parent().prev('.pdetail-sh').removeClass('open');
    });

    $('.filter-tit').on('click', function(event) {
      event.preventDefault();
      $(this).next('.pro-aside').toggleClass('open');
    });

    var widthwd = $(window).width();
    if(widthwd < 768){
      $('.logovideo video').removeAttr('data-autoplay');
      $('.logovideo video').attr('autoplay', '1');
      $('.logo.wow.bounceInUp').removeClass('wow bounceInUp');
      $('.sabout-tit.wow.bounceInUp').removeClass('wow bounceInUp');
      $('.about-logo.wow.bounceInUp').removeClass('wow bounceInUp');
    }
});
// custom theme
var CustomTheme = function () {

    var _initInstances = function () {


        var activeList = function () {

            var activeListEl = $('[data-list="active"]');

            var activeListLoad = function () {

                activeListEl.each(function(){
                    var el = $(this);
                    var activeItem = el.find('.active');
                    var data = activeItem.data('value');
                    var input = el.closest('[data-list="active"]').siblings('input').first();

                    if(activeItem.length){
                        input.val(data);
                    }else{
                        input.val(0);
                    }
                })


            }();

            var activeListHandle = function () {
                activeListEl.on('click', 'li', function (e) {
                    e.preventDefault();
                    var el = $(this);
                    var parent = el.closest('[data-list="active"]').siblings('input').first();
                    var data = el.data('value');

                    el.siblings().removeClass('active');
                    el.toggleClass('active');
                    // console.log(parent);

                    if (el.hasClass('active')) {
                        parent.val(data)
                    } else {
                        parent.val(0);
                    }

                    return false;
                })
            }();


        }();


        // disable event click a tag
        $('a').on("click", function (e) {
            if ($(this).attr('href') === undefined) {
                e.preventDefault();
                return false;
            }
        });


    }

    return {
        init: function () {
            _initInstances();
        }
    };
}();