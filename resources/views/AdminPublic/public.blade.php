<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<style type="text/css">
		#header{
			width:100%;
			height: 200px;
			background-color: red;
		}
		#footer{
			width:100%;
			height: 200px;
			background-color: blue;
		}
	</style>
</head>
<body>
	<div id="header">header</div>
	@section('main')
	@show	
	<div id="footer">footer</div>	
</body>
</html>