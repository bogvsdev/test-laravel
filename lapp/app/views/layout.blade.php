<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ru-RU" class="no-js"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>@yield('title')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" href=" {{ asset('css/style.css') }}">

</head>
<body>
	<nav class="red lighten-3" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="{{ URL::to('/') }}" class="brand-logo"><img src="{{ asset('images/laravel.png') }}" alt="logo" class="logo-image"></a>
		</div>
	</nav>

	<div class="container">
    <div class="section">

      <!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m12 l12">
				@yield('content')
			</div>

		</div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

<footer class="page-footer red lighten-1">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="grey-text text-lighten-5">&nbsp;</h5>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			Made by <a class="red-text text-lighten-4" href="http://twitter.com/bogvsdev">@bogvsdev</a>
		</div>
	</div>
</footer>

	<!-- JavaScripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script src=" {{ asset('js/main.js') }} "></script>
</body>
</html> 