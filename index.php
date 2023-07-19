<?php
require_once __DIR__ . '/vendor/autoload.php';

use Eressea\Ejercicios\EjercicioPrueba;
use Eressea\Ejercicios\Ejercicio1;
use Eressea\Ejercicios\Ejercicio2;
use Eressea\Ejercicios\Ejercicio3;


// ejercicio prueba
$ejercicioPrueba = new EjercicioPrueba();
print_r($ejercicioPrueba->twoSum([2, 7, 11, 15], 9));

// ejercicio 1
$ejercicio1 = new Ejercicio1();
print_r($ejercicio1->interseccion([1, 2, 2, 1], [2, 2]));

// ejercicio 2
$ejercicio2 = new Ejercicio2();
print_r($ejercicio2->obtenerPosiciones([10, 3, 8, 9, 4]));

// ejercicio 3
$ejercicio3 = new Ejercicio3();
print_r($ejercicio3->emailsEnviados(["uno@gmail.com", "dos@gmail.com", "tres@gmail.com"]));
