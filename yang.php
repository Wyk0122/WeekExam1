<table align="center">
<?php 
function yanghui($len){
	$arr =array();
	for ($i=1; $i <$len ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <$i ; $j++) { 
			if($j==1||$i==1){
				$arr[$i][$j] = 1;
			}else{
				@$arr[$i][$j] = $arr[$i-1][$j]+$arr[$i-1][$j-1];
			}
			echo "<td>";
			echo $arr[$i][$j];
		}
	}
}
$len = 11;
yanghui($len);
 ?>
 </table>