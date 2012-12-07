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


      jQuery("#content-left-gantt").resizable();

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
