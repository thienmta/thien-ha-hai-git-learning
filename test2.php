<?php
	/**
	* 
	*/
	//include 'add.php';
	
	class Math
	{


		function multi($a, $b){
			$multi =  $a * $b;
			return $multi;
		}
		function subt($a, $b){
			include 'sub.php';
		}

	}
    
	$a=2;
	$b=5;
	$math = new Math;
	echo $math->multi($a, $b);
	//echo add($a, $b);
	echo $math->subt($a, $b);
	
	
?>
