<html>
<head>

	<script src='../../lib/quintus.js'></script>
	<script src='../../lib/quintus_sprites.js'></script>
	<script src='../../lib/quintus_scenes.js'></script>
	<script src='../../lib/quintus_input.js'></script>
	<script src='../../lib/quintus_anim.js'></script>
	<script src='../../lib/quintus_2d.js'></script>
	<script src='../../lib/quintus_touch.js'></script>
	<script src='../../lib/quintus_ui.js'></script>
	<script src="../../extra/quintus_svg.js"></script>
    <script src='../../vendor/Box2dWeb-2.1.a.3.js'></script>
	<script src="../../extra/quintus_physics.js"></script>
	<script type="text/javascript" src="cannon.js"></script>
	<title>Canon</title>
</head>
<body>
<?php
		
		//set the gpio's mode to output		
		system("gpio mode 3 in");
		//reading pin's status
		exec ("gpio read 3", $status, $return );
		//set the gpio to high/low
		if ($status[0] == "0" ) { 
		header('Location: http://192.168.1.115/wait.php'); }
		else if ($status[0] == "1" ) {
		//header('Location: http://192.168.1.115/index.php');
		}
		//reading pin's status
		exec ("gpio read ".$pic, $status, $return );
		//print it to the client on the response
		
	

?>
</body>
</html>