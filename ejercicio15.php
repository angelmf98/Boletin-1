<?php
$valor = 20;
$primo = 0;
$b = 1
	
while($valor<$b){

    if ($valor % $b == 0) {
        $primo++;
    }
	
	$b++

}
 
if ($primo >= 2) {
    echo "No es primo";
} 

else {
    echo "Es primo";
}