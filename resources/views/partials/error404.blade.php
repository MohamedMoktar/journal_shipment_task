@php
$dir = getLanguageDirection();
@endphp
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>{{ __('Page Not Found') }}</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="{{ __('Page Not Found') }}" />
		<meta property="og:url" content="{{ __('Page Not Found') }}" />
		<meta property="og:site_name" content="{{ __('Page Not Found') }}" />
		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="{{ assetsMetronic('media/logos/favicon.ico') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		@if ($dir == 'rtl')
            <link href="{{ assetsMetronic('plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ assetsMetronic('plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ assetsMetronic('css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">
            <style>
                * {
                    font-family: 'Tajawal', sans-serif;
                }

                .scroll-y {
                    direction: ltr;
                }
            </style>
        @else
            <link href="{{ assetsMetronic('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
        @endif
        <link href="{{ assetsMetronic('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard/custom.css') }}" rel="stylesheet" type="text/css"/>
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Error 404 -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url('{{ assetsMetronic('media/illustrations/development-hd.png') }}')">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-20">
					<!--begin::Logo-->
					<a href="{{  (isset($admin_path))?route('place-dashboard'):route('dashboard') }}" class="mb-10 pt-lg-20">
						{{--  <img alt="Logo" src="{{ assetsMetronic('media/logos/logo_invoice.png') }}" class="h-250px mb-0" />  --}}
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="pt-lg-10">
						<!--begin::Logo-->
						<h1 class="fw-bolder fs-4x text-gray-800 mb-10">{{ __('Page Not Found') }}</h1>
						<!--end::Logo-->
						<!--begin::Message-->
						<div class="fw-bold fs-3 text-muted mb-15">{{ __('The page you looked not found!') }}
						<br />{{ __('Plan your blog post by choosing a topic') }}</div>
						<!--end::Message-->
						<!--begin::Action-->
						<div class="text-center">
							<a href="{{ (isset($admin_path))?route('place-dashboard'):route('dashboard') }}" class="btn btn-lg btn-primary fw-bolder">{{ __('Go to Dashboard') }}</a>
						</div>
						<!--end::Action-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Error 404-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ assetsMetronic('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ assetsMetronic('js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
