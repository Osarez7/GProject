<h1>Eventos List</h1>

<table>
  <thead>
    <tr>
      <th>Id evento</th>
      <th>Fecha evento</th>
      <th>Nombre evento</th>
      <th>Desc evento</th>
      <th>Proyecto</th>
      <th>Fecha cambio estado</th>
      <th>Fecha actualizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($eventos as $evento): ?>
    <tr>
      <td><a href="<?php echo url_for('evento/show?id_evento='.$evento->getIdEvento()) ?>"><?php echo $evento->getIdEvento() ?></a></td>
      <td><?php echo $evento->getFechaEvento() ?></td>
      <td><?php echo $evento->getNombreEvento() ?></td>
      <td><?php echo $evento->getDescEvento() ?></td>
      <td><?php echo $evento->getProyecto() ?></td>
      <td><?php echo $evento->getFechaCambioEstado() ?></td>
      <td><?php echo $evento->getFechaActualizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('evento/new') ?>">New</a>
  
  
  <div id="calendario-content">
   <?php 
   
     include_partial('evento/mini-calendario', array("calendario" => $calendario, "listaEventos"=>$listaEventos));
   ?>
  
  </div>





<script type='text/javascript'>
 
$(document).ready(function() {
 
var d = new Date();
var y = d.getFullYear();
var m = d.getMonth();
 
$('#calendar').fullCalendar({
draggable: true,
events: [
<?php $total = 21; $i=0; ?>
<?php foreach ($eventos as $evento):?>
{
<?php $i++; ?>
id: <?php echo $evento->getIdEvento() ?>,
title: "<?php echo $evento->getDescEvento() ; ?>",
<?php
$fecha = strtotime($evento->getFechaEvento() );
$anno = date("Y", $fecha);
$mes = date("m", $fecha);
$mes--;
$dia = date("d", $fecha);
?>
start: <?php echo "new Date(".$anno.", ".$mes.", ".$dia.")"; ?>,
<?php
$fecha = strtotime($evento->getFechaEvento());
$anno = date("Y", $fecha); $mes = date("m", $fecha);
$mes--;
$dia = date("d", $fecha);
?>
end: <?php echo "new Date(".$anno.", ".$mes.", ".$dia.")"; ?>,
url: "<?php echo url_for('evento/show?id_evento='.$evento->getIdEvento()) ?>"
}<?php if ($i != $total) echo "," ?>
<?php endforeach; ?>
]
});
 
});
 
</script>
 
<div id='calendar'></div>
