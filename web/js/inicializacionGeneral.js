
var map;
var map2;



function renderMapaLugares(){
    //Configuracion de opelayers
     

    var CentralBranchStyle = OpenLayers.Util.extend({externalGraphic:"http://www.openlayers.org/dev/img/marker.png",pointRadius:100,fillOpacity: 1,graphicWidth: 25,graphicHeight:30, graphicOpacity: 1},OpenLayers.Feature.Vector.style['default']);

    


    map = new OpenLayers.Map("mapa");
    var mapnik         = new OpenLayers.Layer.OSM();
    var vector_layer   = new OpenLayers.Layer.Vector('Capa Vector',{style:CentralBranchStyle});

    var fromProjection = new OpenLayers.Projection("EPSG:4326");  
    var toProjection   = new OpenLayers.Projection("EPSG:900913");
  
    var position  =
        new OpenLayers.LonLat(13.41,52.52).transform( fromProjection, toProjection);
    var zoom           = 15; 
  
    



    vector_layer.events.register('afterfeaturemodified',this,actualizarLugar);

 
    map.addLayer(mapnik);
    map.addLayer(vector_layer);
    map.addControl(new OpenLayers.Control.EditingToolbar(vector_layer));

    drag = new OpenLayers.Control.DragFeature(vector_layer, {
        autoActivate: true,
        onComplete: function(feature) {
            alert('hello my feature:' + feature.id)
        }
    });

  
 
    map.addControl(drag);
    map.setCenter(position, zoom );


}

function  renderExampleMap(){
    //Create a map with an empty array of controls
    map2 = new OpenLayers.Map('mapa');

    //Create a base layer
    var wms_layer = new OpenLayers.Layer.WMS(
    'OpenLayers WMS',
    'http://vmap0.tiles.osgeo.org/wms/vmap0',
    {layers: 'basic'},
    {}
);
        
    map2.addLayer(wms_layer);
        
    //Create a Format object
    var vector_format = new OpenLayers.Format.GeoJSON({}); 
        
    //Create a Protocol object using the format object just created
    var vector_protocol = new OpenLayers.Protocol.HTTP({
        url: '/ex5_data.json',
        format: vector_format
    });
		
    //Create an array of strategy objects
    var vector_strategies = [new OpenLayers.Strategy.Fixed()];
          
    //Create a vector layer that contains a Format, Protocol, and Strategy class
    var vector_layer = new OpenLayers.Layer.Vector('More Advanced Vector Layer',{
        protocol: vector_protocol,
        strategies: vector_strategies 
    });
            
    map2.addLayer(vector_layer);

    if(!map2.getCenter()){
        map2.zoomToMaxExtent();
    }
              
    

}


function actualizarLugar(event){
 
    console.info('Se movio ', event )   
}

function nuevoLugar(lugar){
    console.log('El lugar'+ lugar.geometry)
}

jQuery(window).load(function(){




   	jQuery(function() {

			"use strict";

			jQuery(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			jQuery(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			

		});





            //  jQuery('select').customStyle();

            jQuery('.dialog').dialog({
                autoOpen: false,
                show: "fade",
                hide: "fade",
                modal: true,
                draggable: false
            });
          
          
  
    
                    
            jQuery("#guardar-tarea" ).live('click',function() {
               
                jQuery(this).parents('form').ajaxSubmit({
                    success: function(msg){
      
                        jQuery("#dialog-nueva-tarea").html(msg);

                    }
                
                });

            });
    
    
    
            jQuery("#btn-nueva-tarea" ).click(function() {
                                
                jQuery.ajax({
                    type:"GET",
                    contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
                    url:  jQuery('#nueva-tarea-form').attr('action'),
                    dataType:"html",
                    success:function (msg) {
      
                        jQuery("#dialog-nueva-tarea").html(msg);
                        jQuery( "#dialog-nueva-tarea" ).dialog( "open" );

                    }
                });
    
            });


    
            jQuery(".btn-asignar-usuario").click(function(event){
       
                event.preventDefault();
       
                jQuery.ajax({
                    type:"GET",
                    contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
                    url: jQuery(this).attr('href'),
                    dataType:"html",
                    success:function (msg) {
      
                        jQuery("#dialog-nueva-tarea").html(msg);
                        jQuery( "#dialog-nueva-tarea" ).dialog( "open" );
                        jQuery(".ui-dialog.ui-widget").css("width","340");   


                    }
                });
       
            });
       
   
            renderMapaLugares();
            //renderExampleMap();
  

   
        });
