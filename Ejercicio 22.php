<?php
 $numero = rand(1,100);
 $h = 0;
 echo "El numero es $numero<br>";
	
 for($i=2;$i<$numero;$i++){
  
   if($numero%$i==0){
      $h+=1;
   }
 }
 if($h==0){
   echo"Es un numero primo.";
 }
 else{
  	echo "No es un numero primo.";
 }
