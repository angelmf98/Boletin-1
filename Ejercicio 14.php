<?php
  $numero = rand(1,100);
  $i = 1;
 echo "El numero es $numero<br>";
  while($i<$numero){  
   if($numero%$i==0){
      echo "$i, ";
   }
   $i++;	
  }