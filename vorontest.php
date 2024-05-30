<?php
  for($i = 1; $i<=10; $i++){
    echo $i . ' ' .sklonvoron($i) . "\n"; 
  }
  function sklonvoron($number, $options = ['Ворона', 'Вороны', 'Ворон']){
    $index = 1;
    $varone = $number % 100;
      if($varone <2){
        $index = 0;
      }
      else{
        $varone = $number % 100;
        if($varone >=5){
          $index = 2;
        }
      }
    return $options[$index];
  }

 ?>