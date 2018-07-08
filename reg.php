<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

 <title>Business Platform</title>

 <!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="assets/css/loginform.css">
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
<h1>Business Platform</h1>
</head>
<body>
	<div class="container">
		<!--Input Form -->
		<input id="txtName" type="text" placeholder="Name">
		<input id="txtEmail" type="text" placeholder="Email">
		<input id="txtPass" type="Password" placeholder="Password">
		<input id="txtCName" type="text" placeholder="Company Name">
		<input id="txtConDetials" type="text" placeholder="Contact No">
		<input id="txtLicenseNo" type="text" placeholder="License No">
		<!-- Button Form -->
		<button id="btnSignUp" type="submit" class="btn btn-action">Register With Us</button>
	</div>
		<script src="assets/js/app.js"></script>
 
</body>
</html>