<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<meta charset="UTF-8">
	<title>slider with php pictures</title>
</head>
<body>
	
	<div class="wrapper">

		<div id="slider">
			<div class="left"><div id="ileft"><i id="left_i" class="fas fa-angle-left"></i></div></div>
			<div class ="slider"><img src="" id="imageId" alt="nkar"></div>
			<div class="right"><div id="iright"><i id="right_i" class="fas fa-angle-right"></i></div></div>
		</div>
		<div class="clear"></div>
	</div>

<?php include('db.php');?>

</body>
</html>