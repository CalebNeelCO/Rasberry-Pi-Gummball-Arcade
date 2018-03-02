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
system ( "gpio mode 2 out" );
system ( "gpio write 2 1" );
sleep ( 2 );
system ( "gpio write 2 0" );
sleep ( 3 );
 
?>

<h1>Sorry you lose. better luck next time <a href="http://192.168.1.115/"> home</a></h1>
</body>
</html>
