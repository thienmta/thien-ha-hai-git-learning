<?php
		include "add.php";
		include "sub.php";
	class math{
		
		
		function multi($a,$b){
			$multi =  $a * $b;
			return $multi;
		}
	
	}
	$a=2;
	$b=5;
	$math= new math;
	$multil=$math->multi($a,$b);
	echo $multil;
	
	echo $add($a,$b);

	echo $sub($a,$b);
	
?>
