<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
  <h1 style='color: green;'><\>LARAVEL Static Site</h1>
<div class="container">

	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">

			@yield('content')

	</div>


	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>
