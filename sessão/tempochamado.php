<?php

$date1 = date("Y-m-d H:i:s");

$date2 = "2012-04-26 11:55:00";  

$diff = abs(strtotime($date2) - strtotime($date1)); 

$years   = floor($diff / (365*60*60*24)); 

$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 

$days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 

$minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 


if($months == 1){

printf("%d mês", $months);
printf(" e %d dias", $days);

	}else if($months > 1){
		printf("%d meses", $months);
		printf(" e %d dias", $days);


}else if($days == 1){
printf("%d dia", $days);
	}else if($days > 1){
		printf("%d dias", $days);


}else if($hours == 1){
printf("%d hora", $hours);
	}else if($hours > 1){ 
		printf("%d horas", $hours);


}else if($minuts < 2){
printf("%d minuto", $minuts);
	}else{
		printf("%d minutos", $minuts);
}





?>
