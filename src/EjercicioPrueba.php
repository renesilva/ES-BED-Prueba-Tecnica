<?php

namespace Eressea\Ejercicios;

class EjercicioPrueba
{
  public function __construct()
  {

  }

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer[]
   */
  function twoSum(array $nums, int $target): array
  {
    $result = [];
    for ($i = 0; $i < count($nums); $i++) {
      for ($j = $i + 1; $j < count($nums); $j++) {
        if ($nums[$i] + $nums[$j] == $target) {
          $result = [$i, $j];
          break;
        }
      }
    }
    return $result;
  }
}
