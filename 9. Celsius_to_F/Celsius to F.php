<?php
  class Vremea{
    public static $temp = ['rece', 'cald', 'foarte cald'];

    public static function celsiusToF($c){
      return $c * 9 / 5 + 32;
    }

    public static function gradeToTemp($v){
      if ($v < 20){
        return self::$temp[0];
      }elseif ($v < 50){
        return self::$temp[1];
      }else{
        return self::$temp[2];
      }
    }
  }

  echo "Grade in F: " . Vremea::celsiusToF(60) . "<br>";
  echo "Conversia gradelor: " . Vremea::gradeToTemp(60);
?>
