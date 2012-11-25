jQuery(document).ready(function(){

   // jQuery("#listaArbol").treeview({
	//	persist: "location",
	//	collapsed: true,
	//        animated: "slow",
	//        control:"#sidetreecontrol",
	//});


       jQuery("#table-tareas").treeTable({
          initialState: "expanded"
          
	 });


      jQuery(".expander").live("click",function(){

            var idRow =  jQuery(this).parents('tr').attr("id");
             jQuery(".child-of-row-"+idRow).slideToggle();

          });



       /* $("#content-slider").slider({ 
         animate: true, 
          change: handleSliderChange, 
          slide: handleSliderSlide 
});
        var content_scroll_pos = 
Math.floor(($("#content-scroll").scrollLeft() / $("#content-scroll").width()) * 100);

if ($("#content-scroll").scrollLeft() != 0) { $("#content-slider a").css("left",content_scroll_pos+"%"); }


*/




});
