
<!DOCTYPE html>
<html>
{{-- begin::Head --}}
<head>
    <meta charset="utf-8"/>
    <title>@if(!isset($pageTitle)) @yield('title') @else {{$pageTitle}} @endif</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="canonical" href=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('public/assets/media/logos/favicon.ico') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link href="{{ asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
    
        <link href="{{ asset('public/assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('public/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('public/assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'Tajawal', sans-serif;
            }

            .mr-10
            {
                margin-right: 10px;
            }
            .count
            {
                position: absolute;
                background: red;
                color: white;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                font-size: 14px;
                font-weight: bold;
                /* padding: 50%; */
                right: 0;
                top: -2px;
                padding: 0 7px;
                display: none;
            }
            .ltr
            {
                direction: ltr !important;
            }
            .float-right
            {
                float: right !important;
            }
        </style>
        <link href="{{ asset('public/custom.css') }}" rel="stylesheet" type="text/css"/>
  
    <link href="{{ asset('public/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{  asset('public/assets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />



    @stack('styles')
</head>
{{-- end::Head --}}

{{-- begin::Body --}}
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">

            @include('template.sidebar')

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper" style="padding-top: 45px !important;">
                @include('template.header')
              

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @yield('content')
                </div>

                @include('template.footer')

            </div>
        </div>
    </div>

    <script src="{{ asset('public/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

    <script src="{{ asset('public/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom/modals/create-app.js') }}"></script>

    <script src="{{ asset('public/assets/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/components/form-repeater.js') }}" type="text/javascript"></script>


    {{--  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-messaging.js"></script>


    @stack('scripts')
</body>
{{-- end::Body --}}
</html>
