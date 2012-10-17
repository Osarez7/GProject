

<?php use_javascript('jquery.ui.core.js') ?>
<?php use_javascript('jquery.ui.draggable.js') ?>
<?php use_javascript('jquery.ui.droppable.js') ?>

<script type='text/javascript'>
 
    $(document).ready(function() {

    jQuery("#btn-nuevo-evento").hide();
 
         jQuery("#dialog-nuevo-evento").dialog({
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

                                
        jQuery.ajax({
            type:"GET",
            contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
            url:  jQuery('#btn-nuevo-evento').attr('href'),
            dataType:"html",
            success:function (msg) {
      
                jQuery("#dialog-nuevo-evento" ).html(msg);
                jQuery( "#dialog-nuevo-evento" ).dialog( "open" );
             }
  });
        

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

<a id="btn-nuevo-evento" href="<?php echo url_for('evento/new'); ?>" class="button icon add">Nuevo Evento</a>

<div id="dialog-nuevo-evento">
</div>
