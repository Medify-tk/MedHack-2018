'use strict';

// sticky footer
//-----------------------------------------------------------------------------------
if (!Modernizr.flexbox) {
  (function () {
    var $pageWrapper          = $('#page-wrapper'),
        $pageBody             = $('#page-body'),
        noFlexboxStickyFooter = function () {
          $pageBody.height('auto');
          if ($pageBody.height() + $('#header').outerHeight() + $('#footer').outerHeight() < $(window).height()) {
            $pageBody.height($(window).height() - $('#header').outerHeight() - $('#footer').outerHeight());
          } else {
            $pageWrapper.height('auto');
          }
        };
    $(window).on('load resize', noFlexboxStickyFooter);
  })();
}
if (ieDetector.ieVersion == 10 || ieDetector.ieVersion == 11) {
  (function () {
    var $pageWrapper = $('#page-wrapper'),
        $pageBody    = $('#page-body'),
        ieFlexboxFix = function () {
          if ($pageBody.addClass('flex-none').height() + $('#header').outerHeight() + $('#footer').outerHeight() < $(window).height()) {
            $pageWrapper.height($(window).height());
            $pageBody.removeClass('flex-none');
          } else {
            $pageWrapper.height('auto');
          }
        };
    ieFlexboxFix();
    $(window).on('load resize', ieFlexboxFix);
  })();
}

// placeholder
//-----------------------------------------------------------------------------------
$(function () {
  $('input[placeholder], textarea[placeholder]').placeholder();
});

// fixed svg show
//-----------------------------------------------------------------------------
function fixedSvg() {
  var baseUrl = window.location.protocol + '//' + window.location.host + window.location.pathname + window.location.search;
  $('use').filter(function () {
    return ( $(this).attr("xlink:href").indexOf("#") > -1);
  }).each(function () {
    $(this).attr("xlink:href", baseUrl + $(this).attr("xlink:href").split('/').slice(-1)[0]);
  });
}

fixedSvg();

// checking if element for page
//-----------------------------------------------------------------------------------
function isOnPage(selector) {
  return ($(selector).length) ? $(selector) : false;
}

//blocks of the same height
//-----------------------------------------------------------------------------------
function setEqualHeight(columns) {
  var tallestcolumn = 0;
  columns.each(
    function () {
      var currentHeight = $(this).height();
      if (currentHeight > tallestcolumn) {
        tallestcolumn = currentHeight;
      }
    }
  );
  columns.height(tallestcolumn);
}


if (device.tablet() || device.mobile()) {
} else {
  setEqualHeight($('.section-12 .voting_items'))
}


// mobile menu
//-----------------------------------------------------------------------------------
/*fixed menu*/
var $menu = $('.main-menu');

$(window).scroll(function () {
  if ($(window).scrollTop() >= $('#s-1').offset().top) {
    $menu.addClass('fixed-menu');
  } else {
    $menu.removeClass('fixed-menu');
  }
});

$('.close-menu').on('click', function (e) {
  e.preventDefault();

  // if ($('.main-menu').hasClass('open-menu'))
  
  if ($(window).width() < 768) {
    $('.page-body').css('overflow', 'hidden');
    $(this).closest('.main-menu').css('overflow', 'scroll')
  }
  $('.main-menu').toggleClass('open-menu');
});


$(document).on('click', '.js-scroll[href*=#]', function (e) {
  e.preventDefault();
  $('body').removeClass('scroll-block');
  $('.js-menu').removeClass('show');
  var scrolling = $($(this).attr('href')).offset().top;
  if ($(window).width() < 768) scrolling = scrolling + 30;
  $('html, body').stop().animate({
    scrollTop: scrolling
  }, 1000);
  $('.main-menu').removeClass('open-menu');
});

var contentSections = $('.js-section'),
    navigationItems = $('.js-menu a');

function updateNavigation() {
  contentSections.each(function () {
    var $this         = $(this);
    var activeSection = $('.js-menu a[href="#' + $this.attr('id') + '"]').data('number') - 1;

    if (( $this.offset().top - $(window).height() / 2 < $(window).scrollTop() ) && ( $this.offset().top + $this.height() - $(window).height() / 2 > $(window).scrollTop() )) {
      navigationItems.eq(activeSection).parent().addClass('is-selected');
    } else {
      navigationItems.eq(activeSection).parent().removeClass('is-selected');
    }
  });
}

updateNavigation();

$(window).on('scroll', function () {
  setTimeout(function () {
    updateNavigation();
  }, 200)
});

// Easy scroll
//-----------------------------------------------------------------------------------
var $window = $(window);		//Window object

var scrollTime       = .5,		//Scroll time
    scrollDistance   = 100;

$window.on("mousewheel DOMMouseScroll", function (event) {
  event.preventDefault();

  if ($(window).width() > 767) $menu.removeClass('open-menu');

  var delta         = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3,
      scrollTop     = $window.scrollTop(),
      finalScroll   = scrollTop - parseInt(delta * scrollDistance);

  TweenMax.to($window, scrollTime, {
    scrollTo:  { y: finalScroll, autoKill: true },
    ease:      Power1.easeOut,	//For more easing functions see
    // http://api.greensock.com/js/com/greensock/easing/package-detail.html
    autoKill:  true,
    overwrite: 5
  });
});

$(window).load(function () {
  var tl          = new TimelineMax(),
      count_1 = $('.counter-1').data('counter'),
      // count_2 = $('.counter-2').data('counter'),
      // count_3 = $('.counter-3').data('counter'),
      // count_4 = $('.counter-4').data('counter'),
      // count_5 = $('.counter-5').data('counter'),
      // count_6 = $('.counter-6').data('counter'),
      count_7 = $('.counter-7').data('counter');

  tl
    .to('.counter-1', 4, { scrambleText: { text:  count_1, chars: '0123456789', ease:  Sine.easeOut }})
    // .to('.counter-2', 4, { scrambleText: { text:  count_2, chars: '0123456789', ease:  Sine.easeOut }})
    // .to('.counter-3', 4, { scrambleText: { text:  count_3, chars: '0123456789', ease:  Sine.easeOut }})
    // .to('.counter-4', 4, { scrambleText: { text:  count_4, chars: '0123456789', ease:  Sine.easeOut }})
    // .to('.counter-5', 4, { scrambleText: { text:  count_5, chars: '0123456789', ease:  Sine.easeOut }})
    // .to('.counter-6', 4, { scrambleText: { text:  count_6, chars: '0123456789', ease:  Sine.easeOut }})
    .to('.counter-7', 4, { scrambleText: { text:  count_7, chars: '0123456789', ease:  Sine.easeOut }})

});


if ($(window).width() > 767) {
  $.stellar({
    verticalScrolling:   true,
    horizontalScrolling: false,
    scrollProperty:      'scroll',
    parallaxElements:    true,
    parallaxBackgrounds: true,
    positionProperty:    'position',
    hideDistantElements: false
  });
}


