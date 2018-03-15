<?php
	
	class math{
		
			include "/add.php";
		include "/sub.php";
		function multi($a,$b){
			$multi =  $a * $b;
			return $multi;
		}
	
	}
	$a=2;
	$b=5;
	$multil=math.multi($a,$b);
	echo $multil;
$add=math.add($a,$b);
	echo $add;
$sub=math.Sub($a,$b);
	echo $sub;
	
?>
