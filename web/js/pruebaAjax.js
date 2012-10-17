
function tareasAJax(){
  
  /* 
    
    jQuery("#wait-icon").show();
              
    jQuery.ajax({
        type:"POST",
        // data: "dato=hola",
        contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
        url:"/frontend_dev.php/prueba",
        dataType:"html",
        success:function (msg) {
      
            jQuery("#mi-nueva-lista").html(msg);
            jQuery("#wait-icon").hide();
            jQuery(".flash_error").slideToggle();
            
               
        }
    });


    */
   
   jQuery("#mi-nueva-lista").html('<img src=" /images/ajax-loader.gif" alt="ajax-loader" />').load("/            frontend_dev.php/prueba");
    
}


