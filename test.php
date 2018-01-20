<?php 
$arr = [[0,1],[1,2],[0,3],[0,4]];

$sum = 0;
foreach ($arr as $a) {
	if ($a[0] == 0) {
		$sum += $a[1];	
	}
}

echo $sum;
?>
