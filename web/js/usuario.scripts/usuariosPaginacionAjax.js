$(document).ready(function(){
    $('#paginacion a').click(function(event) {
        event.preventDefault();
              

       jQuery.ajax({
                    type:"GET",
                    contentType:"application/x-www-form- urlencoded;charset=ISO-8859-1",
                    url: jQuery(this).attr('href'),
                    dataType:"html",
                    success:function (msg) {
      
                        jQuery("#lista-usuarios").html(msg);
                          
                    }
                });

        
    });
