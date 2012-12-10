jQuery(document).ready(function(){
  
 jQuery('.tarea-menu').contextPopup({
     title: 'Menu Tareas',
     items: [
          { label:'Ver', 
            icon:'/images/raster/gray_light/eye_12x9.png',         
            action:function() { 
                   alert(jQuery(this).attr("id"));
                 } 
          },
          { label:'Eliminar',
            icon:'/images/raster/gray_light/x_11x11.png', 
            action:function() { 
                 jQuery(".btn-eliminar",jQuery(this).parents("li")).click();
           }},
       {label:'Blahhhh', icon:'/some/icon3.png', action:function() { alert('bye'); }},
     ]
   });





});
