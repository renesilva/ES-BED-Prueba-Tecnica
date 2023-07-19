<?php

namespace Eressea\Ejercicios;

use PHPUnit\Framework\TestCase;

final class Ejercicio3Test extends TestCase
{
  public function testInterseccion()
  {
    $ejercicio = new Ejercicio3();
    $this->assertEquals(2, $ejercicio->emailsEnviados(["test.email+alex@gmail.com", "test.e.mail+bob.cathy@gmail.com", "testemail+david@g.mail.com"]));
    $this->assertEquals(3, $ejercicio->emailsEnviados(["uno@gmail.com", "dos@gmail.com", "tres@gmail.com"]));
  }
}
