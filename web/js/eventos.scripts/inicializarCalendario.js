
var globalEvent;
var globalView;

$(document).ready(function() {
   
 
 
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        //   editable: true,
        theme:true,
        events: url_for_eventos_index,
        dayClick: function(date, allDay, jsEvent, view) {
      
            ajaxCall(url_for_create_event.replace('dataFecha',Math.round(date.getTime()/1000)).replace("dataAllDay",allDay));

          
        },
        eventClick: function(calEvent, jsEvent, view) {
                       
            ajaxCall(calEvent.editEvento);
           
        },
        eventMouseover: function(calEvent, jsEvent, view) {
        //   globalEvent = calEvent; 
        // ajaxCall(calEvent.showEvento);
        },
        monthNames:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
        ,
        dayNamesShort:['Dom','Lun','Mar','Mie','Jue','Vie','Sab'] ,
        buttonText:{
            prev:     '&nbsp;&#9668;&nbsp;',  // left triangle
            next:     '&nbsp;&#9658;&nbsp;',  // right triangle
            prevYear: '&nbsp;&lt;&lt;&nbsp;', // <<
            nextYear: '&nbsp;&gt;&gt;&nbsp;', // >>
            today:    'Hoy',
            month:    'Mes',
            week:     'Semana',
            day:      'D&iacute;a'
        } ,
        allDayText: 'Todo el d&iacute;a',
        firstHour: 8,
        slotMinutes: 60
    });
    
    jQuery(".updateCalendar").live('click',function(){
        
                jQuery('#calendar').fullCalendar('next');
                jQuery('#calendar').fullCalendar('prev'); 
      
       
    });
 
});



function ajaxCall(url){
    
    crearContentDialog();
    jQuery.ajax({
                
        type:"GET",
        contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
        url: url,
        dataType:"html",
        success:function (msg) {
      
            jQuery("#customDialogConent").html(msg);         
            jQuery( "#customDialogConent" ).dialog( "open" ).parents("div.ui-dialog").css("width", jQuery("#customDialogConent div:first-child").width());
                   


        }
    });
}