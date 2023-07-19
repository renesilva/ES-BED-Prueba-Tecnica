<?php

namespace Eressea\Ejercicios;

use PHPUnit\Framework\TestCase;

final class EjercicioPruebaTest extends TestCase
{
  public function testTwoSum()
  {
    $ejercicio = new EjercicioPrueba();
    $this->assertEquals([0, 1], $ejercicio->twoSum([2, 7, 11, 15], 9));
    $this->assertEquals([1, 2], $ejercicio->twoSum([3, 2, 4], 6));
    $this->assertEquals([0, 1], $ejercicio->twoSum([3, 3], 6));
  }
}
