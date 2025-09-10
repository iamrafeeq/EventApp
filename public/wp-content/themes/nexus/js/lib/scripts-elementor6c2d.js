(function($){
	'use strict';	
	$( window ).on( 'elementor/frontend/init', function() {

		var owl_carousel = function($scope){
			$scope.find('.owl-carousel-main').each( function() {
				var $carousel = $(this);
				var $rtl = ($carousel.data('rtl') !== undefined) ? $carousel.data('rtl') : false;
				var $items = ($carousel.data('items') !== undefined) ? $carousel.data('items') : 2;
				var $items1600 = ($carousel.data('items1600') !== undefined) ? $carousel.data('items1600') : $items;
				var $items1200 = ($carousel.data('items1200') !== undefined) ? $carousel.data('items1200') : $items;
				var $items992 = ($carousel.data('items992') !== undefined) ? $carousel.data('items992') : 1;
				var $items_tablet = ($carousel.data('items-tablet') !== undefined) ? $carousel.data('items-tablet') : $items992;
				var $items_mobile_landscape = ($carousel.data('items-mobile-landscape') !== undefined) ? $carousel.data('items-mobile-landscape') : 1;
				var $items_mobile_portrait = ($carousel.data('items-mobile-portrait') !== undefined) ? $carousel.data('items-mobile-portrait') : 1;

				var $stagePadding1800 = ($carousel.data('stagepadding1800') !== undefined) ? $carousel.data('stagepadding1800') : 0;
				var $stagePadding1600 = ($carousel.data('stagepadding1600') !== undefined) ? $carousel.data('stagepadding1600') : 0;
				var $stagePadding1300 = ($carousel.data('stagepadding1300') !== undefined) ? $carousel.data('stagepadding1300') : 0;
				var $stagePadding = ($carousel.data('stagepadding') !== undefined) ? $carousel.data('stagepadding') : 0;
				var $stagePadding_992 = ($carousel.data('stagepadding992') !== undefined) ? $carousel.data('stagepadding992') : 0;
				var $stagePadding_768 = ($carousel.data('stagepadding768') !== undefined) ? $carousel.data('stagepadding768') : 0;
				var $stagePadding_575 = ($carousel.data('stagepadding575') !== undefined) ? $carousel.data('stagepadding575') : 0;
				var $stagePadding_mobile = ($carousel.data('stagepaddingMobile') !== undefined) ? $carousel.data('stagepaddingMobile') : 0;

				$carousel.owlCarousel ({
					rtl: $rtl,
					loop : ($carousel.data('loop') !== undefined) ? $carousel.data('loop') : true,
					items : $carousel.data('items'),
					stagePadding: $stagePadding,
					margin : ($carousel.data('margin') !== undefined) ? $carousel.data('margin') : 30,
					dots : ($carousel.data('dots') !== undefined) ? $carousel.data('dots') : true,
					nav : ($carousel.data('nav') !== undefined) ? $carousel.data('nav') : true,
					navText : ['<span class="flaticon-long-arrow-left"></span>', '<span class="flaticon-long-arrow-right"></span>'],
					autoplay : ($carousel.data('autoplay') !== undefined) ? $carousel.data('autoplay') : true,
					autoplayTimeout : ($carousel.data('autoplay-timeout') !== undefined) ? $carousel.data('autoplay-timeout') : 3000,
					animateIn : ($carousel.data('animatein') !== undefined) ? $carousel.data('animatein') : false,
					animateOut : ($carousel.data('animateout') !== undefined) ? $carousel.data('animateout') : false,
					mouseDrag : ($carousel.data('mouse-drag') !== undefined) ? $carousel.data('mouse-drag') : true,
					autoWidth : ($carousel.data('auto-width') !== undefined) ? $carousel.data('auto-width') : false,
					autoHeight : ($carousel.data('auto-height') !== undefined) ? $carousel.data('auto-height') : false,
					center : ($carousel.data('center') !== undefined) ? $carousel.data('center') : false,
					responsiveClass: true,
					dotsEachNumber: true,
					smartSpeed: 2000,
					autoplayHoverPause: true,
					responsive : {
						0 : {
							items: $items_mobile_portrait,
							stagePadding: $stagePadding_mobile,
						},
						575 : {
							items: $items_mobile_landscape,
							stagePadding: $stagePadding_575,
						},
						768 : {
							items: $items_tablet,
							stagePadding: $stagePadding_768,
						},
						992 : {
							items: $items992,
							stagePadding: $stagePadding_992,
						},
						1200: {
							items: $items1200,
							stagePadding: $stagePadding,
						},
						1300: {
							items: $items1200,
							stagePadding: $stagePadding1300,
						},
						1600: {
							items: $items1600,
							stagePadding: $stagePadding1600,
						},
						1800: {
							items: $items,
							stagePadding: $stagePadding1800,
						}
					}
				});

				var totLength = $('.owl-dot', $carousel).length;
				$('.total-no', $carousel).html(totLength);
				$('.current-no', $carousel).html(totLength);
				$carousel.owlCarousel();
				$('.current-no', $carousel).html(1);
				$carousel.on('changed.owl.carousel', function(event) {
					var total_items = event.page.count;
					var currentNum = event.page.index + 1;
					$('.total-no', $carousel ).html(total_items);
					$('.current-no', $carousel).html(currentNum);
				});
			});
		}; // end

		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-testmonials.default', function($scope, $){
			var i = $(window).width();
			$(".row .nexus-stretch-element-inside-column").each(function () {
				var $this = $(this),
					row = $this.closest(".row"),
					cols = $this.closest('[class^="col-"]'),
					colsheight = $this.closest('[class^="col-"]').height(),
					rect = this.getBoundingClientRect(),
					l = row[0].getBoundingClientRect(),
					s = cols[0].getBoundingClientRect(),
					r = rect.left,
					d = i - rect.right,
					c = l.left + (parseFloat(row.css("padding-left")) || 0),
					u = i - l.right + (parseFloat(row.css("padding-right")) || 0),
					p = s.left,
					f = i - s.right,
					styles = {
						"margin-left": 0,
						"margin-right": 0
					};
				if (Math.round(c) === Math.round(p)) {
					var h = parseFloat($this.css("margin-left") || 0);
					styles["margin-left"] = h - r;
				}
				if (Math.round(u) === Math.round(f)) {
					var w = parseFloat($this.css("margin-right") || 0);
					styles["margin-right"] = w - d;
				}
				$this.css(styles);
			});

            owl_carousel($scope);
			
			// slick slider
			let nexusslickCarousel = $(".nexus-slick__carousel");
			if (nexusslickCarousel.length) {
				nexusslickCarousel.each(function () {
					let elm = $(this);
					let options = elm.data("slick-options");
					let nexusslickCarousel = elm.slick(
						"object" === typeof options ? options : JSON.parse(options)
					);
				});
			}

		} );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-slider.default', function($scope, $){
			owl_carousel($scope);
		} );

		elementorFrontend.hooks.addAction('frontend/element_ready/nexus_speakers.default', function ($scope, $) {
			$('.speakers-slider-area').owlCarousel({
				loop: true,
				margin: 30,
				nav: false,
				dots: true,
				items: 10,
				autoplay: true,
				smartSpeed: 2000,
				autoplayTimeout: 3000,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: false,
					},
					600: {
						items: 2,
					},
					1000: {
						items: 3,
					}
				}
			  });

			const items = document.querySelectorAll(".list-container ul li");
			const images = document.querySelectorAll(".image-container .image");

			items.forEach(item => {
				item.addEventListener("mouseenter", () => {
					const target = item.getAttribute("data-image");

					images.forEach(img => img.classList.remove("active"));

					const activeImage = document.getElementById(target);
					if (activeImage) activeImage.classList.add("active");
				});
			});

			$('.team-widget-slider').owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				dots: false,
				autoplay: true,
				smartSpeed: 2000,
				autoplayTimeout: 3000,
				responsiveClass: true,
				responsive: {
					0: { items: 1 },
					600: { items: 2 },
					991: { items: 3 },
					1200: { items: 4 }
				},
				onInitialized: function (event) {
					const total = event.item.count;
					const visible = event.page.size;
					if (total <= visible) {
						$('.team-widget-slider').find('.owl-nav').removeClass('disabled');
					}
				}
			});
		});

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-teams.default', function($scope, $){
			owl_carousel($scope);
		} );
		
		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-partner.default', function($scope, $){
			owl_carousel($scope);
		} );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-gallery.default', function($scope, $){
            //new WOW().init();
			owl_carousel($scope);
		} );

		elementorFrontend.hooks.addAction('frontend/element_ready/nexus_brand_image.default', function ($scope, $) {
			owl_carousel($scope);
		});
		
		elementorFrontend.hooks.addAction('frontend/element_ready/nexus-hero-slider.default', function ($scope, $) {
			$('.hero5-slider-area.slick-active').slick({
				arrows: true,
				prevArrow: $('.testimonial-prev-arrow button'),
				nextArrow: $('.testimonial-next-arrow button'),
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: false,
				autoplay: true,
				autoplaySpeed: 5000,
				fade: true,
				speed: 1000,
			});
		});

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-pricing-tab.default', function($scope, $){
            var $container = $scope.find('.package-two');
            $container.each( function() {
            if ($($container).length) {
                var toggleSwitch = $container.find($('#switch-toggle-tab label.switch'));

                var monthTabTitle = $container.find($('#switch-toggle-tab li#nav-0-tab'));
                var yearTabTitle = $container.find($('#switch-toggle-tab li#nav-1-tab'));

                var monthTabContent = $container.find($('#nav-0'));
                var yearTabContent = $container.find($('#nav-1'));
                // hidden show deafult;
                monthTabContent.show();
                yearTabContent.hide();
                
                function toggleHandle() {
                    if (toggleSwitch.hasClass('on')) {
                        yearTabContent.removeClass('active');
                        monthTabContent.addClass('active');
                        yearTabContent.hide();
                        monthTabContent.show();
                        monthTabTitle.addClass('active');
                        yearTabTitle.removeClass('active');
                    } else {
                        yearTabContent.addClass('active');
                        monthTabContent.removeClass('active');
                        monthTabContent.hide();
                        yearTabContent.show();
                        yearTabTitle.addClass('active');
                        monthTabTitle.removeClass('active');
                    }
                };
                
                monthTabTitle.on('click', function () {
                  toggleSwitch.addClass('on').removeClass('off');
                  toggleHandle();
                  return false;
                });
                yearTabTitle.on('click', function () {
                  toggleSwitch.addClass('off').removeClass('on');
                  toggleHandle();
                  return false;
                });
                toggleSwitch.on('click', function () {
                  toggleSwitch.toggleClass('on off');
                  toggleHandle();
                });
              }
            });
	} );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-posts.default', function($scope, $){
			owl_carousel($scope);
		} );
		
		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-gallery-carousel.default', function($scope, $){
			owl_carousel($scope);
			var $main = $(".main-gallery");
			var $thumb = $(".thumb-gallery");

			$main.owlCarousel({
				items: 1,
				nav: false,
				dots: false,
				loop: false,
				smartSpeed: 600
			});

			$thumb.owlCarousel({
				items: 5,
				margin: 10,
				nav: false,
				dots: false,
				smartSpeed: 300,
				responsive: {
					0: { items: 3 },
					768: { items: 4 },
					1024: { items: 5 },
					1400: { items: 5 },
				}
			});

			$thumb.find(".small-img").each(function (index) {
				$(this).on("click", function () {
					$main.trigger("to.owl.carousel", [index, 300]);
					$thumb.find(".small-img").removeClass("active");
					$(this).addClass("active");
				});
			});

			$main.on("changed.owl.carousel", function (event) {
				var index = event.item.index;
				$thumb.find(".small-img").removeClass("active");
				$thumb.find(".small-img").eq(index).addClass("active");
			});

			$thumb.find(".small-img").eq(0).addClass("active");

			// Style 2
			const $slider = $('.nexus-slider-carousel');

			$slider.each(function () {
				const $carousel = $(this);
				const $wrap = $carousel.closest('.nexus-slider-wrap');
				const $counter = $wrap.find('.nexus-slider-counter .current');
				const total = $carousel.find('.nexus-slide-item').length;

				$carousel.owlCarousel({
					center: true,
					loop: true,
					margin: 0,
					nav: false,
					dots: false,
					responsive: {
						0: {
							items: 1,
						},
						768: {
							items: 3,
						}
					},
					onInitialized: function (event) {
						let index = (event.item.index - event.relatedTarget._clones.length / 2 + total) % total;
						$counter.text(('0' + (index + 1)).slice(-2) + '/');
					},
					onChanged: function (event) {
						let index = (event.item.index - event.relatedTarget._clones.length / 2 + total) % total;
						$counter.text(('0' + (index + 1)).slice(-2) + '/');
					}
				});

				$wrap.find('.slider-prev').click(function () {
					$carousel.trigger('prev.owl.carousel');
				});

				$wrap.find('.slider-next').click(function () {
					$carousel.trigger('next.owl.carousel');
				});
			});

			//Style 3
			// SLIDER //
			var rev = $('.rev_slider');
			rev.on('init', function (event, slick, currentSlide) {
				var
					cur = $(slick.$slides[slick.currentSlide]),
					next = cur.next(),
					prev = cur.prev();
				prev.addClass('slick-sprev');
				next.addClass('slick-snext');
				cur.removeClass('slick-snext').removeClass('slick-sprev');
				slick.$prev = prev;
				slick.$next = next;
			}).on('beforeChange', function (event, slick, currentSlide, nextSlide) {

				var
					cur = $(slick.$slides[nextSlide]);

				slick.$prev.removeClass('slick-sprev');
				slick.$next.removeClass('slick-snext');
				next = cur.next(),
					prev = cur.prev();
				prev.prev();
				prev.next();
				prev.addClass('slick-sprev');
				next.addClass('slick-snext');
				slick.$prev = prev;
				slick.$next = next;
				cur.removeClass('slick-next').removeClass('slick-sprev');
			});

			rev.slick({
				speed: 1000,
				arrows: true,
				dots: false,
				focusOnSelect: true,
				prevArrow: '<button class="prev-next"><i class="fa-solid fa-angle-left"></i></button>',
				nextArrow: '<button class="next-prev"> <i class="fa-solid fa-angle-right"></i></button>',
				infinite: true,
				centerMode: true,
				slidesPerRow: 1,
				slidesToShow: 1,
				slidesToScroll: 1,
				centerPadding: '0',
				swipe: true,
				autoplaySpeed: 2500,
				speed: 1500,
				autoplay: true,
				customPaging: function (slider, i) {
					return '';
				},

			});
		} );
		
		elementorFrontend.hooks.addAction('frontend/element_ready/nexus-events.default', function ($scope, $) {
			const $items = $scope.find('.cs_hover_active');
			$items.hover(function () {
				$items.removeClass('active');
				$(this).addClass('active');
			});

			$('.works-slider-area').owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				dots: false,
				autoplay: false,
				smartSpeed: 2000,
				autoplayTimeout: 3000,
				responsiveClass: true,
				responsive: {
					0: { items: 1 },
					600: { items: 2 },
					991: { items: 3 }
				},
				onInitialized: function (event) {
					const total = event.item.count;
					const visible = event.page.size;
					if (total <= visible) {
						$('.works-slider-area').find('.owl-nav').removeClass('disabled');
					}
				}
			});
		});						
		
		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-animate-image.default', function($scope, $){
			if ($('.reveal').length) {
				gsap.registerPlugin(ScrollTrigger);
				let revealContainers = document.querySelectorAll(".reveal");
				revealContainers.forEach((container) => {
					let image = container.querySelector("img");
					let tl = gsap.timeline({ scrollTrigger: { trigger: container, toggleActions: "play none none none" } });
					tl.set(container, { autoAlpha: 1 }); tl.from(container, 1.5, { xPercent: -100, ease: Power2.out });
					tl.from(image, 1.5, { xPercent: 100, scale: 1.3, delay: -1.5, ease: Power2.out });
				})
			;}
		} );
		
		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-title.default', function($scope, $){
			AOS.init;
			AOS.init({ disable: 'mobile' });
			if ($('.text-anime-style-3').length) {
				let animatedTextElements = document.querySelectorAll('.text-anime-style-3');

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
						scrollTrigger: { trigger: element, start: "top 90%" },
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
		} );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-progressbar.default', function($scope, $){
				
		} );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-services.default', function($scope, $){
			owl_carousel($scope);

            // Services Tab
            var $container;
            $container = $scope.find('.tabs-box');

            if ($($container).length) {
                $container.find(".tab-buttons .tab-btn").on("click", function (e) {
                  e.preventDefault();
                  var target = $($(this).attr("data-tab"));
            
                  if ($(target).is(":visible")) {
                    return false;
                  } else {
                    target
                      .parents($container)
                      .find(".tab-buttons")
                      .find(".tab-btn")
                      .removeClass("active-btn");
                    $(this).addClass("active-btn");
                    target
                      .parents($container)
                      .find(".tabs-content")
                      .find(".tab")
                      .fadeOut(0);
                    target
                      .parents($container)
                      .find(".tabs-content")
                      .find(".tab")
                      .removeClass("active-tab");
                    $(target).fadeIn(300);
                    $(target).addClass("active-tab");
                  }
                });
              }
				
		} );
		
		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-event-countdown.default', function($scope, $){
			const timer = document.querySelector('.timer[data-event-time]');
			if (!timer) return;

			const endTime = parseInt(timer.dataset.eventTime) * 1000;

			function updateCountdown() {
				const now = new Date().getTime();
				const distance = endTime - now;

				if (distance < 0) return;

				const months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
				const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
				const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				const seconds = Math.floor((distance % (1000 * 60)) / 1000);

				if (timer.querySelector('#months')) {
					timer.querySelector('#months').textContent = months;
				}
				if (timer.querySelector('#days')) {
					timer.querySelector('#days').textContent = days;
				}
				if (timer.querySelector('#hours')) {
					timer.querySelector('#hours').textContent = hours;
				}
				if (timer.querySelector('#minutes')) {
					timer.querySelector('#minutes').textContent = minutes;
				}
				if (timer.querySelector('#seconds')) {
					timer.querySelector('#seconds').textContent = seconds;
				}
			}

			setInterval(updateCountdown, 1000);
			updateCountdown();
		} );

		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-event-section.default', function($scope, $){
			window.toggleDetails = function (index) {
				const bottomSection = document.getElementById('bottomSection' + index);
				if (bottomSection) {
					bottomSection.classList.toggle('active');
				}
			};
		} );
		
		elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-counter.default', function($scope, $){
			// Counter
			const ucounter = $('.counter');
			if (ucounter.length > 0) {
				ucounter.countUp();
			};
		} );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-button.default', function($scope, $){
            AOS.init;
            AOS.init({disable: 'mobile'});
        } );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-pricing.default', function($scope, $){
            //new WOW().init();
        } );

        elementorFrontend.hooks.addAction( 'frontend/element_ready/nexus-portfolios.default', function($scope, $){
            owl_carousel($scope);

            var $container = $scope.find("#portfolio-four__carousel");
            if ($($container).length) {
                $container.flipster({
                    style: 'carousel',
                    spacing: -0.4,
                    buttons: true,
                    loop: true,
                    keyboard: false,
                    scrollwheel: false,
                    nav: false,
                });
            }

            $('.grid-loaded').imagesLoaded(function () {
                // filter items on button click
                $('.masonry-filter').on('click', 'button', function () {
                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({
                        filter: filterValue
                    });
                });

                // change is-checked class on buttons
                $('.masonry-filter button').on('click', function () {
                    $('.masonry-filter button').removeClass('is-checked');
                    $(this).addClass('is-checked');
                    var selector = $(this).attr('data-filter');
                    $grid.isotope({
                        filter: selector
                    });
                    return false;
                });

                // init Isotope
                var $grid = $('.masonry-wrap').isotope({
                    itemSelector: '.masonry-image',
                    percentPosition: true,
                    transitionDuration: '0.7s',
                    masonry: {
                        // use outer width of grid-sizer for columnWidth
                        columnWidth: '.masonry-image',
                    }
                });

            });

        } );

	});

})(jQuery);