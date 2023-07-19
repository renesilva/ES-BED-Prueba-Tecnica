<?php

namespace Eressea\Ejercicios;

use PHPUnit\Framework\TestCase;

final class Ejercicio2Test extends TestCase
{
  public function testObtenerPosiciones()
  {
    $ejercicio = new Ejercicio2();
    $this->assertEquals(["Medalla de Oro", "Medalla de Plata", "Medalla de Bronce", "4", "5"], $ejercicio->obtenerPosiciones([5, 4, 3, 2, 1]));
    $this->assertEquals(["Medalla de Oro", "5", "Medalla de Bronce", "Medalla de Plata", "4"], $ejercicio->obtenerPosiciones([10, 3, 8, 9, 4]));
  }
}
