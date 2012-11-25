<?php

include(dirname(__FILE__) . '/../bootstrap/Doctrine.php');


// Stub objects and functions for test purposes
// Initialize the test object
$t = new lime_test(5);




 $t->diag('Pruebas getArbolConjunto');
 $respuesta =  Doctrine_Core::getTable('Tarea')->getArbolCojuntoTareas(array(1,2));
 $t->isa_ok($respuesta,'array','Consulta por tareas 1 y 2 , respuesta es '. count($respuesta));

 $respuesta =  Doctrine_Core::getTable('Tarea')->getArbolCojuntoTareas(array(3));
 $t->isa_ok($respuesta,'array','Consulta por tarea 3 , respuesta es '. count($respuesta));

 $respuesta =  Doctrine_Core::getTable('Tarea')->getArbolCojuntoTareas(array());
 $t->isa_ok($respuesta,'array','Probando array vacio');

 $t->diag('Pruebas getArbolTareas');
 $respuesta =  Doctrine_Core::getTable('Tarea')->getArbolTareas(1);
 $t->isa_ok($respuesta,'array','Consulta proyecto 1, respuesta '. count($respuesta));
  
  $t->diag('Pruebas getQueryArbolTarea');
 $respuesta =  Doctrine_Core::getTable('Tarea')->getQueryArbolTarea(1);
 $t->isa_ok($respuesta,'Doctrine_Query',$respuesta);

$t->diag('Pruebas getChildren');

$respuesta =  Doctrine_Core::getTable('Tarea')->findOneById(1)->getChildren();
 $t->isa_ok($respuesta,'array',$respuesta);



/*
 $t->diag('Pruebas getTareasUsuario');
 $respuesta =  Doctrine_Core::getTable('UsuarioTarea')->getTareasByUsuario(1);
 $t->isa_ok($respuesta,'array','Consulta por usuario 1');
 $t->isa_ok(Doctrine_Core::getTable('UsuarioTarea')->getTareasByUsuario(2),'array','Consulta por usuario 1');
*/

 

 

function create_usuario_tarea($defaults = array()) {

        $tarea = Doctrine_Core::getTable('Tarea')
                ->createQuery()
                ->limit(1)
                ->fetchOne();
    
       $usuario = Doctrine_Core::getTable('Usuario')
                ->createQuery()
                ->limit(1)
                ->fetchOne();

    $usuario_tarea = new UsuarioTarea();
    $usuario_tarea->setTarea($tarea);

 return $usuario_tarea;
}

