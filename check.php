<?php

class MyException extends Exception {
}

class Check {
  public static array $match = [
    "integer" => "число",
    "float" => "число",
    "double" => "число",
    "string" => "строка",
    "boolean" => "булево значение",
    "array" => "массив",
    "NULL" => "объект"
  ];

  public static function calculate($val): void {
    $str = gettype($val);
    $valMatch = '';
    if (array_key_exists($str, self::$match)) {
      $valMatch = self::$match[$str];
    } else {
      $valMatch = 'неопределено';
    }
    throw new MyException($valMatch);
  }
}
