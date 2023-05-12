<?php

declare(strict_types=1);
require_once('autoload.php');

$arrForCheck = [76, 16.12, 'Привет', ['Алекс', 12], true, null];

foreach ($arrForCheck as $value) {
  try {
    Check::calculate($value);
  } catch (Exception $e) {
    print 'Тип переменной - ' . $e->getMessage() . PHP_EOL;
  }
}
