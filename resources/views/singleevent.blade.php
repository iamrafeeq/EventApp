@extends('layout.app')

@section('main')
<div class="homepage1-menu">
    <div class="vl-offcanvas">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="index.html" title="NexusEvent">
                        <img src="wp-content/themes/nexus/images/logo.png" alt="NexusEvent" />
                    </a>
                </div>
                <div class="vl-offcanvas-close">
                    <button class="vl-offcanvas-close-toggle"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>

            <div class="vl-offcanvas-menu dh-lg-none mb-40">
                <nav></nav>
            </div>

            <div class="space20"></div>
            <div class="vl-offcanvas-info">
                <h3 class="vl-offcanvas-sm-title">Contact Us</h3>
                <div class="space20"></div>
                <span><a href="tel:2343454574"> <i class="fa-regular fa-envelope"></i> (234) 345-4574</a></span>
                <span><a href="mailto:Nexussconferences@.com"><i class="fa-solid fa-phone"></i>
                        Nexussconferences@.com</a></span>
            </div>
        </div>
    </div>
    <div class="vl-offcanvas-overlay"></div>
</div>

<div class="inner-header-area page-header topbar-show with-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-heading">
                    <h1>EVENT DETAILS</h1>
                    <div class="space40"></div>
                    {{-- <ul class="nexus-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a><i class="fa-solid fa-angle-right"></i></li>
                        <li><a href="https://jthemes.net/themes/wp/nexus?post_type=tribe_events">Event</a><i
                                class="fa-solid fa-angle-right"></i></li>
                        <li class="active">Farmer’s Market</li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</div><!-- /.page-header -->



<section id="tribe-events-pg-template" class="tribe-events-pg-template">
    <div class="tribe-events-before-html"></div><span class="tribe-events-ajax-loading"><img
            class="tribe-events-spinner-medium"
            src="wp-content/plugins/the-events-calendar/src/resources/images/tribe-loading.gif"
            alt="Loading Events" /></span>
    <div class="event-details-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="event-details-area heading1 padding-left">
                        <div class="img1">
                            <div class="tribe-events-event-image"><img fetchpriority="high" width="970"
                                    height="550" src="wp-content/uploads/2025/07/gallery-img8.png"
                                    class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                    srcset="https://jthemes.net/themes/wp/nexus/wp-content/uploads/2025/07/gallery-img8.png 970w, https://jthemes.net/themes/wp/nexus/wp-content/uploads/2025/07/gallery-img8-300x170.png 300w, https://jthemes.net/themes/wp/nexus/wp-content/uploads/2025/07/gallery-img8-768x435.png 768w, https://jthemes.net/themes/wp/nexus/wp-content/uploads/2025/07/gallery-img8-800x454.png 800w"
                                    sizes="(max-width: 970px) 100vw, 970px" /></div>
                        </div>
                        <h2>Farmer’s Market</h2>
                        <p>
                        <p>Who&#8217;s that then? Shh! Knights, I bid you welcome to your new home. Let us ride to
                            Camelot! Ah, now we see the violence inherent in the system! The Lady of the Lake, her arm
                            clad in the purest shimmering samite, held aloft Excalibur from the bosom of the water,
                            signifying by divine providence that I, Arthur, was to carry Excalibur. That is why I am
                            your king. Camelot!</p>
                        </p>
                        <div id="tribe-tickets">
                            <div class="tribe-common event-tickets tribe-tickets__tickets-wrapper">
                                <form id="tribe-tickets__tickets-form"
                                    action="https://jthemes.net/themes/wp/nexus/?tec-tc-cart=redirect"
                                    class="tribe-tickets__tickets-form tribe-tickets__form" method="post"
                                    enctype='multipart/form-data' data-provider="TEC\Tickets\Commerce\Module"
                                    autocomplete="off" data-provider-id="tickets-commerce" data-post-id="22" novalidate>

                                    <input type="hidden" name="tribe_tickets_saving_attendees" value="1" />
                                    <input type="hidden" name="tribe_tickets_ar" value="1" />
                                    <input type="hidden" name="tribe_tickets_ar_data" value=""
                                        id="tribe_tickets_block_ar_data" />

                                    <input name="provider" value="TEC\Tickets\Commerce\Module"
                                        class="tribe-tickets-provider" type="hidden">

                                    <h2 class="tribe-common-h4 tribe-common-h--alt tribe-tickets__tickets-title">
                                        Tickets</h2>

                                    <div id="tribe-tickets__notice__tickets-in-cart"
                                        class="tribe-tickets__notice tribe-tickets__notice--barred tribe-tickets__notice--barred-left">

                                        <div class="tribe-common-b2 tribe-tickets-notice__content tribe-common-b3">
                                            The numbers below include tickets for this event already in your cart.
                                            Clicking "Get Tickets" will allow you to edit any existing attendee
                                            information as well as change ticket quantities. </div>
                                    </div>

                                    <div id="tribe-block-tickets-item-3700"
                                        class="tribe-tickets__tickets-item post-3700 tec_tc_ticket type-tec_tc_ticket status-publish hentry cat_family-fun"
                                        data-ticket-id="3700" data-available="true" data-has-shared-cap="false"
                                        data-ticket-price="200">

                                        <div
                                            class="tribe-tickets__tickets-item-content-title-container tribe-tickets--no-description">
                                            <div
                                                class="tribe-common-h7 tribe-common-h6--min-medium tribe-tickets__tickets-item-content-title tribe-tickets--no-description">
                                                VIP </div>
                                        </div>
                                        <div class="tribe-tickets__tickets-item-extra">

                                            <div
                                                class="tribe-common-b2 tribe-common-b1--min-medium tribe-tickets__tickets-item-extra-price">
                                                <span class="tribe-tickets__tickets-sale-price">
                                                    <span
                                                        class='tribe-formatted-currency-wrap tribe-currency-prefix'><span
                                                            class="tribe-currency-symbol">&#x24;</span><span
                                                            class="tribe-amount">200.00</span></span> </span>
                                            </div>


                                            <div class="tribe-common-b3 tribe-tickets__tickets-item-extra-available">

                                                Unlimited

                                            </div>


                                        </div>

                                        <div class="tribe-common-h4 tribe-tickets__tickets-item-quantity">
                                            <button class="tribe-tickets__tickets-item-quantity-remove"
                                                title="Decrease ticket quantity for VIP" type="button">
                                                <span class="screen-reader-text tribe-common-a11y-visual-hide">Decrease
                                                    ticket quantity for VIP</span>
                                                -</button>

                                            <div class="tribe-tickets__tickets-item-quantity-number">
                                                <label class="tribe-common-a11y-visual-hide"
                                                    for="tribe-tickets__tickets-item-quantity-number--3700">
                                                    Quantity </label>
                                                <input id="tribe-tickets__tickets-item-quantity-number--3700"
                                                    type="number"
                                                    class="tribe-common-h3 tribe-common-h4--min-medium tribe-tickets__tickets-item-quantity-number-input"
                                                    step="1" min="0" max="100" value="0"
                                                    autocomplete="off" />
                                            </div>
                                            <button class="tribe-tickets__tickets-item-quantity-add"
                                                title="Increase ticket quantity for VIP" type="button">
                                                <span class="screen-reader-text tribe-common-a11y-visual-hide">Increase
                                                    ticket quantity for VIP</span>
                                                +</button>
                                        </div>


                                        <input name="attendee[optout]" value="1" type="hidden" />

                                    </div>

                                    <div class="tribe-tickets__tickets-footer">


                                        <div class="tribe-common-b2 tribe-tickets__tickets-footer-quantity">
                                            <span class="tribe-tickets__tickets-footer-quantity-label">
                                                Quantity: </span>
                                            <span class="tribe-tickets__tickets-footer-quantity-number">0</span>
                                        </div>

                                        <div class="tribe-common-b2 tribe-tickets__tickets-footer-total">
                                            <span class="tribe-tickets__tickets-footer-total-label">
                                                Total: </span>
                                            <span class="tribe-tickets__tickets-footer-total-wrap">
                                                <span class='tribe-formatted-currency-wrap tribe-currency-prefix'><span
                                                        class="tribe-currency-symbol">&#x24;</span><span
                                                        class="tribe-amount">0.00</span></span> </span>
                                        </div>

                                        <button
                                            class="tribe-common-c-btn tribe-common-c-btn--small tribe-tickets__tickets-buy"
                                            id="tribe-tickets__tickets-buy" type="submit" name="cart-button"
                                            disabled aria-disabled="true">
                                            Get Tickets</button>

                                    </div>


                                    <div
                                        class="tribe-tickets-loader__dots tribe-common-c-loader tribe-common-a11y-hidden">
                                        <svg class="tribe-common-c-svgicon tribe-common-c-svgicon--dot tribe-common-c-loader__dot tribe-common-c-loader__dot--first"
                                            aria-hidden="true" viewBox="0 0 15 15"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7.5" cy="7.5" r="7.5" />
                                        </svg>
                                        <svg class="tribe-common-c-svgicon tribe-common-c-svgicon--dot tribe-common-c-loader__dot tribe-common-c-loader__dot--second"
                                            aria-hidden="true" viewBox="0 0 15 15"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7.5" cy="7.5" r="7.5" />
                                        </svg>
                                        <svg class="tribe-common-c-svgicon tribe-common-c-svgicon--dot tribe-common-c-loader__dot tribe-common-c-loader__dot--third"
                                            aria-hidden="true" viewBox="0 0 15 15"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7.5" cy="7.5" r="7.5" />
                                        </svg>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="row">
                            <div class="organizer-info">
                                <h3>MEET THE VISIONARY BEHIND THE MIC</h3>

                                <p>Our lineup of speakers brings together thought leaders, innovators, and industry
                                    experts who are redefining the future of their fields, each best.</p>
                            </div>
                            <div class="col-lg-6 col-md-6 aos-init aos-animate" data-aos="zoom-in-up"
                                data-aos-duration="800">
                                <div class="team4-box box2">
                                    <div class="image-area">
                                        <div class="image">
                                            <div class="img">
                                                <img src="wp-content/themes/nexus/images/elements/team-img10.png"
                                                    alt="team img10">
                                            </div>
                                        </div>
                                        <div class="shape2">
                                            <img src="wp-content/themes/nexus/images/elements/elements34.png"
                                                alt="elements 34">
                                        </div>
                                        <div class="icon-area">
                                            <a href="index16d4.html?tribe_organizer=nexus"><i
                                                    class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-heading">
                                        <h4>
                                            <a href="#">
                                                Nexus </a>
                                        </h4>
                                        <p>&#110;&#101;xu&#115;&#064;g&#109;a&#105;&#108;&#046;co&#109;</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 aos-init aos-animate" data-aos="zoom-in-up"
                                data-aos-duration="900">
                                <div class="team4-box box2">
                                    <div class="image-area">
                                        <div class="image">
                                            <div class="img">
                                                <img src="wp-content/uploads/2025/07/team-img11.png"
                                                    alt="Alex Robertson">
                                            </div>
                                        </div>
                                        <div class="shape2">
                                            <img src="wp-content/themes/nexus/images/elements/elements34.png"
                                                alt="elements 34">
                                        </div>
                                        <div class="icon-area">
                                            <a href="indexeb43.html?tribe_organizer=alex-robertson"><i
                                                    class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-heading">
                                        <h4>
                                            <a href="#">
                                                Alex Robertson </a>
                                        </h4>
                                        <p>a&#108;exr&#111;&#098;e&#114;&#116;&#115;&#111;n&#064;g&#109;&#097;i&#108;.&#099;&#111;&#109;
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="event-sidebar-area">

                        <div class="location-boxarea">
                            <h3>OUR EVENT LOCATION</h3>
                            <div class="map">
                                <iframe width="100%" height="350px" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDNsicAsP6-VuGtAb1O9riI3oc_NOb7IOU&amp;q=32+Union+Square+East+New+York+NY+New+York+10003+United+States+&amp;zoom=15"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <div class="event-schedules">
                            <div class="event-info-boxarea section-bg">
                                <h3>OUR EVENT INFO </h3>
                                <div class="details1">
                                    <div class="calender-date">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                viewBox="0 0 39 39" fill="none">
                                                <g clip-path="url(#clip0_3291_4940)">
                                                    <path
                                                        d="M11.4152 0.617188C11.7697 0.617188 12.1096 0.757983 12.3602 1.0086C12.6108 1.25922 12.7516 1.59913 12.7516 1.95355V4.45255H27.1022V1.97073C27.1022 1.61631 27.243 1.2764 27.4936 1.02578C27.7443 0.775164 28.0842 0.634369 28.4386 0.634369C28.793 0.634369 29.1329 0.775164 29.3835 1.02578C29.6342 1.2764 29.775 1.61631 29.775 1.97073V4.45255H34.9486C35.9609 4.45255 36.9318 4.85456 37.6478 5.5702C38.3638 6.28583 38.7663 7.25651 38.7668 8.26882V34.9827C38.7663 35.995 38.3638 36.9657 37.6478 37.6814C36.9318 38.397 35.9609 38.799 34.9486 38.799H4.40314C3.39083 38.799 2.41995 38.397 1.70396 37.6814C0.987962 36.9657 0.585467 35.995 0.584961 34.9827L0.584961 8.26882C0.585467 7.25651 0.987962 6.28583 1.70396 5.5702C2.41995 4.85456 3.39083 4.45255 4.40314 4.45255H10.0789V1.95164C10.0794 1.59755 10.2204 1.25813 10.471 1.00792C10.7215 0.75772 11.0611 0.617187 11.4152 0.617188ZM3.25769 15.3974V34.9827C3.25769 35.1332 3.28732 35.2821 3.34488 35.4211C3.40245 35.5601 3.48682 35.6863 3.59318 35.7927C3.69955 35.8991 3.82582 35.9834 3.9648 36.041C4.10377 36.0986 4.25272 36.1282 4.40314 36.1282H34.9486C35.099 36.1282 35.248 36.0986 35.3869 36.041C35.5259 35.9834 35.6522 35.8991 35.7586 35.7927C35.8649 35.6863 35.9493 35.5601 36.0069 35.4211C36.0644 35.2821 36.0941 35.1332 36.0941 34.9827V15.4241L3.25769 15.3974ZM13.3129 28.5262V31.7067H10.1304V28.5262H13.3129ZM21.2661 28.5262V31.7067H18.0856V28.5262H21.2661ZM29.2213 28.5262V31.7067H26.0389V28.5262H29.2213ZM13.3129 20.9337V24.1143H10.1304V20.9337H13.3129ZM21.2661 20.9337V24.1143H18.0856V20.9337H21.2661ZM29.2213 20.9337V24.1143H26.0389V20.9337H29.2213ZM10.0789 7.12337H4.40314C4.25272 7.12337 4.10377 7.153 3.9648 7.21056C3.82582 7.26813 3.69955 7.3525 3.59318 7.45887C3.48682 7.56523 3.40245 7.6915 3.34488 7.83048C3.28732 7.96945 3.25769 8.1184 3.25769 8.26882V12.7266L36.0941 12.7533V8.26882C36.0941 8.1184 36.0644 7.96945 36.0069 7.83048C35.9493 7.6915 35.8649 7.56523 35.7586 7.45887C35.6522 7.3525 35.5259 7.26813 35.3869 7.21056C35.248 7.153 35.099 7.12337 34.9486 7.12337H29.775V8.89691C29.775 9.25134 29.6342 9.59125 29.3835 9.84187C29.1329 10.0925 28.793 10.2333 28.4386 10.2333C28.0842 10.2333 27.7443 10.0925 27.4936 9.84187C27.243 9.59125 27.1022 9.25134 27.1022 8.89691V7.12337H12.7516V8.87973C12.7516 9.23416 12.6108 9.57407 12.3602 9.82469C12.1096 10.0753 11.7697 10.2161 11.4152 10.2161C11.0608 10.2161 10.7209 10.0753 10.4703 9.82469C10.2197 9.57407 10.0789 9.23416 10.0789 8.87973V7.12337Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3291_4940">
                                                        <rect width="38.1818" height="38.1818" fill="white"
                                                            transform="translate(0.584961 0.617188)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span>
                                        <div class="date">
                                            <h3>DAY 1</h3>
                                            <p>Oct 8, 2025</p>
                                        </div>
                                    </div>
                                    <ul class="located">
                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                    stroke="#3C354F" stroke-width="1.8" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M10 5.83203V8.9687C10 9.27828 10.0862 9.58173 10.249 9.84505C10.4118 10.1084 10.6447 10.3212 10.9217 10.4595L13.3333 11.6654"
                                                    stroke="#3C354F" stroke-width="1.8" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>10:01 am - 6:30 pm </li>

                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M10 2.49953C8.4529 2.49953 6.96917 3.11411 5.87521 4.20808C4.78125 5.30204 4.16667 6.78577 4.16667 8.33286C4.16667 10.7179 5.65167 13.0187 7.28167 14.8012C8.11512 15.7092 9.02453 16.5445 10 17.2979C10.1456 17.1862 10.3164 17.0501 10.5125 16.8895C11.2957 16.2464 12.0328 15.5491 12.7183 14.8029C14.3483 13.0187 15.8333 10.7187 15.8333 8.33286C15.8333 6.78577 15.2188 5.30204 14.1248 4.20808C13.0308 3.11411 11.5471 2.49953 10 2.49953ZM10 19.3445L9.5275 19.0195L9.525 19.0179L9.52 19.0137L9.50333 19.002L9.44083 18.9579L9.21583 18.7937C8.07572 17.9369 7.01656 16.9773 6.05167 15.927C4.34833 14.062 2.5 11.3629 2.5 8.33203C2.5 6.34291 3.29018 4.43525 4.6967 3.02873C6.10322 1.62221 8.01088 0.832031 10 0.832031C11.9891 0.832031 13.8968 1.62221 15.3033 3.02873C16.7098 4.43525 17.5 6.34291 17.5 8.33203C17.5 11.3629 15.6517 14.0629 13.9483 15.9254C12.9837 16.9756 11.9248 17.9351 10.785 18.792C10.69 18.863 10.5942 18.9327 10.4975 19.0012L10.48 19.0129L10.475 19.017L10.4733 19.0179L10 19.3445ZM10 6.6662C9.55797 6.6662 9.13405 6.84179 8.82149 7.15435C8.50893 7.46691 8.33333 7.89084 8.33333 8.33286C8.33333 8.77489 8.50893 9.19882 8.82149 9.51138C9.13405 9.82394 9.55797 9.99953 10 9.99953C10.442 9.99953 10.866 9.82394 11.1785 9.51138C11.4911 9.19882 11.6667 8.77489 11.6667 8.33286C11.6667 7.89084 11.4911 7.46691 11.1785 7.15435C10.866 6.84179 10.442 6.6662 10 6.6662ZM6.66667 8.33286C6.66667 7.44881 7.01786 6.60096 7.64298 5.97584C8.2681 5.35072 9.11594 4.99953 10 4.99953C10.8841 4.99953 11.7319 5.35072 12.357 5.97584C12.9821 6.60096 13.3333 7.44881 13.3333 8.33286C13.3333 9.21692 12.9821 10.0648 12.357 10.6899C11.7319 11.315 10.8841 11.6662 10 11.6662C9.11594 11.6662 8.2681 11.315 7.64298 10.6899C7.01786 10.0648 6.66667 9.21692 6.66667 8.33286Z"
                                                    fill="#3C354F"></path>
                                            </svg>Dallas Texas</li>
                                    </ul>

                                </div>
                                <div class="speakers-links">
                                    <div class="all-speakers">
                                        <div class="speakers">
                                            <div class="img">
                                                <img src="wp-content/uploads/2025/07/team-img5.png"
                                                    alt="Annie Pollich" width="50">
                                            </div>
                                            <div class="text">

                                                <a href="index31af.html?tse_speaker=annie-pollich">
                                                    Annie Pollich </a>
                                                <p>Legacy Data Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <p>On Live Stream</p>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-spotify"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="event-info-boxarea section-bg">
                                <h3>OUR EVENT INFO </h3>
                                <div class="details1">
                                    <div class="calender-date">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                viewBox="0 0 39 39" fill="none">
                                                <g clip-path="url(#clip0_3291_4940)">
                                                    <path
                                                        d="M11.4152 0.617188C11.7697 0.617188 12.1096 0.757983 12.3602 1.0086C12.6108 1.25922 12.7516 1.59913 12.7516 1.95355V4.45255H27.1022V1.97073C27.1022 1.61631 27.243 1.2764 27.4936 1.02578C27.7443 0.775164 28.0842 0.634369 28.4386 0.634369C28.793 0.634369 29.1329 0.775164 29.3835 1.02578C29.6342 1.2764 29.775 1.61631 29.775 1.97073V4.45255H34.9486C35.9609 4.45255 36.9318 4.85456 37.6478 5.5702C38.3638 6.28583 38.7663 7.25651 38.7668 8.26882V34.9827C38.7663 35.995 38.3638 36.9657 37.6478 37.6814C36.9318 38.397 35.9609 38.799 34.9486 38.799H4.40314C3.39083 38.799 2.41995 38.397 1.70396 37.6814C0.987962 36.9657 0.585467 35.995 0.584961 34.9827L0.584961 8.26882C0.585467 7.25651 0.987962 6.28583 1.70396 5.5702C2.41995 4.85456 3.39083 4.45255 4.40314 4.45255H10.0789V1.95164C10.0794 1.59755 10.2204 1.25813 10.471 1.00792C10.7215 0.75772 11.0611 0.617187 11.4152 0.617188ZM3.25769 15.3974V34.9827C3.25769 35.1332 3.28732 35.2821 3.34488 35.4211C3.40245 35.5601 3.48682 35.6863 3.59318 35.7927C3.69955 35.8991 3.82582 35.9834 3.9648 36.041C4.10377 36.0986 4.25272 36.1282 4.40314 36.1282H34.9486C35.099 36.1282 35.248 36.0986 35.3869 36.041C35.5259 35.9834 35.6522 35.8991 35.7586 35.7927C35.8649 35.6863 35.9493 35.5601 36.0069 35.4211C36.0644 35.2821 36.0941 35.1332 36.0941 34.9827V15.4241L3.25769 15.3974ZM13.3129 28.5262V31.7067H10.1304V28.5262H13.3129ZM21.2661 28.5262V31.7067H18.0856V28.5262H21.2661ZM29.2213 28.5262V31.7067H26.0389V28.5262H29.2213ZM13.3129 20.9337V24.1143H10.1304V20.9337H13.3129ZM21.2661 20.9337V24.1143H18.0856V20.9337H21.2661ZM29.2213 20.9337V24.1143H26.0389V20.9337H29.2213ZM10.0789 7.12337H4.40314C4.25272 7.12337 4.10377 7.153 3.9648 7.21056C3.82582 7.26813 3.69955 7.3525 3.59318 7.45887C3.48682 7.56523 3.40245 7.6915 3.34488 7.83048C3.28732 7.96945 3.25769 8.1184 3.25769 8.26882V12.7266L36.0941 12.7533V8.26882C36.0941 8.1184 36.0644 7.96945 36.0069 7.83048C35.9493 7.6915 35.8649 7.56523 35.7586 7.45887C35.6522 7.3525 35.5259 7.26813 35.3869 7.21056C35.248 7.153 35.099 7.12337 34.9486 7.12337H29.775V8.89691C29.775 9.25134 29.6342 9.59125 29.3835 9.84187C29.1329 10.0925 28.793 10.2333 28.4386 10.2333C28.0842 10.2333 27.7443 10.0925 27.4936 9.84187C27.243 9.59125 27.1022 9.25134 27.1022 8.89691V7.12337H12.7516V8.87973C12.7516 9.23416 12.6108 9.57407 12.3602 9.82469C12.1096 10.0753 11.7697 10.2161 11.4152 10.2161C11.0608 10.2161 10.7209 10.0753 10.4703 9.82469C10.2197 9.57407 10.0789 9.23416 10.0789 8.87973V7.12337Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3291_4940">
                                                        <rect width="38.1818" height="38.1818" fill="white"
                                                            transform="translate(0.584961 0.617188)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span>
                                        <div class="date">
                                            <h3>DAY 2</h3>
                                            <p>Dec 12, 2025</p>
                                        </div>
                                    </div>
                                    <ul class="located">
                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                    stroke="#3C354F" stroke-width="1.8" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M10 5.83203V8.9687C10 9.27828 10.0862 9.58173 10.249 9.84505C10.4118 10.1084 10.6447 10.3212 10.9217 10.4595L13.3333 11.6654"
                                                    stroke="#3C354F" stroke-width="1.8" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>10:01 am - 6:30 pm </li>

                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M10 2.49953C8.4529 2.49953 6.96917 3.11411 5.87521 4.20808C4.78125 5.30204 4.16667 6.78577 4.16667 8.33286C4.16667 10.7179 5.65167 13.0187 7.28167 14.8012C8.11512 15.7092 9.02453 16.5445 10 17.2979C10.1456 17.1862 10.3164 17.0501 10.5125 16.8895C11.2957 16.2464 12.0328 15.5491 12.7183 14.8029C14.3483 13.0187 15.8333 10.7187 15.8333 8.33286C15.8333 6.78577 15.2188 5.30204 14.1248 4.20808C13.0308 3.11411 11.5471 2.49953 10 2.49953ZM10 19.3445L9.5275 19.0195L9.525 19.0179L9.52 19.0137L9.50333 19.002L9.44083 18.9579L9.21583 18.7937C8.07572 17.9369 7.01656 16.9773 6.05167 15.927C4.34833 14.062 2.5 11.3629 2.5 8.33203C2.5 6.34291 3.29018 4.43525 4.6967 3.02873C6.10322 1.62221 8.01088 0.832031 10 0.832031C11.9891 0.832031 13.8968 1.62221 15.3033 3.02873C16.7098 4.43525 17.5 6.34291 17.5 8.33203C17.5 11.3629 15.6517 14.0629 13.9483 15.9254C12.9837 16.9756 11.9248 17.9351 10.785 18.792C10.69 18.863 10.5942 18.9327 10.4975 19.0012L10.48 19.0129L10.475 19.017L10.4733 19.0179L10 19.3445ZM10 6.6662C9.55797 6.6662 9.13405 6.84179 8.82149 7.15435C8.50893 7.46691 8.33333 7.89084 8.33333 8.33286C8.33333 8.77489 8.50893 9.19882 8.82149 9.51138C9.13405 9.82394 9.55797 9.99953 10 9.99953C10.442 9.99953 10.866 9.82394 11.1785 9.51138C11.4911 9.19882 11.6667 8.77489 11.6667 8.33286C11.6667 7.89084 11.4911 7.46691 11.1785 7.15435C10.866 6.84179 10.442 6.6662 10 6.6662ZM6.66667 8.33286C6.66667 7.44881 7.01786 6.60096 7.64298 5.97584C8.2681 5.35072 9.11594 4.99953 10 4.99953C10.8841 4.99953 11.7319 5.35072 12.357 5.97584C12.9821 6.60096 13.3333 7.44881 13.3333 8.33286C13.3333 9.21692 12.9821 10.0648 12.357 10.6899C11.7319 11.315 10.8841 11.6662 10 11.6662C9.11594 11.6662 8.2681 11.315 7.64298 10.6899C7.01786 10.0648 6.66667 9.21692 6.66667 8.33286Z"
                                                    fill="#3C354F"></path>
                                            </svg>26/C, New York</li>
                                    </ul>

                                </div>
                                <div class="speakers-links">
                                    <div class="all-speakers">
                                        <div class="speakers">
                                            <div class="img">
                                                <img src="wp-content/uploads/2025/07/team-img2.png" alt="John Doe"
                                                    width="50">
                                            </div>
                                            <div class="text">

                                                <a href="indexd69f.html?tse_speaker=john-doe">
                                                    John Doe </a>
                                                <p>Dynamic Motivational Speaker</p>
                                            </div>
                                        </div>
                                        <div class="speakers">
                                            <div class="img">
                                                <img src="wp-content/uploads/2025/07/team-img4.png"
                                                    alt="Kireon Pollardy" width="50">
                                            </div>
                                            <div class="text">

                                                <a href="index0368.html?tse_speaker=kireon-pollardy">
                                                    Kireon Pollardy </a>
                                                <p>CEO - Global Citizs</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <p>On Live Stream</p>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-spotify"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="event-info-boxarea section-bg">
                                <h3>OUR EVENT INFO </h3>
                                <div class="details1">
                                    <div class="calender-date">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                viewBox="0 0 39 39" fill="none">
                                                <g clip-path="url(#clip0_3291_4940)">
                                                    <path
                                                        d="M11.4152 0.617188C11.7697 0.617188 12.1096 0.757983 12.3602 1.0086C12.6108 1.25922 12.7516 1.59913 12.7516 1.95355V4.45255H27.1022V1.97073C27.1022 1.61631 27.243 1.2764 27.4936 1.02578C27.7443 0.775164 28.0842 0.634369 28.4386 0.634369C28.793 0.634369 29.1329 0.775164 29.3835 1.02578C29.6342 1.2764 29.775 1.61631 29.775 1.97073V4.45255H34.9486C35.9609 4.45255 36.9318 4.85456 37.6478 5.5702C38.3638 6.28583 38.7663 7.25651 38.7668 8.26882V34.9827C38.7663 35.995 38.3638 36.9657 37.6478 37.6814C36.9318 38.397 35.9609 38.799 34.9486 38.799H4.40314C3.39083 38.799 2.41995 38.397 1.70396 37.6814C0.987962 36.9657 0.585467 35.995 0.584961 34.9827L0.584961 8.26882C0.585467 7.25651 0.987962 6.28583 1.70396 5.5702C2.41995 4.85456 3.39083 4.45255 4.40314 4.45255H10.0789V1.95164C10.0794 1.59755 10.2204 1.25813 10.471 1.00792C10.7215 0.75772 11.0611 0.617187 11.4152 0.617188ZM3.25769 15.3974V34.9827C3.25769 35.1332 3.28732 35.2821 3.34488 35.4211C3.40245 35.5601 3.48682 35.6863 3.59318 35.7927C3.69955 35.8991 3.82582 35.9834 3.9648 36.041C4.10377 36.0986 4.25272 36.1282 4.40314 36.1282H34.9486C35.099 36.1282 35.248 36.0986 35.3869 36.041C35.5259 35.9834 35.6522 35.8991 35.7586 35.7927C35.8649 35.6863 35.9493 35.5601 36.0069 35.4211C36.0644 35.2821 36.0941 35.1332 36.0941 34.9827V15.4241L3.25769 15.3974ZM13.3129 28.5262V31.7067H10.1304V28.5262H13.3129ZM21.2661 28.5262V31.7067H18.0856V28.5262H21.2661ZM29.2213 28.5262V31.7067H26.0389V28.5262H29.2213ZM13.3129 20.9337V24.1143H10.1304V20.9337H13.3129ZM21.2661 20.9337V24.1143H18.0856V20.9337H21.2661ZM29.2213 20.9337V24.1143H26.0389V20.9337H29.2213ZM10.0789 7.12337H4.40314C4.25272 7.12337 4.10377 7.153 3.9648 7.21056C3.82582 7.26813 3.69955 7.3525 3.59318 7.45887C3.48682 7.56523 3.40245 7.6915 3.34488 7.83048C3.28732 7.96945 3.25769 8.1184 3.25769 8.26882V12.7266L36.0941 12.7533V8.26882C36.0941 8.1184 36.0644 7.96945 36.0069 7.83048C35.9493 7.6915 35.8649 7.56523 35.7586 7.45887C35.6522 7.3525 35.5259 7.26813 35.3869 7.21056C35.248 7.153 35.099 7.12337 34.9486 7.12337H29.775V8.89691C29.775 9.25134 29.6342 9.59125 29.3835 9.84187C29.1329 10.0925 28.793 10.2333 28.4386 10.2333C28.0842 10.2333 27.7443 10.0925 27.4936 9.84187C27.243 9.59125 27.1022 9.25134 27.1022 8.89691V7.12337H12.7516V8.87973C12.7516 9.23416 12.6108 9.57407 12.3602 9.82469C12.1096 10.0753 11.7697 10.2161 11.4152 10.2161C11.0608 10.2161 10.7209 10.0753 10.4703 9.82469C10.2197 9.57407 10.0789 9.23416 10.0789 8.87973V7.12337Z"
                                                        fill="white"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3291_4940">
                                                        <rect width="38.1818" height="38.1818" fill="white"
                                                            transform="translate(0.584961 0.617188)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg></span>
                                        <div class="date">
                                            <h3>DAY 3</h3>
                                            <p>Dec 13, 2025</p>
                                        </div>
                                    </div>
                                    <ul class="located">
                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                    stroke="#3C354F" stroke-width="1.8" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M10 5.83203V8.9687C10 9.27828 10.0862 9.58173 10.249 9.84505C10.4118 10.1084 10.6447 10.3212 10.9217 10.4595L13.3333 11.6654"
                                                    stroke="#3C354F" stroke-width="1.8" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>10:01 am - 6:30 pm </li>

                                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M10 2.49953C8.4529 2.49953 6.96917 3.11411 5.87521 4.20808C4.78125 5.30204 4.16667 6.78577 4.16667 8.33286C4.16667 10.7179 5.65167 13.0187 7.28167 14.8012C8.11512 15.7092 9.02453 16.5445 10 17.2979C10.1456 17.1862 10.3164 17.0501 10.5125 16.8895C11.2957 16.2464 12.0328 15.5491 12.7183 14.8029C14.3483 13.0187 15.8333 10.7187 15.8333 8.33286C15.8333 6.78577 15.2188 5.30204 14.1248 4.20808C13.0308 3.11411 11.5471 2.49953 10 2.49953ZM10 19.3445L9.5275 19.0195L9.525 19.0179L9.52 19.0137L9.50333 19.002L9.44083 18.9579L9.21583 18.7937C8.07572 17.9369 7.01656 16.9773 6.05167 15.927C4.34833 14.062 2.5 11.3629 2.5 8.33203C2.5 6.34291 3.29018 4.43525 4.6967 3.02873C6.10322 1.62221 8.01088 0.832031 10 0.832031C11.9891 0.832031 13.8968 1.62221 15.3033 3.02873C16.7098 4.43525 17.5 6.34291 17.5 8.33203C17.5 11.3629 15.6517 14.0629 13.9483 15.9254C12.9837 16.9756 11.9248 17.9351 10.785 18.792C10.69 18.863 10.5942 18.9327 10.4975 19.0012L10.48 19.0129L10.475 19.017L10.4733 19.0179L10 19.3445ZM10 6.6662C9.55797 6.6662 9.13405 6.84179 8.82149 7.15435C8.50893 7.46691 8.33333 7.89084 8.33333 8.33286C8.33333 8.77489 8.50893 9.19882 8.82149 9.51138C9.13405 9.82394 9.55797 9.99953 10 9.99953C10.442 9.99953 10.866 9.82394 11.1785 9.51138C11.4911 9.19882 11.6667 8.77489 11.6667 8.33286C11.6667 7.89084 11.4911 7.46691 11.1785 7.15435C10.866 6.84179 10.442 6.6662 10 6.6662ZM6.66667 8.33286C6.66667 7.44881 7.01786 6.60096 7.64298 5.97584C8.2681 5.35072 9.11594 4.99953 10 4.99953C10.8841 4.99953 11.7319 5.35072 12.357 5.97584C12.9821 6.60096 13.3333 7.44881 13.3333 8.33286C13.3333 9.21692 12.9821 10.0648 12.357 10.6899C11.7319 11.315 10.8841 11.6662 10 11.6662C9.11594 11.6662 8.2681 11.315 7.64298 10.6899C7.01786 10.0648 6.66667 9.21692 6.66667 8.33286Z"
                                                    fill="#3C354F"></path>
                                            </svg>New york</li>
                                    </ul>

                                </div>
                                <div class="speakers-links">
                                    <div class="all-speakers">
                                        <div class="speakers">
                                            <div class="img">
                                                <img src="wp-content/uploads/2025/07/team-img5.png"
                                                    alt="Jaclin Farnandez" width="50">
                                            </div>
                                            <div class="text">

                                                <a href="index5d6f.html?tse_speaker=jaclin-farnandez">
                                                    Jaclin Farnandez </a>
                                                <p>CEO - Global Citizs</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="social">
                                        <p>On Live Stream</p>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa-brands fa-spotify"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="time-section-area event" data-event-time="1760918400">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="time-bg-area">
                        <div class="row align-items-center">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="timer" data-event-time="1760918400">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 time-wrapper" id="months-wrap">
                                                    <div class="time-box">
                                                        <img src="wp-content/themes/nexus/images/elements/elements7.png"
                                                            alt="element 7" class="elements7 keyframe5">
                                                        <p id="months" class="time-value">00</p>
                                                        <p class="time-label">Months</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 time-wrapper" id="days-wrap">
                                                    <div class="time-box">
                                                        <img src="wp-content/themes/nexus/images/elements/elements7.png"
                                                            alt="element 7" class="elements7 keyframe5">
                                                        <p id="days" class="time-value">00</p>
                                                        <p class="time-label">Days</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 time-wrapper" id="hours-wrap">
                                                    <div class="time-box">
                                                        <img src="wp-content/themes/nexus/images/elements/elements7.png"
                                                            alt="element 7" class="elements7 keyframe5">
                                                        <p id="hours" class="time-value">00</p>
                                                        <p class="time-label">Hours</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 time-wrapper" id="minutes-wrap">
                                                    <div class="time-box">
                                                        <img src="wp-content/themes/nexus/images/elements/elements7.png"
                                                            alt="element 7" class="elements7 keyframe5">
                                                        <p id="minutes" class="time-value">00</p>
                                                        <p class="time-label">Minutes</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 time-wrapper" id="seconds-wrap">
                                                    <div class="time-box">
                                                        <img src="wp-content/themes/nexus/images/elements/elements7.png"
                                                            alt="element 7" class="elements7 keyframe5">
                                                        <p id="seconds" class="time-value">00</p>
                                                        <p class="time-label">Seconds</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="btn-area1">
                                    <a href="indexae87.html?tribe_events=farmers-market#tribe-tickets"
                                        class="vl-btn1">
                                        <span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__shape"></span>
                                        <span class="nisoz-btn__shape"></span>
                                        <span class="vl-btn1__text">
                                            Buy Ticket </span>
                                    </a>
                                </div>
                            </div>
                        </div> <!-- row align-items-center -->
                    </div> <!-- time-bg-area -->
                </div>
            </div>
        </div>
    </div>

    <div class="event1-section-area event sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="heading1">
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            <img src="wp-content/themes/nexus/images/icons/sub-logo1.svg" alt="sub logo1">
                            EXPLORE WEBINARS
                        </h5>
                        <div class="space20"></div>
                        <h2 class="text-anime-style-3">UPCOMING EVENTS YOU CAN’T MISS</h2>
                        <div class="space16"></div>
                        <p>Our webinars are design to deliver action insight, experts knowledge.</p>
                        <div class="space32"></div>
                        <div class="btn-area1">
                            <a href="indexae87.html?tribe_events=farmers-market" class="vl-btn1" target="_blank">
                                <span class="nisoz-btn__shape"></span>
                                <span class="nisoz-btn__shape"></span>
                                <span class="nisoz-btn__shape"></span>
                                <span class="nisoz-btn__shape"></span>
                                <span class="vl-btn1__text">
                                    JOIN THE WEBINAR </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-8">

                    <div class="event-section" data-aos="fade-left" data-aos-duration="900">
                        <div class="top-section">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="image-container">
                                        <a href="indexb790.html?tribe_events=dinner-party">
                                            <img src="wp-content/uploads/2025/07/gallery-img7.png" alt="Dinner Party">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="details">
                                        <div class="calender-date">
                                            <span><i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                            <div class="date">
                                                <h3>EVENT 1</h3>
                                                <p>Oct 6, 2025</p>
                                            </div>
                                        </div>
                                        <ul class="located">
                                            <li><i class="fa-solid fa-clock"></i>10:00 pm - 12:30 am</li>
                                            <li><i class="fa-solid fa-location-dot"></i>Strategic Event Design NYC</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button class="toggle-btn" onclick="toggleDetails(1)">
                                <span class="arrow"><i class="fa-solid fa-angle-up"></i></span>
                            </button>
                        </div>
                        <div class="bottom-section active" id="bottomSection1">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="heading-area">
                                        <h4>Dinner Party</h4>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="speakers">
                                                    <div class="img">
                                                        <img src="wp-content/uploads/2025/07/team-img5.png"
                                                            alt="Jaclin Farnandez" width="50">
                                                    </div>
                                                    <div class="text">

                                                        <a href="index5d6f.html?tse_speaker=jaclin-farnandez">
                                                            Jaclin Farnandez </a>
                                                        <p>CEO - Global Citizs</p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="speakers">
                                                    <div class="img">
                                                        <img src="wp-content/uploads/2025/07/team-img4.png"
                                                            alt="Kireon Pollardy" width="50">
                                                    </div>
                                                    <div class="text">

                                                        <a href="index0368.html?tse_speaker=kireon-pollardy">
                                                            Kireon Pollardy </a>
                                                        <p>CEO - Global Citizs</p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-area1">
                                            <a href="indexb790.html?tribe_events=dinner-party#tribe-tickets"
                                                class="vl-btn1">
                                                <span class="vl-btn1__text">
                                                    Purchase Ticket</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="social">
                                        <p>On Live Stream</p>
                                        <ul>
                                            <li><a href="#">
                                                    <i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-spotify"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="event-section" data-aos="fade-left" data-aos-duration="1000">
                        <div class="top-section">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="image-container">
                                        <a href="indexcc58.html?tribe_events=cupcake-decorating">
                                            <img src="wp-content/uploads/2025/07/gallery-img9.png"
                                                alt="Cupcake Decorating">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="details">
                                        <div class="calender-date">
                                            <span><i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                            <div class="date">
                                                <h3>EVENT 2</h3>
                                                <p>Oct 18, 2025</p>
                                            </div>
                                        </div>
                                        <ul class="located">
                                            <li><i class="fa-solid fa-clock"></i>5:30 pm - 7:30 pm</li>
                                            <li><i class="fa-solid fa-location-dot"></i>Strategic Event Design NYC</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button class="toggle-btn" onclick="toggleDetails(2)">
                                <span class="arrow"><i class="fa-solid fa-angle-up"></i></span>
                            </button>
                        </div>
                        <div class="bottom-section " id="bottomSection2">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="heading-area">
                                        <h4>Cupcake Decorating</h4>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="speakers">
                                                    <div class="img">
                                                        <img src="wp-content/uploads/2025/07/team-img5.png"
                                                            alt="Annie Pollich" width="50">
                                                    </div>
                                                    <div class="text">

                                                        <a href="index31af.html?tse_speaker=annie-pollich">
                                                            Annie Pollich </a>
                                                        <p>Legacy Data Manager</p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-area1">
                                            <a href="indexcc58.html?tribe_events=cupcake-decorating#tribe-tickets"
                                                class="vl-btn1">
                                                <span class="vl-btn1__text">
                                                    Purchase Ticket</span>
                                            </a>
                                            <p class="price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                                    viewBox="0 0 25 24" fill="none">
                                                    <path
                                                        d="M3.24902 9L3.24902 20C3.24902 20.5523 3.69674 21 4.24902 21H21.249C21.8013 21 22.249 20.5523 22.249 20V9C22.249 8.44771 21.8013 8 21.249 8L4.24902 8C3.69674 8 3.24902 8.44771 3.24902 9Z"
                                                        stroke="#FF0A54" stroke-width="1.7"
                                                        stroke-linejoin="bevel" />
                                                    <path d="M5.24902 8L16.749 2.5L19.249 8" stroke="#FF0A54"
                                                        stroke-width="1.7" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.24902 12.5C7.80131 12.5 8.24902 12.0523 8.24902 11.5C8.24902 10.9477 7.80131 10.5 7.24902 10.5C6.69674 10.5 6.24902 10.9477 6.24902 11.5C6.24902 12.0523 6.69674 12.5 7.24902 12.5Z"
                                                        fill="#FF0A54" />
                                                    <path
                                                        d="M7.24902 15.5C7.80131 15.5 8.24902 15.0523 8.24902 14.5C8.24902 13.9477 7.80131 13.5 7.24902 13.5C6.69674 13.5 6.24902 13.9477 6.24902 14.5C6.24902 15.0523 6.69674 15.5 7.24902 15.5Z"
                                                        fill="#FF0A54" />
                                                    <path
                                                        d="M7.24902 18.5C7.80131 18.5 8.24902 18.0523 8.24902 17.5C8.24902 16.9477 7.80131 16.5 7.24902 16.5C6.69674 16.5 6.24902 16.9477 6.24902 17.5C6.24902 18.0523 6.69674 18.5 7.24902 18.5Z"
                                                        fill="#FF0A54" />
                                                    <path d="M11.249 17.5H13.249L18.749 11.5M12.749 14.5H15.749"
                                                        stroke="#FF0A54" stroke-width="1.7" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                $150
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="social">
                                        <p>On Live Stream</p>
                                        <ul>
                                            <li><a href="#">
                                                    <i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-spotify"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="event-section" data-aos="fade-left" data-aos-duration="1100">
                        <div class="top-section">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="image-container">
                                        <a href="indexda8e.html?tribe_events=movie-marathon">
                                            <img src="wp-content/uploads/2025/07/gallery-img11.png"
                                                alt="Movie Marathon">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="details">
                                        <div class="calender-date">
                                            <span><i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                            <div class="date">
                                                <h3>EVENT 3</h3>
                                                <p>Oct 26, 2025</p>
                                            </div>
                                        </div>
                                        <ul class="located">
                                            <li><i class="fa-solid fa-clock"></i>2:00 pm - 12:00 am</li>
                                            <li><i class="fa-solid fa-location-dot"></i>Strategic Event Design NYC</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button class="toggle-btn" onclick="toggleDetails(3)">
                                <span class="arrow"><i class="fa-solid fa-angle-up"></i></span>
                            </button>
                        </div>
                        <div class="bottom-section " id="bottomSection3">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="heading-area">
                                        <h4>Movie Marathon</h4>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="speakers">
                                                    <div class="img">
                                                        <img src="wp-content/uploads/2025/07/team-img4.png"
                                                            alt="Kireon Pollardy" width="50">
                                                    </div>
                                                    <div class="text">

                                                        <a href="index0368.html?tse_speaker=kireon-pollardy">
                                                            Kireon Pollardy </a>
                                                        <p>CEO - Global Citizs</p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-area1">
                                            <a href="indexda8e.html?tribe_events=movie-marathon#tribe-tickets"
                                                class="vl-btn1">
                                                <span class="vl-btn1__text">
                                                    Purchase Ticket</span>
                                            </a>
                                            <p class="price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                                    viewBox="0 0 25 24" fill="none">
                                                    <path
                                                        d="M3.24902 9L3.24902 20C3.24902 20.5523 3.69674 21 4.24902 21H21.249C21.8013 21 22.249 20.5523 22.249 20V9C22.249 8.44771 21.8013 8 21.249 8L4.24902 8C3.69674 8 3.24902 8.44771 3.24902 9Z"
                                                        stroke="#FF0A54" stroke-width="1.7"
                                                        stroke-linejoin="bevel" />
                                                    <path d="M5.24902 8L16.749 2.5L19.249 8" stroke="#FF0A54"
                                                        stroke-width="1.7" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M7.24902 12.5C7.80131 12.5 8.24902 12.0523 8.24902 11.5C8.24902 10.9477 7.80131 10.5 7.24902 10.5C6.69674 10.5 6.24902 10.9477 6.24902 11.5C6.24902 12.0523 6.69674 12.5 7.24902 12.5Z"
                                                        fill="#FF0A54" />
                                                    <path
                                                        d="M7.24902 15.5C7.80131 15.5 8.24902 15.0523 8.24902 14.5C8.24902 13.9477 7.80131 13.5 7.24902 13.5C6.69674 13.5 6.24902 13.9477 6.24902 14.5C6.24902 15.0523 6.69674 15.5 7.24902 15.5Z"
                                                        fill="#FF0A54" />
                                                    <path
                                                        d="M7.24902 18.5C7.80131 18.5 8.24902 18.0523 8.24902 17.5C8.24902 16.9477 7.80131 16.5 7.24902 16.5C6.69674 16.5 6.24902 16.9477 6.24902 17.5C6.24902 18.0523 6.69674 18.5 7.24902 18.5Z"
                                                        fill="#FF0A54" />
                                                    <path d="M11.249 17.5H13.249L18.749 11.5M12.749 14.5H15.749"
                                                        stroke="#FF0A54" stroke-width="1.7" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                $50
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="social">
                                        <p>On Live Stream</p>
                                        <ul>
                                            <li><a href="#">
                                                    <i class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-spotify"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection


















































































@section('styles')














<link rel='stylesheet' id='tribe-events-views-v2-bootstrap-datepicker-styles-css' href='wp-content/plugins/the-events-calendar/vendor/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min4e54.css?ver=6.15.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='tec-variables-skeleton-css' href='wp-content/plugins/event-tickets/common/build/css/variables-skeleton4d80.css?ver=6.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-common-skeleton-style-css' href='wp-content/plugins/event-tickets/common/build/css/common-skeleton4d80.css?ver=6.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-tooltipster-css-css' href='wp-content/plugins/event-tickets/common/vendor/tooltipster/tooltipster.bundle.min4d80.css?ver=6.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-events-views-v2-skeleton-css' href='wp-content/plugins/the-events-calendar/build/css/views-skeleton4e54.css?ver=6.15.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='tec-variables-full-css' href='wp-content/plugins/event-tickets/common/build/css/variables-full4d80.css?ver=6.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-common-full-style-css' href='wp-content/plugins/event-tickets/common/build/css/common-full4d80.css?ver=6.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-events-views-v2-full-css' href='wp-content/plugins/the-events-calendar/build/css/views-full4e54.css?ver=6.15.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-events-views-v2-print-css' href='wp-content/plugins/the-events-calendar/build/css/views-print4e54.css?ver=6.15.0.1' type='text/css' media='print' />
<meta name='robots' content='max-image-preview:large' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	<link rel='dns-prefetch' href='../../../../fonts.googleapis.com/index.html' />
<link rel="alternate" type="application/rss+xml" title="NexusEvent &raquo; Feed" href="indexd784.html?feed=rss2" />
<link rel="alternate" type="application/rss+xml" title="NexusEvent &raquo; Comments Feed" href="indexa6da.html?feed=comments-rss2" />
<link rel="alternate" type="text/calendar" title="NexusEvent &raquo; iCal Feed" href="indexc074.html?post_type=tribe_events&amp;ical=1" />
{{-- <script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/jthemes.net\/themes\/wp\/nexus\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2"}};
/*! This file is auto-generated */
!function(s,n){var o,i,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),a=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===a[t]})}function u(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);for(var n=e.getImageData(16,16,1,1),a=0;a<n.data.length;a++)if(0!==n.data[a])return!1;return!0}function f(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\udedf")}return!1}function g(e,t,n,a){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):s.createElement("canvas"),o=r.getContext("2d",{willReadFrequently:!0}),i=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(function(e){i[e]=t(o,e,n,a)}),i}function t(e){var t=s.createElement("script");t.src=e,t.defer=!0,s.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",i=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){s.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+g.toString()+"("+[JSON.stringify(i),f.toString(),p.toString(),u.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"}),r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=function(e){c(n=e.data),r.terminate(),t(n)})}catch(e){}c(n=g(i,f,p,u))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script> --}}
<link rel='stylesheet' id='dashicons-css' href='wp-includes/css/dashicons.min6c2d.css?ver=6.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='event-tickets-tickets-css-css' href='wp-content/plugins/event-tickets/build/css/ticketsd578.css?ver=5.26.1' type='text/css' media='all' />
<link rel='stylesheet' id='event-tickets-tickets-rsvp-css-css' href='wp-content/plugins/event-tickets/build/css/rsvp-v1d578.css?ver=5.26.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-events-v2-single-skeleton-css' href='wp-content/plugins/the-events-calendar/build/css/tribe-events-single-skeleton4e54.css?ver=6.15.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-events-v2-single-skeleton-full-css' href='wp-content/plugins/the-events-calendar/build/css/tribe-events-single-full4e54.css?ver=6.15.0.1' type='text/css' media='all' />
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min6c2d.css?ver=6.8.2' type='text/css' media='all' />
<style id='wp-block-library-theme-inline-css' type='text/css'>
.wp-block-audio :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio :where(figcaption){color:#ffffffa6}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed :where(figcaption){color:#ffffffa6}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:#ffffffa6}:root :where(.wp-block-image figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme :root :where(.wp-block-image figcaption){color:#ffffffa6}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-bottom:4px solid;border-top:4px solid;color:currentColor;margin-bottom:1.75em}.wp-block-pullquote cite,.wp-block-pullquote footer,.wp-block-pullquote__citation{color:currentColor;font-size:.8125em;font-style:normal;text-transform:uppercase}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;font-style:normal;position:relative}.wp-block-quote:where(.has-text-align-right){border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote:where(.has-text-align-center){border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote:where(.is-style-plain){border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:0 0 1em}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table :where(figcaption){color:#ffffffa6}.wp-block-video :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video :where(figcaption){color:#ffffffa6}.wp-block-video{margin:0 0 1em}:root :where(.wp-block-template-part.has-background){margin-bottom:0;margin-top:0;padding:1.25em 2.375em}
</style>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='frontend-login-with-gutenberg-blocks-login-form-style-inline-css' type='text/css'>


</style>
<style id='frontend-login-with-gutenberg-blocks-register-form-style-inline-css' type='text/css'>


</style>
<style id='frontend-login-with-gutenberg-blocks-reset-password-form-style-inline-css' type='text/css'>


</style>
<style id='frontend-login-with-gutenberg-blocks-user-activation-style-inline-css' type='text/css'>


</style>
<style id='frontend-login-with-gutenberg-blocks-welcome-card-style-inline-css' type='text/css'>


</style>
<style id='frontend-login-with-gutenberg-blocks-user-settings-form-style-inline-css' type='text/css'>


</style>
<style id='frontend-login-with-gutenberg-blocks-logout-nav-menu-item-style-inline-css' type='text/css'>


</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles6a4d.css?ver=6.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='flr-blocks-public-css' href='wp-content/plugins/frontend-login-and-registration-blocks/public/css/flr-blocks-public7359.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='tse-frontend-css-css' href='wp-content/plugins/tse-schedule-manager/assets/css/tse-frontend6c2d.css?ver=6.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='tec-events-elementor-widgets-base-styles-css' href='wp-content/plugins/the-events-calendar/build/css/integrations/plugins/elementor/widgets/widget-base4e54.css?ver=6.15.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-event-template-23-css' href='wp-content/uploads/elementor/css/post-234e54.html?ver=6.15.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='nexus-fonts-css' href='../../../../fonts.googleapis.com/css2529b.css?family=Bricolage+Grotesque:wght@200;300;400;500;600;700;800&amp;family=Figtree:wght@300;400;500;600;700;800;900&amp;display=swap' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/nexus/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css' href='wp-content/themes/nexus/css/fontawesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='aos-css' href='wp-content/themes/nexus/css/aos.css' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css' href='wp-content/themes/nexus/css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='owlcarousel-css' href='wp-content/themes/nexus/css/owlcarousel.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='sidebar-css' href='wp-content/themes/nexus/css/sidebar.css' type='text/css' media='all' />
<link rel='stylesheet' id='slick-slider-css' href='wp-content/themes/nexus/css/slick-slider.css' type='text/css' media='all' />
<link rel='stylesheet' id='nice-select-css' href='wp-content/themes/nexus/css/nice-select.css' type='text/css' media='all' />
<link rel='stylesheet' id='lightbox-css' href='wp-content/themes/nexus/css/lightbox.css' type='text/css' media='all' />
<link rel='stylesheet' id='nexus-custom-icon-css' href='wp-content/themes/nexus/css/custom-icon.css' type='text/css' media='all' />
<link rel='stylesheet' id='nexus-styles-css' href='wp-content/themes/nexus/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='nexus-main-css' href='wp-content/themes/nexus/css/main.css' type='text/css' media='all' />
<link rel='stylesheet' id='nexus-responsive-css' href='wp-content/themes/nexus/css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='nexus-style-css' href='wp-content/themes/nexus/style6c2d.css?ver=6.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='nexus-custom-banner-style-css' href='wp-content/themes/nexus/css/custom_style_banner6c2d.css?ver=6.8.2' type='text/css' media='all' />
<style id='nexus-custom-banner-style-inline-css' type='text/css'>
.page-header {
                background-image: url(wp-content/themes/nexus/images/banner.png);
            }.cta1-section-area.space-bottom .cta1-main-boxarea.heading1 {
            background-image: url(wp-content/uploads/2025/06/cta-bg1.png);
        }body{ }.container{ }.sidebar{ }.sidebar{ }.main-footer, .main-footer-two{ }.main-footer__bg{ }.main-footer__shape{ }.copyrights{ }body{  }a{  }.navbar-nav > li > a{  }.nexus-dd a,.nexus-mm a{  }h1{  }h2{  }h3{  }h4{  }h5{  }h6{  }.sidebar .widget-title{  }.sidebar p{  }.sidebar a{  }.footer-bottom-part p, .copyrights p{  }.footer-bottom-part .widget-title{  }.footer .footer-bottom-part .footer-contact h5{  }.footer-bottom-part .footer-widget-area ul li a, .copyrights .footer-menu li a{  }.related-blog .title-01 h2{  }.homepage3-menu .vl-main-menu ul > li .sub-menu::after, .homepage3-menu .vl-main-menu ul > li .sub-menu li a::after, .vl-btn3{ background-color: #ff0a54; } a:hover, a:focus, .vl-footer1-section-area.footer-inner .footer-links-area ul li a:hover, .homepage3-menu .vl-main-menu ul > li .sub-menu li:hover > a{ color: #ff0a54; } 
</style>
<link rel='stylesheet' id='newsletter-css' href='wp-content/plugins/newsletter/stylecc96.css?ver=8.9.4' type='text/css' media='all' />
<link rel='stylesheet' id='event-tickets-rsvp-css' href='wp-content/plugins/event-tickets/build/css/rsvpd578.css?ver=5.26.1' type='text/css' media='all' />
<script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="wp-content/plugins/event-tickets/common/build/js/tribe-commonb2da.js?ver=9c44e11f3503a33e9540" id="tribe-common-js"></script>
<script type="text/javascript" src="wp-content/plugins/the-events-calendar/build/js/views/breakpointsfb02.js?ver=4208de2df2852e0b91ec" id="tribe-events-views-v2-breakpoints-js"></script>
<link rel="https://api.w.org/" href="index52f0.json?rest_route=/" /><link rel="alternate" title="JSON" type="application/json" href="indexdedf.json?rest_route=/wp/v2/tribe_events/22" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<meta name="generator" content="WordPress 6.8.2" />
<link rel="canonical" href="indexae87.html?tribe_events=farmers-market" />
<link rel='shortlink' href='index0345.html?p=22' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="indexdac8.json?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fjthemes.net%2Fthemes%2Fwp%2Fnexus%2F%3Ftribe_events%3Dfarmers-market" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="index7351.php?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fjthemes.net%2Fthemes%2Fwp%2Fnexus%2F%3Ftribe_events%3Dfarmers-market&amp;format=xml" />
<meta name="et-api-version" content="v1"><meta name="et-api-origin" content="https://jthemes.net/themes/wp/nexus"><link rel="https://theeventscalendar.com/" href="indexe536.json?rest_route=/tribe/tickets/v1/" /><meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="https://jthemes.net/themes/wp/nexus"><link rel="alternate" href="index1eed.json?rest_route=/tribe/events/v1/events/22" /><meta name="generator" content="Elementor 3.31.3; features: e_font_icon_svg, additional_custom_breakpoints, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			{{-- <script type="application/ld+json">
[{"@context":"http://schema.org","@type":"Event","name":"Farmer\u2019s Market","description":"&lt;p&gt;Who\\'s that then? Shh! Knights Who\\'s that then? Shh! Knights, I bid you welcome to your new home. Let us ride to Camelot! Ah, now we see the violence inherent in the system! The Lady of the Lake, her arm clad in the purest shimmering samite&lt;/p&gt;\\n","image":"https://jthemes.net/themes/wp/nexus/wp-content/uploads/2025/07/gallery-img8.png","url":"https://jthemes.net/themes/wp/nexus/?tribe_events=farmers-market","offers":[{"@type":"Offer","url":"https://jthemes.net/themes/wp/nexus/?tribe_events=farmers-market","price":"200","category":"primary","availability":"InStock","priceCurrency":"USD","validFrom":"2025-07-31T00:00:00+00:00","validThrough":"2025-10-20T00:00:00+00:00"}],"eventAttendanceMode":"https://schema.org/OfflineEventAttendanceMode","eventStatus":"https://schema.org/EventScheduled","startDate":"2025-10-20T00:00:00-04:00","endDate":"2025-10-25T00:00:00-04:00","location":{"@type":"Place","name":"Strategic Event Design NYC","description":"","url":"","address":{"@type":"PostalAddress","streetAddress":"32 Union Square East","addressLocality":"New York","addressRegion":"NY","postalCode":"10003","addressCountry":"United States"},"telephone":"","sameAs":""},"organizer":{"@type":"Person","name":"Nexus","description":"","url":"","telephone":"982732323","email":"n&#101;xus&#64;gm&#97;&#105;&#108;.&#99;o&#109;","sameAs":""},"performer":"Organization"}]
</script> --}}
<link rel="icon" href="wp-content/uploads/2025/06/fav-logo2.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2025/06/fav-logo2.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2025/06/fav-logo2.png" />
<meta name="msapplication-TileImage" content="https://jthemes.net/themes/wp/nexus/wp-content/uploads/2025/06/fav-logo2.png" />
		<style type="text/css" id="wp-custom-css">
			.style2-footer.vl-footer3-section-area{
  background: #090b0e;
}
.cta3-section-area{
  background: #16171a;
}
.speaker-full-width-content{
	display:none;
}
.team-details-section .heading1 h2 {
  margin-bottom: 18px;
}
.team-details-section .heading1 h3{
  margin-top: 40px;
}
.team-details-section .heading1 ul{
  padding-left: 0;
}
.vl-footer1-section-area.footer-inner .footer-widget-area .wp-block-heading, .vl-footer3-section-area .footer-widget-area .wp-block-heading{
	color: var(--ztc-text-text-1);
}
.vl-footer2-section-area .vl-btn3
 {
	 background-color: #fbff51;
}
.vl-footer2-section-area .vl-btn3:hover
{
	color: #fff;
}
.vl-footer2-section-area .vl-btn3::after {
	background: #000;
}
.speakers-links .social ul{
  margin-bottom: 0;
}
.speakers-links .social {
  padding: 7px 0;
  margin: 0 0 0 10px;
  display: inline-block;
}
.event1-section-area .event-section .bottom-section .social li,
.speakers-links .social li {
  list-style: none;
  display: inline-block;
  margin-right: 10px;
  font-weight: 600;
}

.event1-section-area .event-section .bottom-section .social{
  padding: 7px 0;
  display: inline-block;
}
.text-heading .social {
  margin: 0;
  padding: 0;
}
.sidebar__title{
  text-transform: uppercase;
}
.service5-section-area .service-event-box .event2-boxarea .content-area .author-area {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}
.memories-archive-section{
	padding-bottom: 60px;
}
@media (max-width: 767px) {
  .event1-section-area .event-section .bottom-section .social {
    padding: 20px;
  }
}
.pagination {
	margin-top: 30px;
	padding-bottom:0;
}
.team1-section-area .speakers-slider-area .team-boxarea .content-area a{
	margin-bottom: 14px;
}
.row > .footer-widget-area:nth-of-type(2) .footer-links-area{
  padding-left: 70px;
}
.event-tickets .tribe-tickets__tickets-buy.tribe-common-c-btn:focus{
  color: #fff;
}
@media (max-width: 991px) {
  .row > .footer-widget-area:nth-of-type(2) .footer-links-area{
    padding-left: 0;
  }
}
.team-inner-section-area .team4-box.box2 .image-area .image .img img {
	border-radius: 50%;
}
.team-details-section .personal-info-boxarea .team5-box.box2 .image-area .image .img img {
	border-radius: 50%;
	}		</style>





















@endsection
