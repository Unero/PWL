<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello World in CodeIgniter</title>
</head>
<body>

<div id="container">
	<!-- Direct dari view -->
	<h1 align="center">Hello World</h1>
	<!-- Menggunakan passing array dari controller -->
	<h1 align="center"><?php echo $hello; ?></h1>
</div>

</body>
</html>