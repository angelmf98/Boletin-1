<?php
  $numero1 = rand(1, 50);
  $numero2 = rand(1, 50);
  $suma = $numero1  + $numero2;
  $producto = $numero1 * $numero2; 
        
  echo "El numero 1 es $numero1 \n";    echo "y";   echo "\n El numero 2 es $numero2 \n <br>";
  echo "La suma es $suma \n";    echo "y";   echo " El producto es \n $producto <br>";
  echo "$suma \n";    echo "y";   echo "\n $producto <br>";
          
  if($suma>$producto){
    echo "La suma es mayor que el producto";
  }
  if($producto>$suma){
    echo "El producto es mayor que la suma";
  }
?>