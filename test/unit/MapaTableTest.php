<?php

include(dirname(__FILE__) . '/../bootstrap/Doctrine.php');


// Stub objects and functions for test purposes
// Initialize the test object
$t = new lime_test(2);


 $t->diag('Pruebas getArbolConjunto');
 $respuesta =  Doctrine_Core::getTable('Tarea')->getArbolCojuntoTareas(array(1,2));
 $t->isa_ok($respuesta,'array','Consulta por tareas 1 y 2 , respuesta es '. count($respuesta));

$t->diag('Pruebas getMapasPorProyecto');
$respuesta =  Doctrine_Core::getTable('Mapa')->getMapasPorProyecto(1);
$t->isa_ok($respuesta,'array','Consulta mapas por proyecto');




