<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function drawline($n){
	$letters = $n;
	$len = strlen($n);
	$k = 0;
	for ($i = 1; $i <= $len; $i++){
		echo "<br>";
		for ($j = 1; $j <= $len; $j++ ){
			if ( $i == $j){
				echo $letters[$k++] ;
			} else {
				echo "+";
			}
		}
		

	}
}


 
drawline('BOOTCAMP');
drawline('ASIK');
?>
</body>
</html>