

<?php use_javascript('jquery.ui.core.js') ?>
<?php use_javascript('jquery.ui.draggable.js') ?>
<?php use_javascript('jquery.ui.droppable.js') ?>
<?php use_javascript('lib/date/date.js ') ?>
<?php use_javascript('lib/fullcalendar/fullcalendar.js ') ?>


<?php use_stylesheet("fullcalendar.css")  ?>

<script type='text/javascript'>

          var url_for_eventos_index = "<?php echo  url_for('index_eventos', array("sf_format" => "json","idProyecto" => $proyecto->getIdProyecto())) ;?>";
          
</script>
 
<?php use_javascript('eventos.scripts/inicializarCalendario.js ') ?>


<div id='calendar'></div>

 <?php echo link_to('Nuevo Evento', 'evento/new?idProyecto='.$proyecto->getIdProyecto(), array('class' => 'button icon add dialogLink','id' =>'btn-nuevo-evento'));
                        ?>

<div id="dialog-nuevo-evento">
</div>
