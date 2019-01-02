<table align="center" border="1">
<?php 
for ($i=1; $i <= 9; $i++) { 
	echo "<table>";
	for ($j=1; $j <=$i ; $j++) { 
		$p = $i*$j;
		echo "$j*$i = $p";
		echo "&nbsp";
	}
	echo "</table>";
}


 ?>
 </table>