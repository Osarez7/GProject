

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
            events: "<?php echo url_for('index_eventos', array("sf_format" => "json")) ?>",
            dayClick: function(date, allDay, jsEvent, view) {
              console.log(allDay+" "+ jQuery.fullCalendar.formatDate( date, "dd/MM/yyyy/HH/mm")+ " view:"+view+ " jsEvent:" + jsEvent);
              
            }
            
        });
 
    });
 
</script>



<div id='calendar'></div>

<a href="<?php echo url_for('evento/new'); ?>" class="button icon add">Nuevo</a>
