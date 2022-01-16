<html>
    <head>
        <title>ciclos for en PHP</title>
    </head>
    <body>
        <h1>ciclos for en PHP</h1>
        <h2>Ejercicio 1</h2>
        <h3>Imprimir los numeros del 20 al 30</h3>

    <?php   
    for($i=20; $i<31; $i++){
        echo "Soy el numero $i <br>";
    }
     ?>
    <h2>Ejercicio 2</h2>
    <h3>crear la tabla del 5 usando ciclo for</h3>
     <?php

     

     $multiplicando= 5;
     $multiplicador;
     
     for ($multiplicador=1; $multiplicador <=12 ; $multiplicador++) { 
         echo "$multiplicando" . " X " . $multiplicador . " = " . $multiplicando * $multiplicador;
         echo "<br>";
     }
?>
 <h2>Ejercicio 3</h2>
 <h3>Imprimir los números pares menores del 20 dentro de un ciclo for</h3>
 <?php
 
for($n=2; $n<=20; $n= $n+2){
 
    echo $n."</br>";
}
 
?>
<h2>Ejercicio 4</h2>
 <h3>Imprimir los numeros del 1 al 20 en orden inverso: 20,19,18,17,16,...</h3>
<?php
 
 for( $x=20; $x>=1; $x--)
 {
    echo "Soy el numero $x <br>";
 }
?>
    </body>
</html>