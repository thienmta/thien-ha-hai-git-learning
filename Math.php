<?php

class Math {
    public function add($a, $b)
    {
         $total = $a+$b;
        return($total);
    }

    public function sub($a, $b)
    {
	return ($a - $b);
    }

    public function multi($a, $b)
    {
        return ($a * $b);
    }

    public function divide($a, $b)
    {
        $div = $a/$b;
        return($div);
    }
    
}
$math = new Math();
$a=16;
$b=8;
echo $math->add($a, $b);
echo $math->sub($a, $b);
echo $math->multi($a, $b);
echo $math->divide($a, $b);

?>