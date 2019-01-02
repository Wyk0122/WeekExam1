<?php 
function cheng($n){
	return $sum = $n*$n*$n;
}
function flower($n){
	$sum = floor($n/100);
	$sum1 = floor($n/10)%10;
	$sum2 = floor($n%10);
	if($n == cheng($sum)+cheng($sum1)+cheng($sum2)){
		echo "输入的数字是水仙花数";
		return $n;
	}else{
		echo "输入的数字不是水仙花数";
	}
}
flower(153);
 ?>