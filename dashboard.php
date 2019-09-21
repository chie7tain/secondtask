<?php
include_once('connect.php');

//checking login
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<script src="https://kit.fontawesome.com/52f2afaff9.js" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<title>Dashboard</title>
</head>
<body>
	<header>
		<div>
			<h2 class="logo"><a href="index.html"></a>Avengers</h2>
		</div>
		<div class="container-heading">
			<h1 class="looks">Welcome to your dashboard</h1>
			<h3>what a wonderfull day to be an avenger</h3>
		</div>
	
	</header>


</body>
</html>