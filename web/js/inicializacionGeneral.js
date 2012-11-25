


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
     
       if(!jQuery(this).hasClass("action-confirm")){

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
          }
       

    } );    
 

    jQuery(".dialogSubmit").live("click",function(event){

        event.preventDefault();
        
      if(!jQuery(this).hasClass("action-confirm")){

        crearContentDialog();
    
        jQuery(this).parents('form').ajaxSubmit({
            success: function(msg){

                jQuery("#customDialogConent").html(msg);
            }
        });        
       }
    });



    jQuery(".action-confirm").live("click",function(event){

        event.preventDefault();
        createConfirmBox(jQuery(this));
        jQuery("#simpleConfirmBox").dialog( "open" );
   
    });
});



     

function crearContentDialog(){
    
    if(jQuery("#customDialogConent").length == 0){
            
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


function createConfirmBox($elementConfirm) {
    
    if(jQuery("#simpleConfirmBox").length == 0){
        jQuery("body").append('<div id="simpleConfirmBox"> Esta seguro ? </div>'); 
              
        jQuery("#simpleConfirmBox").dialog({
            autoOpen: false,
            resizable: false,
            height:140,
            modal: true,
            buttons: {
                "Si": function() {
                jQuery(this).dialog( "close" );  
                $elementConfirm.removeClass("action-confirm");
                $elementConfirm.click();
                         
                },
                "Cancelar": function() {        
                 jQuery( this ).dialog( "close" );
                }
            }
        });
              
              
    }
}


function pruebaAjax(){


    jQuery("#mi-nueva-lista")
    .html('<img src=" /images/ajax-loader.gif" alt="ajax-loader" />')
    .load("/frontend_dev.php/prueba");
}
