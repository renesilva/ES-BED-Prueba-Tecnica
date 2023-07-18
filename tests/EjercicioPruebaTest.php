<?php
namespace Eressea\Ejercicios;

use PHPUnit\Framework\TestCase;

final class EjercicioPrueba extends TestCase
{
  public function testTwoSum()
  {
    $ej1 = new Ejercicio1();
    $this->assertEquals([0, 1], $ej1->twoSum([2, 7, 11, 15], 9));
    $this->assertEquals([1, 2], $ej1->twoSum([3, 2, 4], 6));
    $this->assertEquals([0, 1], $ej1->twoSum([3, 3], 6));
  }
}
