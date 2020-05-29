<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="view-port" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') - EspecializaTi</title>
	@stack('styles')
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	@stack('scripts')
</body>
</html>