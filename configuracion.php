<?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "";
$bd_base = "foro";

$con = mysqli_connect($bd_host, $bd_usuario, $bd_password);
mysqli_select_db($con, $bd_base);
?>