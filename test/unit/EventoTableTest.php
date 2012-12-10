<?php

include(dirname(__FILE__) . '/../bootstrap/Doctrine.php');


// Stub objects and functions for test purposes
// Initialize the test object
$t = new lime_test(5);




 $t->diag('Pruebas getMapasPorProyecto');
 $respuesta =  Doctrine_Core::getTable('Mapa')->(getMapasPorProyecto(1));
 $t->isa_ok($respuesta,'array','Consulta mapas por proyecto');



}

