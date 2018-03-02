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
system ( "gpio mode 1 out" );
system ( "gpio write 1 1" );
sleep ( 2 );
system ( "gpio write 1 0" );
sleep ( 3 );

?>
<h1>You win go get your prize <a href="http://192.168.1.115/"> home</a></h1>

</body>
</html>
