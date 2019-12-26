<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PGC360 - @yield('title', 'Portal de Gestión Comercial')</title>
	<link  rel="icon" type="image/x-icon" href="{{ asset('img/favico.png') }}" />
	<!-- CSS  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<!-- Iconos  -->
	<script src="https://kit.fontawesome.com/facaac58ac.js" crossorigin="anonymous"></script>
	<!-- Google reCAPTCHA v2 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>