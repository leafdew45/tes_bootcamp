<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$word = 'outstanding';
$dataKey = array('out','stand','king','and');

function check($a, $b){
$x = count($b);
for ($i=0; $i < $x ; $i++){
 
	if (strpos($a, $b[$i] ) !== false) {
	    echo 'true <br>';
	}else{
		echo 'false <br>';
	}
 }
}

echo check($word, $dataKey)
?>
</body>
</html>