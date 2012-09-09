

<?php use_javascript('jquery.ui.core.js') ?>
<?php use_javascript('jquery.ui.draggable.js') ?>
<?php use_javascript('jquery.ui.droppable.js') ?>

<script type='text/javascript'>
 
    $(document).ready(function() {
 
         jQuery("#nuevo-evento").dialog({
          autoOpen: false,
           show: "fade",
           hide: "fade"
    });
 
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            theme:true,
            events: "<?php echo url_for('index_eventos', array("sf_format" => "json")) ?>",
            dayClick: function(date, allDay, jsEvent, view) {
              console.log(allDay+" "+ jQuery.fullCalendar.formatDate( date, "dd/MM/yyyy/HH/mm")+ " view:"+view+ " jsEvent:" + jsEvent);

                jQuery( "#nuevo-evento" ).dialog( "open" );
              
            },
            eventClick: function(calEvent, jsEvent, view) {
                console.info(calEvent, jsEvent, view);       
 
                $("#eventdata").show();
             
            },
           monthNames:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
        ,dayNamesShort:['Dom','Lun','Mar','Mie','Jue','Vie','Sab'] ,
        buttonText:{
    prev:     '&nbsp;&#9668;&nbsp;',  // left triangle
    next:     '&nbsp;&#9658;&nbsp;',  // right triangle
    prevYear: '&nbsp;&lt;&lt;&nbsp;', // <<
    nextYear: '&nbsp;&gt;&gt;&nbsp;', // >>
    today:    'Hoy',
    month:    'Mes',
    week:     'Semana',
    day:      'D&iacute;a'
}     ,
allDayText: 'Todo el d&iacute;a',
firstHour: 8,
slotMinutes: 60
        });
 
    });
 
</script>



<div id='calendar'></div>

<a href="<?php echo url_for('evento/new'); ?>" class="button icon add">Nuevo</a>

<div id="nuevo-evento">
  <p>Ingresa los datos para crear un evento</p>
</div>
