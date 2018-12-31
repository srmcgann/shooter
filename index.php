<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="Canvas based MMO demo">
		<meta name="keywords" content="HTML5,canvas,JavaScript, MMO">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
		<? include_once("../analysis.php") ?>
		<div id="status"></div>
		<div id="login">
			IDENTIFY YOURSELF
			<input type="text" id="nick">
		</div>
		<canvas id="canvas" width="100%" height="100%"></canvas>
		<script src="game.js"></script>
		<script src="network.js"></script>
	</body>
</html>
