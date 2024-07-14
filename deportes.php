<?php

$contador = 0;
$nombre= $_POST["nombre"];

if(isset($_POST['deporte1'])){
    $contador ++;
}
if(isset($_POST['deporte2'])){
    $contador ++;
}
if(isset($_POST['deporte3'])){
    $contador ++;
}
if(isset($_POST['deporte4'])){
    $contador ++;
}
echo " Me llamo " , $nombre ," y practico " , $contador , " Deportes ";


?>