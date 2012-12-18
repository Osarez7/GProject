


jQuery(window).load(function(){


   jQuery(".default-selected").attr("selected","selected");

   
     
    jQuery(".aimLink").live("click",function(){
        window.location.href =  jQuery(this).attr("href");
    }); 
    
      

     
    jQuery('.dialogLink').live("click",function(event){
        
        event.preventDefault();
        crearContentDialog();

         $dialogLink = jQuery(this);
     
       if(!$dialogLink .hasClass("action-confirm")){

            jQuery.ajax({
            type:"GET",
            contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
            url: $dialogLink.attr('href'),
            dataType:"html",
            success:function (msg) {
      
                jQuery("#customDialogConent").html(msg);
               //  jQuery("#ui-dialog-title-customDialogConent").html($dialogLink.text());
                jQuery( "#customDialogConent" ).dialog( "open" ).parents("div.ui-dialog").css("width", jQuery("#customDialogConent div.cotent-form").width());
                   


            }
        });
          }
       

    } );    
 

    jQuery(".dialogSubmit").live("click",function(event){

      event.preventDefault();
            
    jQuery(this).parents('form').find('.double_list_select-selected option').each(function(){
           jQuery(this).attr("selected", 'selected')
        });  
        
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
            modal: false,
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



function createWarningBox(){
  

 if(jQuery("#dialog-warning").length == 0){
     jQuery('body').append('<div id="dialog-warning" > Debe seleccionar un map <div>');
        
             jQuery("#dialog-warning").dialog({
            autoOpen: false,
            resizable: false,
            height:140,
            modal: true,
            buttons: {
         
                "Cancelar": function() {        
                 jQuery( this ).dialog( "close" );
                }
            }
        });
   }

  return jQuery("#dialog-warning");
}

function pruebaAjax(){


    jQuery("#mi-nueva-lista")
    .html('<img src=" /images/ajax-loader.gif" alt="ajax-loader" />')
    .load("/frontend_dev.php/prueba");
}
