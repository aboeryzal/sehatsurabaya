<!DOCTYPE html>
<html>
<head>
<title>admin panel sehat surabaya</title>
<meta charcode="UTF-8"/>
<link rel="stylesheet" type="text/css" href="css/login.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400|Oswald|PT+Sans|Roboto+Condensed:700,300">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/komponen.css">
<link rel="icon" type="image/png" href="favicon.ico">
</head>

<body>
<div id="header"></div>

<div id="container">
	
	<div id="page1">
	<center>
	<h1>LOGIN ADMIN</h1>
	<form method="POST" action="autentikasi.php">
		<input type="text" name="namaadmin" class="in-teks in-teks-normal in-teks-full" placeholder="USERNAME" required>
		<input type="password" name="passadmin" class="in-teks in-teks-normal in-teks-full" placeholder="PASSWORD" required>
		<input type="submit" value="LOGIN" class="tb tb-full tb-toska" style="margin-left:0">
		<a href="signUp.php" class="tb tb-full" style="margin-left:0; width:424px; background-color: #22A7F0;">LUPA?</a>
	</form>
	<img src="./image/logologin.png" width="200">
	</center>	
	</div>
</div>

<script type="text/javascript" src="src/js/jquery.js"></script>
<script type="text/javascript" src="src/js/scrollPlugin.js"></script>
<script type="text/javascript" src="src/js/scroll.js"></script>

</body>
</html>