<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo grupo de la muerte</title>       
	</head>
    <body style="padding:15px;">

 
                 <?php  $model->DeleteDEMO();?>
               
 
    </body>
</html>
