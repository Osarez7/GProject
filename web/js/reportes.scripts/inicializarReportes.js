jQuery(document).ready(function(){
    
    jQuery(".reporteButton").live("click",function(event){
       event.preventDefault();
       
          jQuery.ajax({
            type:"GET",
            contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
            url: jQuery(this).attr('href'),
            dataType:"html",
            success:function (msg) {
      
                jQuery("#filter-content").html(msg);
                 jQuery("#resultado-reporte").html("");

            }
        });
          
        
    });
    
    jQuery(".filtrarReporte").live("click",function(event){

      event.preventDefault();
            
 
    
        jQuery(this).parents('form').ajaxSubmit({
            success: function(msg){

                jQuery("#resultado-reporte").html(msg);
            }
        });        
       
    });
    
});
