<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title></title>
</head>
<body>
<?php 
    function getWoron($number, $vorona, $vorony, $voron ){
        $EndOfnumber = $number % 10;
            if ($EndOfnumber >= 5 && $EndOfnumber <= 9 || $EndOfnumber == 0){
                return $voron;
            }
            if( $number >=11 && $number <= 14){
                return "<b>$voron</b>";
            }
            elseif ($EndOfnumber == 1){
                return $vorona;
            }
            elseif ($EndOfnumber >= 2 && $EndOfnumber <= 4){
                return $vorony;
            }
    }
?>
<div class="container">
    <div>
        <h1 style="text-align: center; font-size: 16px;">
            Список ворон
        </h1>
    </div>
    <div style="width: 95px; border: 3px solid #696363;background-color: #b3abab; color: #ffffff; text-align: center; margin: auto; font-size: 14px;">
        <?php for($i = 1; $i < 37;$i++):?>
        <?=$i .getWoron($i, "Ворона","Вороны", "Ворон",)?>
        <?php endfor;?>
    </div>
</div>
</body>
</html>
