<?php

namespace Eressea\Ejercicios;

use PHPUnit\Framework\TestCase;

final class Ejercicio1Test extends TestCase
{
  public function testInterseccion()
  {
    $ejercicio = new Ejercicio1();
    $this->assertEquals([2], $ejercicio->interseccion([1, 2, 2, 1], [2, 2]));
    $this->assertEquals([4, 9], $ejercicio->interseccion([4, 9, 5], [9, 4, 9, 8, 4]));
  }
}
