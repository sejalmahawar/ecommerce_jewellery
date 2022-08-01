<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CJ - Homepage</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
</head>
<body>
	<?php include_once("db.php");?>
	<?php include("menu.php");?>
	<div class="slide">
		<?php include("slider.php");?>
	</div>
	<div class="container">
		<?php include("offers.php");?>
	</div>	
	<?php include("footer.php");?>

	<script type="text/javascript" src="./js/bootstrap.bundle.min.js" async></script>
	
</body>
</html>
