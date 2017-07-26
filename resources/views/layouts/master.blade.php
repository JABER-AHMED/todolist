<!DOCTYPE html>
<html>
<head>
	<title>TodoList</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body style="background: #ececec;">
	@include('inc.navbar')
	<div class="container">
		@include('inc.message')
		@yield('content')
	</div>

	<footer id="footer">
		<p style="text-align:center;">Copyright &copy; 2017 Todolist</p>
	</footer>
</body>
</html>