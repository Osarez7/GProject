<?php

foreach($tareas as $tarea) {
  foreach($tarea->getUsuario() as $usuario) {

    echo $usuario;

  }
}