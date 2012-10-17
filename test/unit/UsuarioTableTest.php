<?php

include(dirname(__FILE__) . '/../bootstrap/Doctrine.php');


// Stub objects and functions for test purposes
// Initialize the test object
$t = new lime_test(6);

 $usuarioTable = Doctrine_Core::getTable('Usuario')->getQueryUsurioByProyecto(1);

 $t->diag('Prueba getQueryUsurioByProyecto');
 $t->isa_ok('$usuarioTable', 'string', 'La respuesta  es un  string '.$usuarioTable);



