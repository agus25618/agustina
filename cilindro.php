<?php
$diam=$_POST["diam"];
$altu=$_POST["altu"];
$radio= $diam/2;
$pi= 3.14;
$volumen= $pi * $radio * $radio * $altu;
echo " El volumen del cilindro es ".$volumen;
?>