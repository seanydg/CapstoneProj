<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

 <title>Business Platform</title>

 <!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="assets/css/loginform.css">
<h1>Business Platform</h1>
<!--Javascript -->
<!--Firebase Script-->
<!-- Firebase App is always required and must be first -->
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase-app.js"></script>

<!-- Add additional services that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase-functions.js"></script>

</head>

<body>
	<!--General Login Form 
	<form action="home.php" method="get">
		Username: <input type="text" name="name"><br>
		Password: <input type="Password" name="password"><br>
		<input type="submit">
	</form>
	<-->
	<div class="container">
		<input id="txtUser" type="Email" placeholder="Username">
		<input id="txtPass" type="Password" placeholder="Password">

		<button id="btnLogin" class="btn btn-action">Log In</button>
	</div>
	<script src="assets/js/app.js"></script>

</body>
</html>
