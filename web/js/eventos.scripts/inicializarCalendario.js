
  $(document).ready(function() {
   
 
 
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            theme:true,
            events: url_for_eventos_index,
            dayClick: function(date, allDay, jsEvent, view) {
                      jQuery.fullCalendar.formatDate( date, "dd/MM/yyyy/HH/mm");          
                      jQuery("#btn-nuevo-evento").click();

console.log(allDay+" "+ jQuery.fullCalendar.formatDate( date, "dd/MM/yyyy/HH/mm")+ " view:"+view+ " jsEvent:" + jsEvent);

          
            },
            eventClick: function(calEvent, jsEvent, view) {
               
               console.info(calEvent, jsEvent, view);       
 
                jQuery("#eventdata").show();
             
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

