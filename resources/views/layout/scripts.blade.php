<script>
    (function(body) {
        'use strict';
        body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
    })(document.body);
</script>
<script>
    /* <![CDATA[ */
    var tribe_l10n_datatables = {
        "aria": {
            "sort_ascending": ": activate to sort column ascending",
            "sort_descending": ": activate to sort column descending"
        },
        "length_menu": "Show _MENU_ entries",
        "empty_table": "No data available in table",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        "info_empty": "Showing 0 to 0 of 0 entries",
        "info_filtered": "(filtered from _MAX_ total entries)",
        "zero_records": "No matching records found",
        "search": "Search:",
        "all_selected_text": "All items on this page were selected. ",
        "select_all_link": "Select all pages",
        "clear_selection": "Clear Selection.",
        "pagination": {
            "all": "All",
            "next": "Next",
            "previous": "Previous"
        },
        "select": {
            "rows": {
                "0": "",
                "_": ": Selected %d rows",
                "1": ": Selected 1 row"
            }
        },
        "datepicker": {
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ],
            "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ],
            "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Prev",
            "currentText": "Today",
            "closeText": "Done",
            "today": "Today",
            "clear": "Clear"
        },
        "registration_prompt": "There is unsaved attendee information. Are you sure you want to continue?"
    }; /* ]]> */
</script>
<script>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<link rel='stylesheet' id='animate-css' href='wp-content/themes/nexus/css/aos.css' type='text/css' media='all' />
<script type="text/javascript" src="wp-content/plugins/event-tickets/build/js/rsvp9d0b.js?ver=dab7c1842d0b66486c7c"
    id="event-tickets-tickets-rsvp-js-js"></script>
<script type="text/javascript"
    src="wp-content/plugins/event-tickets/build/js/ticket-detailscbc0.js?ver=effdcbb0319e200f2e6a"
    id="event-tickets-details-js-js"></script>
<script type="text/javascript" src="wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js">
</script>
<script type="text/javascript" src="wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js">
</script>
<script type="text/javascript" id="wp-i18n-js-after">
    /* <![CDATA[ */
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/swv/js/index6a4d.js?ver=6.1.1"
    id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-before">
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/jthemes.net\/themes\/wp\/nexus\/index.php?rest_route=\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/index6a4d.js?ver=6.1.1"
    id="contact-form-7-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/bootstrap.min5152.js?ver=1.0" id="bootstrap-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/fontawesome5152.js?ver=1.0" id="fontawesome-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/aos6c2d.js?ver=6.8.2" id="aos-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/slick-slider6c2d.js?ver=6.8.2" id="slick-slider-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/counter6c2d.js?ver=6.8.2" id="counter-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/sidebar6c2d.js?ver=6.8.2" id="sidebar-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/magnific-popup5152.js?ver=1.0"
    id="magnific-popup-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/gsap.min5152.js?ver=1.0" id="gsap-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/ScrollTrigger.min5152.js?ver=1.0"
    id="ScrollTrigger-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/Splitetext5152.js?ver=1.0" id="Splitetext-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/owlcarousel.min5152.js?ver=1.0" id="owl-carousel-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/SmoothScroll6c2d.js?ver=6.8.2" id="SmoothScroll-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/mobilemenu5152.js?ver=1.0" id="mobilemenu-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/nice-select5152.js?ver=1.0" id="nice-select-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/waypoints6c2d.js?ver=6.8.2" id="waypoints-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/circle-progress6c2d.js?ver=6.8.2"
    id="circle-progress-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/lightbox6c2d.js?ver=6.8.2" id="lightbox-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/jquery.fitvid5152.js?ver=1.0" id="jquery-fitvid-js">
</script>
<script type="text/javascript" src="wp-content/themes/nexus/js/scripts6c2d.js?ver=6.8.2" id="nexus-scripts-js"></script>
<script type="text/javascript" id="newsletter-js-extra">
    /* <![CDATA[ */
    var newsletter_data = {
        "action_url": "https:\/\/jthemes.net\/themes\/wp\/nexus\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/newsletter/maincc96.js?ver=8.9.4" id="newsletter-js"></script>
<script type="text/javascript" id="event-tickets-rsvp-js-extra">
    /* <![CDATA[ */
    var tribe_tickets_rsvp_strings = {
        "attendee": "Attendee %1$s"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/event-tickets/build/js/rsvpd578.js?ver=5.26.1"
    id="event-tickets-rsvp-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/webpack.runtime.min94b7.js?ver=3.31.3"
    id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend-modules.min94b7.js?ver=3.31.3"
    id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js">
</script>
<script type="text/javascript" id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1024,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1023,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "hasCustomBreakpoints": true
        },
        "version": "3.31.3",
        "is_static": false,
        "experimentalFeatures": {
            "e_font_icon_svg": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "nested-elements": true,
            "e_element_cache": true,
            "home_screen": true,
            "global_classes_should_enforce_capabilities": true,
            "e_variables": true,
            "cloud-library": true,
            "e_opt_in_v4_page": true
        },
        "urls": {
            "assets": "https:\/\/jthemes.net\/themes\/wp\/nexus\/wp-content\/plugins\/elementor\/assets\/",
            "ajaxurl": "https:\/\/jthemes.net\/themes\/wp\/nexus\/wp-admin\/admin-ajax.php",
            "uploadUrl": "https:\/\/jthemes.net\/themes\/wp\/nexus\/wp-content\/uploads"
        },
        "nonces": {
            "floatingButtonsClickTracking": "3a11660f44"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "viewport_tablet": 1023,
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 46,
            "title": "Home%20Two%20%E2%80%93%20NexusEvent",
            "excerpt": "",
            "featuredImage": false
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="wp-content/plugins/elementor/assets/js/frontend.min94b7.js?ver=3.31.3"
    id="elementor-frontend-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/wow.min6c2d.js?ver=6.8.2" id="wow-js"></script>
<script type="text/javascript" src="wp-content/themes/nexus/js/lib/scripts-elementor6c2d.js?ver=6.8.2"
    id="nexus-elementor-js"></script>
