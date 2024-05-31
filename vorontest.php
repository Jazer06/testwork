<?php
    for($i = 0; $i<=100; $i++){
        echo $i . ' ' .sklonvoron($i) . "\n"; 
    }
    function sklonvoron($number, $options = ['Ворона', 'Вороны', 'Ворон']){
        $index = 0;
        $varone = $number % 100;
    if($varone >= 11 && $varone <= 14){
        $index = 2;
    }
    else{
        $varone = $number % 10;
        if($varone == 0 || $varone >=5){
            $index = 2;
        }
    elseif($varone !=1){
        $index = 1;
        }
    }
    return $options[$index];
    }
 ?>