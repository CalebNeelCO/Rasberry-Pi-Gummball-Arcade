<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"/>
<title>Platformer TMX Example</title>
<script src='../../lib/quintus.js'></script>
<script src='../../lib/quintus_sprites.js'></script>
<script src='../../lib/quintus_scenes.js'></script>
<script src='../../lib/quintus_input.js'></script>
<script src='../../lib/quintus_anim.js'></script>
<script src='../../lib/quintus_2d.js'></script>
<script src='../../lib/quintus_touch.js'></script>
<script src='../../lib/quintus_ui.js'></script>
<script src='../../lib/quintus_tmx.js'></script>

<script src='platformer.js'></script>
<style> 
  body { padding:0px; margin:0px; } 
</style>
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
