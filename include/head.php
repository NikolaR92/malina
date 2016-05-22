<?php
//definisemo root weba da bi mogli da pristupamo iz razlicitih foldera
define("WEB_ROOT",  $_SERVER['SERVER_ROOT'].'/~nikola/malina');

echo'

	<meta http-equiv="Content-Type" content="text/html charset=utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript-->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Desktop stylesheet  -->
	<link rel="stylesheet" type="text/css" href="'.WEB_ROOT.'/assets/css/desktop.css">';
?>
