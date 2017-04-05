<?php
   
  $numero = 1;
  $i = 1;
  $numero1= 1;
 
  while($i<=10){
	  if($i<10){
       echo "$numero, $numero1, \n"; 
    $numero = $numero1+$numero;
	  
	$numero1 = $numero+$numero1;
	  }	
	  else{
		  echo "$numero, $numero1. \n"; 
	  }
    $i++;  	
  
  }