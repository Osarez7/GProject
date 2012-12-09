

<?php use_javascript('jquery.ui.core.js') ?>
<?php use_javascript('jquery.ui.draggable.js') ?>
<?php use_javascript('jquery.ui.droppable.js') ?>
<?php use_javascript('lib/date/date.js ') ?>
<?php use_javascript('lib/fullcalendar/fullcalendar.js ') ?>


<?php use_stylesheet("fullcalendar.css")  ?>

<script type='text/javascript'>

          var url_for_eventos_index = "<?php echo  url_for('index_eventos', array("sf_format" => "json","idProyecto" => $proyecto->getIdProyecto())) ;?>";
          var url_for_show_event = "<?php echo  url_for('index_eventos', array("sf_format" => "json","idProyecto" => $proyecto->getIdProyecto())) ;?>";
          var url_for_edit_event = "<?php echo  url_for('index_eventos', array("sf_format" => "json","idProyecto" => $proyecto->getIdProyecto())) ;?>";
          var url_for_create_event= "<?php echo  url_for('nuevo_evento', array("idProyecto" => $proyecto->getIdProyecto(),"defaultDate"=>"dataFecha","allDay"=>"dataAllDay")); ?>";
</script>
 
<?php use_javascript('eventos.scripts/inicializarCalendario.js ') ?>


<div id='calendar'></div>

