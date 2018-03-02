<!DOCTYPE html>
<html>
<head>
<style>
body  {
    background-image: url("/assets/background.jpg");
    background-color: #cccccc;
}
a {
    color: red;
}
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
		else if ($status[0] == "1" ) { header('Location: http://192.168.1.115/index.php'); }
		//reading pin's status
		exec ("gpio read ".$pic, $status, $return );
		//print it to the client on the response
		
	

?>


<h1 color=red>Please enter coin. Page will atomaticly refreash</h1>
</body>

</html>


	