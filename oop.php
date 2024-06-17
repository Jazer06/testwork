<?php 
// Марсоход, отправляет отчеты о пробах.
class Grunt{
	public function proba(){        
		$takeProb = "Взял";
	// Класс марсохода берет пробу с функции proba()      
		$array = ["Скальный грунт", "Глинистый грунт", "Скальный грунт", "Крупноблочный грунт"];
		return $array[array_rand($array)];   
	}	
}
class Marsohod{       
	public function report(){
		$grunt = new Grunt();  // Обращение к пробе
		echo "Марсоход отправляет отчет:" . PHP_EOL . $grunt->proba();      
		}
}
$objMarosohod = new Marsohod();
	// Обращение к методу в марсоходе
$objMarosohod->report();
 ?>