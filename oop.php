<?php 
  class Marsohod{

    public function getProbeGrunt(){
        $proba = new Grunt();
        echo "Проба грунта..." . PHP_EOL . $proba->variablesGunt()  . PHP_EOL;
    }
    public function getReport(){
        echo  "Отправка отчета.." . rand(5, 15);
    }
    public function weightGrunt(){
        echo  PHP_EOL . "Марсоход собрал камней ..." . " " . rand(3,12);
    }
  }
  class Grunt{
    public function variablesGunt(){
        $array = ["Скальный грунт!", "Глинистый грунт!", "Скальный грунт!", "Крупноблочный грунт!"];
        return $array[array_rand($array)];
    }
  }
$objMarosohod = new Marsohod();
$objMarosohod->getProbeGrunt();
$objMarosohod->getReport();
$objMarosohod->weightGrunt();
 ?>