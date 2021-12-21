<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../css/home.css">
		<title>Lapor</title>
	</head>

	<body>
		
		@include('partials.navbar')
		@include('partials.searchbar')

		<div class="container">
			@yield('container')	
		</div>


	
	</body>
</html>