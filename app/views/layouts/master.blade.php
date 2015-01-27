<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">

		@if (isset($currentManual))
			<title>{{ $siteName }} - {{ $currentManual }} {{ $currentVersion }}</title>
		@else
			<title>{{ $siteName }}</title>
		@endif

		<!-- CSS -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/css/material-wfont.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/css/ripples.min.css">
		<link rel="stylesheet" href="{{ asset('/assets/css/prettify/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('/assets/css/nice.css') }}">
	</head>
	<body>
		@include('partials.analytics_tracking')
		@include('partials.navbar')

		@yield('content')

		<!-- Javascript -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/js/material.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/js/ripples.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
		<script src="{{ asset('/assets/js/nice.js') }}"></script>
		<script type="text/javascript">
			$(function() {
				$.material.init();
			});
		</script>
	</body>
</html>
