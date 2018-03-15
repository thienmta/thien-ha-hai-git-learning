<?php

	include ("add.php");
	include ("sub.php");
	class Math
	{
		function multi($a, $b){

			$multi =  $a * $b;
			return $multi;
		}
	}
    
	$a=2;
	$b=5;

	$math = new Math;
	echo $math->multi($a, $b);
	echo add($a, $b);
	echo Sub($a, $b);
	

	
?>
