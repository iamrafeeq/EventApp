<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- @include('layout.head') --}}

    <style>
        .inner-header-area.page-header h1 {
            color: gray !important;
        }
        .inner-header-area.page-header .nexus-breadcrumb li,
        .inner-header-area.page-header .nexus-breadcrumb li a {
            color: gray !important;
        }
    </style>
    <!-- Custom styles: -->
    @section('styles')
        @include('layout.head')
    @show

    @stack('styles')
</head>
<body class="wp-singular page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-46 wp-theme-nexus tribe-no-js tec-no-tickets-on-recurring tec-no-rsvp-on-recurring wide layout-full elementor-default elementor-kit-7 elementor-page elementor-page-46 tribe-theme-nexus">
    
    
    <div class="paginacontainer">
        <div class="progress-wrap progress2">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    <div id="wrapper">

        @include('layout.header')


        @yield('main')

        
        @include('layout.cta')
        
        @include('layout.footer')
    </div>


    @include('layout.scripts')
    @stack('scripts')
</body>
</html>