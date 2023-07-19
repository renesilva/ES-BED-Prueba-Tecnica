Base para ejercicios
====================
Comandos para correr los ejercicios base Bootcamp BED 2023 - LinkSpace.

Instalación
-----------
```
composer install
```

Correr proyecto
---------------
Para correr el proyecto podemos usar el siguiente comando para levantar un servidor:
```
php -S localhost:8000
```
E ingresar a http://localhost:8000

Tests
-----
Para correr los tests de todos los ejercicios deben correr:
```
./vendor/bin/phpunit --verbose --colors tests
```
Para correr los tests de un ejercicio en particular deben correr (Reemplazar el Ejercicio1):
```
./vendor/bin/phpunit --filter Ejercicio1 --verbose --colors tests
```
