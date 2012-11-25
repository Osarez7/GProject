


jQuery(window).load(function(){


    jQuery('.dialog').dialog({
        autoOpen: false,
        show: "fade",
        hide: "fade",
        modal: true,
        draggable: false
    });

            
    jQuery(".aimLink").live("click",function(){
        window.location.href =  jQuery(this).attr("href");
    });

     
    jQuery('.dialogLink').live("click",function(event){
        
        event.preventDefault();
        crearContentDialog();
     
        jQuery.ajax({
            type:"GET",
            contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
            url: jQuery(this).attr('href'),
            dataType:"html",
            success:function (msg) {
      
                jQuery("#customDialogConent").html(msg);
                jQuery( "#customDialogConent" ).dialog( "open" ).css("display","inline-block");
                jQuery(".ui-dialog.ui-widget").css("display","inline-block");   


            }
        });
       

    } );    
 

    jQuery(".dialogSubmit").live("click",function(event){

        event.preventDefault();
  
        crearContentDialog();
    
        jQuery(this).parents('form').ajaxSubmit({
            success: function(msg){

                jQuery("#customDialogConent").html(msg);
            }
        });        
   
    });



    jQuery(".action-confirm").live("click",function(event){

        event.preventDefault();
  
        createConfirmBox(jQuery(this));
       
   
    });
});


function createCorfirmBox($elementConfirm) {
    
    if(jQuery("#simpleConfirmBox").length == 0){
        jQuery("body").append('<div id="simpleConfirmBox"></div>'); 
              
        jQuery("#simpleConfirmBox").dialog({
            resizable: false,
            height:140,
            modal: true,
            buttons: {
                "Si": function() {
                   
                $elementConfirm.removeClass("action-confirm");
                jQuery( this ).dialog( "close" );
                $elementConfirm.click();
                         
                },
                "Cancelar": function() {
                    
                    
                    jQuery( this ).dialog( "close" );
                }
            }
        });
              
              
    }
}

     

function crearContentDialog(){
    
    if(jQuery("#customDiagloConent").length == 0){
             

        jQuery("body").append('<div id="customDialogConent"></div>');
        jQuery('#customDialogConent').dialog({
            autoOpen: false,
            show: "fade",
            hide: "fade",
            modal: true,
            draggable: false
        });
    }
    
}

function pruebaAjax(){


    jQuery("#mi-nueva-lista")
    .html('<img src=" /images/ajax-loader.gif" alt="ajax-loader" />')
    .load("/frontend_dev.php/prueba");
}
