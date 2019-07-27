
<?php	
function bilang($a, $b){
$prime= array(2,3,5,7,11,13,17,19,23,29,31,37);
$k=0;
for ($i = 1; $i <= $b; $i++){
		echo "<br>";
		for ($j = 1; $j <= $a; $j++ ){
			echo $prime[$k++]."," ;
		}
		

	}
}	

bilang(4, 3);


 



?>
