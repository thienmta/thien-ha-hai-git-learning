<?php

class Math {
    public function add($a,$b)
    {
         $total = $a+$b;
        return($total);
    }

    public function sub()
    {
	$a=10;
	$b=20;
	$c=$a+$b;
	echo $c;
    }

    public function multi($a, $b)
    {
        return ($a * $b);
    }

    public function divide($a,$b)
    {
        $div = $a/$b;
        return($div);
    }
    $Math = new Math();
}
