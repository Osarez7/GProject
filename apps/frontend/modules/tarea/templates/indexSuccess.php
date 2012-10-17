<?php

/*foreach($tareas as $tarea) {
  foreach($tarea->getUsuario() as $usuario) {

    echo $usuario;  */


?>
<?php foreach($tareas as $tarea):?>

<li> <?php echo $tarea ?></li>

<?php endforeach; ?>