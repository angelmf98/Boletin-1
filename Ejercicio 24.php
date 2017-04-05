<?php
$nota = rand(1,10);

echo "$nota";

switch($nota){
	case 1:
		if($nota<5){
			echo "Suspenso";
		}
	break;
	case 2:
		if($nota>=5 && $nota <6){
			echo "Aprobado";
		}
	break;
	case 3:
		if($nota>=6 && $nota <=7){
			echo "Bien";
		}
	break;
	case 4:
		if($nota>=7 && $nota <=8){
			echo "Notable";
		}
	break;
	case 5:
		if($nota>8){
			echo "Sobresaliente";
		}
	break;
}