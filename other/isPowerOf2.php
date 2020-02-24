<?php

function isPOwerOf2($num){
	return ($num&($num-1)) == 0;
}

$a=16;
$b=17;
echo "$a is power of 2:".isPowerOf2($a)."\n";
echo "$b is power of 2:".isPowerOf2($b)."\n";
