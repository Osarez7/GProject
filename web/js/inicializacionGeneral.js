jQuery(document).ready(function(){

    //  jQuery('select').customStyle();

    jQuery('.dialog').dialog({
        autoOpen: false,
        show: "fade",
        hide: "fade"
    });
          
          
    jQuery("#btn-nueva-tarea" ).click(function() {
                                
        jQuery.ajax({
            type:"GET",
            contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
            url: "/frontend_dev.php/tarea/new",
            dataType:"html",
            success:function (msg) {
      
                jQuery("#dialog-nueva-tarea").html(msg);
                jQuery( "#dialog-nueva-tarea" ).dialog( "open" );
                
            }
        });
    
    });
    
                    
    jQuery("#guardar-tarea" ).live('click',function() {
               
        jQuery(this).parents('form').ajaxSubmit({
            success: function(msg){
      
                jQuery("#dialog-nueva-tarea").html(msg);

            }
                
        });

    });
    
    
    
     jQuery("#btn-nueva-tarea" ).click(function() {
                                
        jQuery.ajax({
            type:"GET",
            contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
            url: "/frontend_dev.php/tarea/new",
            dataType:"html",
            success:function (msg) {
      
                jQuery("#dialog-nueva-tarea").html(msg);
                jQuery( "#dialog-nueva-tarea" ).dialog( "open" );

            }
        });
    
    });
    
   jQuery(".btn-asignar-usuario").click(function(event){
       
       event.preventDefault();
       
       jQuery.ajax({
            type:"GET",
            contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
            url: jQuery(this).attr('href'),
            dataType:"html",
            success:function (msg) {
      
                jQuery("#dialog-nueva-tarea").html(msg);
                jQuery( "#dialog-nueva-tarea" ).dialog( "open" );
                jQuery(".ui-dialog.ui-widget").css("width","340");   


            }
        });
       
   });
       
   
});
