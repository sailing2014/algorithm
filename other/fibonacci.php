<?php

function fibonacci($n){
    static $a = array();
    if(!isset($a[$n])){
        if($n==1 || $n==2){
            $a[$n] =1;
        }else{
            $a[$n] = fibonacci($n-1) + fibonacci($n-2);
		}
    }
    return $a[$n];
}