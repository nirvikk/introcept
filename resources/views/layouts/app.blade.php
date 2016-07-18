<!DOCTYPE html>
<html>
	<head>
		<title>Client Section</title>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
		<nav class="navbar navbar-default">
		    <div class="container">
		        <div class="navbar-header">
		            
		            <a class="navbar-brand" href="/">
		                Client Section
		            </a>
		        </div>

		    </div>
		</nav>

	</head>
	<body>
	<div class="container">
		@yield('content')	
	</div>

	</body>
</html>