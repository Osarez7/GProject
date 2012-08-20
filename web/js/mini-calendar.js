/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function cambiarMes(anio, mes , direccion, url){
    
    
       jQuery("#wait-icon").show();
              
    jQuery.ajax({
        type:"POST",
        data: {"mes":mes, "direccion": direccion, "anio":mes},
        contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
        url: url,
        dataType:"html",
        success:function (msg) {
      
            jQuery("#mi-nueva-lista").html(msg);
            jQuery("#wait-icon").hide();
            jQuery(".flash_error").slideToggle();
            
               
        }
    });


 
   
   jQuery("#mi-nueva-lista").html('<img src=" /images/ajax-loader.gif" alt="ajax-loader" />').load("/            frontend_dev.php/prueba");
    
  
    
}
