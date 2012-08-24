

<?php use_javascript('jquery.ui.core.js') ?>
<?php use_javascript('jquery.ui.draggable.js') ?>
<?php use_javascript('jquery.ui.droppable.js') ?>

<script type='text/javascript'>
 
$(document).ready(function() {
 
var d = new Date();
var y = d.getFullYear();
var m = d.getMonth();
 
$('#calendar').fullCalendar({
header: {
left: 'prev,next today',
center: 'title',
right: 'month,basicWeek,basicDay'
},
height: 100,
editable: true,
theme:true,
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
