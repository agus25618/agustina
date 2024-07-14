<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico 1</title>
    <link rel="stylesheet" href="esti.css">
</head>
<body>
<div class="arroz">
<?php

    echo "<h2> Ejercicio 1 </h2>";
    $fecha =  date ("d/m/y");
    echo " La fecha de hoy es ".$fecha, "<h2>";
   
     echo "Ejercicio 2","<h2>";
     $num1=rand(1,100);
     $num2=rand(1,100);
     $result=$num1;
     $result=$num2;
     echo " El numero generado es: ".$result, "<h2>";


     echo "Ejercicio 3", "<p>";
     $dia=24; 
     $sueldo = 758.43; 
     $nombre = "juan"; 
     $boolean = true; 
          
    echo "Dia:" ;
       echo $dia;
       echo "<br>";
       echo "Dueldo: ";
       echo $sueldo;
       echo "<br>";
       echo "Nombre: ";
       echo $nombre;
       echo "<br>";
       echo "Boolean ";
       echo $boolean;

       echo "<p> Ejercicio 4 </p>";
       $nombre="Agustina ";
       echo "Mi nombre es " .$nombre, "<br>";
       $apellido="Serrano";
       echo "mi apelledio es " .$apellido, "<br>";
       $curso="6to 1ra";
       echo "Mi curso es " .$curso,"<br>";
       $edad="18 años";
       echo "Mi edad es  " .$edad, "<br>";

      echo " <p> Ejercicio 5 </p>";
    
      $aleatorio=rand(1,3);
      $arreglo=array("uno","dos","tres");
      echo "aleatorio = $aleatorio </br>";
      for($i=0;$i<3;$i++){
        if($aleatorio == $i+1){
        echo "numero: $aleatorio "," <br>";
         echo  "letra: $arreglo[$i] ";
        }
      }

    echo "<p> Ejercicio 6 FOR-WHILE</p>";
    for($f=1;$f<=100;$f++)
    {
     echo $f;
     echo "<br>";
    }

    echo  "<p> Estructura While </p>";
    $valor=rand(1,100);
    $inicio=1;
    while($inicio<=100)
    {
    echo $inicio;
    echo " <br> ";
    $inicio++;
    }
    
    echo "<p> Ejercicio 7 </p>";
    for($n=2; $n<=100; $n= $n+2){
        echo  $n."</br>";
    }

    echo "<p>Ejercicio 8 </p>";
    $inicio = 1;
       while ($inicio <= 100)
       {
        echo $inicio . "<br>";
        $inicio+= 2;
       }
    ?>
    </div>
</body>
</html>