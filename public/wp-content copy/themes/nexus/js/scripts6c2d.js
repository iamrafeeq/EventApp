jQuery(window).load(function() {	
	"use strict";
    if (jQuery(".preloader").length) {
        jQuery(".preloader").fadeOut();
      }
});

document.addEventListener("DOMContentLoaded", function () {
  const closeBtn = document.getElementById('close-popup');
  const popup = document.getElementById('popup');

  if (closeBtn && popup) {
    closeBtn.addEventListener('click', function () {
      popup.style.display = 'none';
    });
  }
});


jQuery(window).on('scroll', function() {
		
	"use strict";

    if (jQuery(".sticky-header--one-page").length) {
        var headerScrollPos = 130;
        var stricky = jQuery(".sticky-header--one-page");
        if (jQuery(window).scrollTop() > headerScrollPos) {
          stricky.addClass("active");
        } else if (jQuery(this).scrollTop() <= headerScrollPos) {
          stricky.removeClass("active");
        }
      }

});

jQuery(document).ready(function( $ ) {
	"use strict";
	
	$(".content").fitVids();

    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
    "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "stroke-dashoffset 10ms linear";
    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength) / height;
      progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on("scroll", function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery(".progress-wrap").addClass("active-progress");
      } else {
        jQuery(".progress-wrap").removeClass("active-progress");
      }
    });
    jQuery(".progress-wrap").on("click", function (event) {
      event.preventDefault();
      jQuery("html, body").animate({ scrollTop: 0 }, duration);
      return false;
    });
  
  	var authorContainer = $('body');
    // This will handle stretching the cells.
	
    $('.layout-full .stretch-content').each(function(){
		
        var $$ = $(this);
        var onResize = function(){
            $$.css({
                'margin-left' : 0,
                'margin-right' : 0,
                'padding-left' : 0,
                'padding-right' : 0
            });

            var leftSpace = $$.offset().left - authorContainer.offset().left;
            var rightSpace = authorContainer.outerWidth() - leftSpace - $$.parent().outerWidth();

            $$.css({
                'margin-left' : -leftSpace,
                'margin-right' : -rightSpace,
                'padding-left' : $$.data('stretch-type') === 'full' ? leftSpace : 0,
                'padding-right' : $$.data('stretch-type') === 'full' ? rightSpace : 0
            });
        };

        $(window).resize( onResize );
        onResize();

        $$.css({
            'border-left' : 0,
            'border-right' : 0
        });
    });
	
	$('.gallery-carousel').each(function() {		
		var margin = $(this).data('margin');
		var items = $(this).data('items');
		var nav = $(this).data('nav');
		var dots = $(this).data('dots');
		var autoplay = $(this).data('autoplay');
		var items_tablet = 1;
		$('.gallery-carousel').owlCarousel({
			loop:true,
			margin: margin,
			nav: nav,
			autoplay: autoplay,
			dots: dots,
			navText : ['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>'],
			responsive : {
	        0 : {
	          items : 1,
	        },
	        480 : {
	          items : 1,
	        },
	        768 : {
	          items : items_tablet,
	        },
	        992 : {
	          items : items,
	        }
	      }
		});
	});
	
	/*----------------------------------------------------*/
	/*	Video Link Lightbox
	/*----------------------------------------------------*/		
	$('.video-popup2').each(function(){
		var url = $(this).data('url');
		$(this).magnificPopup({
			type: 'iframe',				  
			iframe: {
				patterns: {
					youtube: {				   
					index: 'youtube.com',
					src: url
					}
				}
			}		  		  
		});
	});
	
	/*----------------------------------------------------*/
	/*	Video Link Lightbox
	/*----------------------------------------------------*/		
	$('.gallery-content').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
		delegate: 'a', // the selector for gallery item
		type: 'image',
		gallery: {
			enabled:true
		}
		});
	});

	$('.image-link').magnificPopup({
		type: 'image'
	});

    var windowOn = $(window);
    windowOn.on('scroll', function () {
      var scroll = windowOn.scrollTop();
      if (scroll < 100) {
        $(".vl-header-sticky").removeClass("header-sticky");
      } else {
        $(".vl-header-sticky").addClass("header-sticky");
      }
    });

	/*----------------------------------------------------*/
	/*	Masonry Grid
	/*----------------------------------------------------*/
    if ($(".masonry-layout").length) {
        $(".masonry-layout").imagesLoaded(function () {
            $(".masonry-layout").isotope({
                layoutMode: "masonry"
            });
        });
    }

    const link = document.querySelectorAll('.hover-item');
    const linkHoverReveal = document.querySelectorAll('.hover-item__box');
    const linkImages = document.querySelectorAll('.hover-item__box-img');
    for (let i = 0; i < link.length; i++) {
        link[i].addEventListener('mousemove', (e) => {
        linkHoverReveal[i].style.opacity = 1;
        linkHoverReveal[i].style.transform = `translate(-100%, -50% ) rotate(-14deg)`;
        linkImages[i].style.transform = 'scale(1, 1)';
        linkHoverReveal[i].style.left = e.clientX + "px";
        })
        link[i].addEventListener('mouseleave', (e) => {
        linkHoverReveal[i].style.opacity = 0;
        linkHoverReveal[i].style.transform = `translate(-50%, -50%) rotate(14deg)`;
        linkImages[i].style.transform = 'scale(0.8, 0.8)';
        })
    }


    var vlMenuWrap = $('.vl-mobile-menu-active > ul').clone();
  var vlSideMenu = $('.vl-offcanvas-menu nav');
  vlSideMenu.append(vlMenuWrap);
  if ($(vlSideMenu).find('.sub-menu, .vl-mega-menu').length != 0) {
    $(vlSideMenu).find('.sub-menu, .vl-mega-menu').parent().append('<button class="vl-menu-close"><i class="fas fa-chevron-right"></i></button>');
  }
  
  var sideMenuList = $('.vl-offcanvas-menu nav > ul > li button.vl-menu-close, .vl-offcanvas-menu nav > ul li.has-dropdown > a');
  $(sideMenuList).on('click', function (e) {
    console.log(e);
    e.preventDefault();
    if (!($(this).parent().hasClass('active'))) {
      $(this).parent().addClass('active');
      $(this).siblings('.sub-menu, .vl-mega-menu').slideDown();
    } else {
      $(this).siblings('.sub-menu, .vl-mega-menu').slideUp();
      $(this).parent().removeClass('active');
    }
  });
  
  
  $(".vl-offcanvas-toggle").on('click',function(){
  $(".vl-offcanvas").addClass("vl-offcanvas-open");
  $(".vl-offcanvas-overlay").addClass("vl-offcanvas-overlay-open");
  });
  
  $(".vl-offcanvas-close-toggle,.vl-offcanvas-overlay").on('click', function(){
  $(".vl-offcanvas").removeClass("vl-offcanvas-open");
  $(".vl-offcanvas-overlay").removeClass("vl-offcanvas-overlay-open");
  });

  AOS.init;
  AOS.init({disable: 'mobile'});

    if ($('.text-anime-style-1').length) {
        let staggerAmount 	= 0.05,
        translateXValue = 0,
        delayValue 		= 0.5,
        animatedTextElements = document.querySelectorAll('.text-anime-style-1');
    
        animatedTextElements.forEach((element) => {
        let animationSplitText = new SplitText(element, { type: "chars, words" });
        gsap.from(animationSplitText.words, {
        duration: 1,
        delay: delayValue,
        x: 20,
        autoAlpha: 0,
        stagger: staggerAmount,
        scrollTrigger: { trigger: element, start: "top 85%" },
        });
        });
    }

    if ($('.text-anime-style-2').length) {
        let	 staggerAmount 		= 0.05,
        translateXValue	= 20,
        delayValue 		= 0.5,
        easeType 			= "power2.out",
        animatedTextElements = document.querySelectorAll('.text-anime-style-2');
    
        animatedTextElements.forEach((element) => {
        let animationSplitText = new SplitText(element, { type: "chars, words" });
        gsap.from(animationSplitText.chars, {
            duration: 1,
            delay: delayValue,
            x: translateXValue,
            autoAlpha: 0,
            stagger: staggerAmount,
            ease: easeType,
            scrollTrigger: { trigger: element, start: "top 85%"},
        });
        });
    }

    if ($('.text-anime-style-3').length) {
        let	animatedTextElements = document.querySelectorAll('.text-anime-style-3');

        animatedTextElements.forEach((element) => {
            //Reset if needed
            if (element.animation) {
                element.animation.progress(1).kill();
                element.split.revert();
            }

            element.split = new SplitText(element, {
                type: "lines,words,chars",
                linesClass: "split-line",
            });
            gsap.set(element, { perspective: 400 });

            gsap.set(element.split.chars, {
                opacity: 0,
                x: "50",
            });

            element.animation = gsap.to(element.split.chars, {
                scrollTrigger: { trigger: element,	start: "top 90%" },
                x: "0",
                y: "0",
                rotateX: "0",
                opacity: 1,
                duration: 1,
                ease: Back.easeOut,
                stagger: 0.02,
            });
        });
    }
	
});