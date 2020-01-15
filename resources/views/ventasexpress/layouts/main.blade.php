<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PGC360 - @yield('title', 'Portal de Gestión Comercial')</title>
	<link  rel="icon" type="image/x-icon" href="{{ asset('img/favico.png') }}" />
	<!-- CSS  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin-style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/switchery.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/loading-bar.css') }}">
	<script src="{{ asset('js/modernizr.min.js') }}"></script>
	<!-- Iconos  -->
	<script src="https://kit.fontawesome.com/facaac58ac.js" crossorigin="anonymous"></script>
</head>
<body class="fixed-left">
	<div class="loader"></div>
	<div id="wrapper">
		@include('ventasexpress.layouts.partials.topbar')
    	@include('ventasexpress.layouts.partials.sidebar')
    	<div ng-view></div>
	</div>
	<script>
        var resizefunc = [];
    </script>
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="{{ asset('js/detect.js') }}"></script>
	<script src="{{ asset('js/fastclick.js') }}"></script>
	<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('js/jquery.blockUI.js') }}"></script>
	<script src="{{ asset('js/waves.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>
	<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
	<script src="{{ asset('js/switchery.min.js') }}"></script>
	<script src="{{ asset('js/raphael-min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('js/jquery.core.js') }}"></script>
	<script src="{{ asset('js/jquery.app.js') }}"></script>
	<!-- Angular JS -->
	<script src="{{ asset('js/angular.min.js') }}"></script>
	<script src="{{ asset('js/angular-route.min.js') }}"></script>
	<script src="{{ asset('js/loading-bar.js') }}"></script>
	<!-- JS -->
	<script src="{{ asset('js/ventasexpress/ventasexpress.js') }}"></script>
</body>
</html>