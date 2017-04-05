<?php 

$numero = 50;


for ($i=1; $i<=$numero; $i++){
	
	$div = ($numero%$i);
	
	
	if($div==0){
	
	echo $i."<br>";
	}

}