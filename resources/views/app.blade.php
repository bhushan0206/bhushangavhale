<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bhushan Gavhale</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollzer.min.js') }}"></script>
	<script src="{{ asset('js/skel.min.js') }}"></script>
	<script src="{{ asset('js/skel-layers.min.js') }}"></script>
	<script src="{{ asset('js/init.js') }}"></script>

	<noscript>
		<link rel="stylesheet" href="{{ asset('css/skel.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/style-wide.css') }}" />
	</noscript>

	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>
<body>

	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '687490534688282',
				xfbml      : true,
				version    : 'v2.3'
			});
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	@include('flash::message')

	@include('layouts.header')


	<div id="main">
		@include('partials._intro')

		@include('partials._portfolio')

		@include('partials._about')

		@include('partials._contact')

	</div>

	@include('layouts.footer')

	@yield('content')

	<!-- Scripts -->	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script>
		$('#flash-overlay-modal').modal();
	</script>
</body>
</html>
