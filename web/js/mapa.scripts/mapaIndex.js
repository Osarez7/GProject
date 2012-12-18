var map;
var popUpTrigger = false;
var editTrigger = true;



jQuery(document).ready(function(){
    renderMapaLugares();
   
    jQuery("#slct-mapas").bind("change",function(){
       
        var mapSelected = jQuery("#slct-mapas").val();
        if(mapSelected !=  0 ){
           
            changeLayer(url_index_lugares.replace('data',mapSelected));
            mostraListaLugares(url_index_lugares.replace('data',mapSelected));

 jQuery("#panel_div").show();
           
        }else{
            
            var $warningBox = createWarningBox();
            $warningBox.html("Debe seleccionar un mapa");
            
            $warningBox.dialog("open");
        }
       
    });
    
    
   jQuery('#scrollbar1').tinyscrollbar();
    
 
});


function renderMapaLugares(){
    //Configuracion de opelayers
     


    map = new OpenLayers.Map("mapa-index");
    var mapnik         = new OpenLayers.Layer.OSM();
   
    var fromProjection = new OpenLayers.Projection("EPSG:4326");  
    var toProjection   = new OpenLayers.Projection("EPSG:900913");
    
    var position  =  new OpenLayers.LonLat(13.41,52.52).transform( fromProjection, toProjection);
    var zoom      =  2; 

    map.addLayer(mapnik);
    map.addControl(new OpenLayers.Control.MousePosition({}));

     
    map.addLayer(createLayer(url_index_lugares));
    
    initControls(map.layers[1]);
   

    map.setCenter(position, zoom );



}


function getCentralBranchStyle(){
    
    var CentralBranchStyle = OpenLayers.Util.extend({
        externalGraphic:"http://www.openlayers.org/dev/img/marker.png",
        pointRadius:100,
        fillOpacity: 1,
        graphicWidth: 25,
        graphicHeight:30, 
        graphicOpacity: 1
    },OpenLayers.Feature.Vector.style['default']);
    
    
    return CentralBranchStyle;
    
}




function  createLayer(url){
   
   var vector_format = new OpenLayers.Format.GeoJSON({}); 
    var vector_strategies = [new OpenLayers.Strategy.Fixed()];
  
    var vector_protocol = new OpenLayers.Protocol.HTTP({
        url:  url,
        format: vector_format
    });
 
                              
    var vector_layer = new OpenLayers.Layer.Vector('Lugares',{
        protocol : vector_protocol,
        strategies:   vector_strategies ,
        style: getCentralBranchStyle(),
        eventListeners:{
            'featureselected': function (evt){
    
                var feature = evt.feature;
              
                crearContentDialog();
                jQuery.ajax({
                    type:"GET",
                    contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
                    url: url_for_edit_place.replace('data',feature.attributes.idLugar),
                    dataType:"html",
                    success:function (msg) {
      
                        jQuery("#customDialogConent").html(msg);
                        jQuery( "#customDialogConent" ).dialog( "open" ).parents("div.ui-dialog").css("width", jQuery("#customDialogConent div:first-child").width());
                    }
                });
	  
            },
  
            'featureunselected':function (evt){

                var feature = evt.feature;
	            
            }
        }
       
    });
    
    return vector_layer;
}


function mostraListaLugares(url){
    
    
    jQuery.ajax({
        type:"GET",
        contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
        url: url.replace('json','html'),
        dataType:"html",
        success:function (msg) {
      
            jQuery("#lista-lugares").html(msg);
                 
        }
    });
    
}


          
function changeLayer(url){
    

    var vector_format = new OpenLayers.Format.GeoJSON({}); 
    var vector_protocol = new OpenLayers.Protocol.HTTP({
        url:  url,
        format: vector_format
      
    });
    
    map.layers[1].protocol =  vector_protocol;
    map.layers[1].refresh();
     
}

     
            
function initControls(layer){
        
                
    controls = {
        "selectCtrl":new OpenLayers.Control.SelectFeature(layer,{
            hover: false,
            autoActivate: false
        }),
        "drawCtrl": new OpenLayers.Control.DrawFeature(layer,
            OpenLayers.Handler.Point, {
                featureAdded: function(feature){
                    var position = feature.geometry.getBounds().getCenterLonLat();
                    var toProjection  = new OpenLayers.Projection("EPSG:4326");  
                    var fromProjection   = new OpenLayers.Projection("EPSG:900913");
    
                    var lonlat =  position.transform( fromProjection, toProjection);  
                  
                    crearContentDialog();
                   
                    jQuery.ajax({
                        type:"GET",
                        contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
                        url: url_for_create_place.replace('dataLon',lonlat.lon).replace('dataLat', lonlat.lat).replace('idMapa',jQuery('#field_id_mapa').val()),
                        dataType:"html",
                        success:function (msg) {
      
                            jQuery("#customDialogConent").html(msg);
                            jQuery( "#customDialogConent" ).dialog( "open" ).parents("div.ui-dialog").css("width", jQuery("#customDialogConent div.cotent-form").width());
                   

                        }
                    });
                  
                
                }
            })
        ,
        "dragCtrl": new OpenLayers.Control.DragFeature(layer, {
            onComplete: function(feature) {
         
         
                var lonlat = feature.geometry.getBounds().getCenterLonLat();
                jQuery.ajax({
                    type:"GET",
                    contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
                    url: url_for_move_place.replace('dataLon',lonlat.lon).replace('dataLat', lonlat.lat).replace('dataLugar',feature.attributes.idLugar),
                    dataType:"html",
                    success:function (msg) {

                    }
                });
    
        
            },
            autoActivate: false  
        })
         

       
    };

    var control;
    for(var key in controls) {
        control = controls[key];
        // only to route output here
        control.key = key;
        map.addControl(control);
    }
  
}


function toggleControl(controlName, $elementButton) {
    
   jQuery("#panel_div input").each(function(){
	   
           if(jQuery(this).val() == jQuery($elementButton).val()){
			   
			    jQuery(this).addClass('control_active');
			   }else{
				    jQuery(this).removeClass('control_active');
				   }	   
	   
	   
	   
	   });
   
    for(var key in controls) {
       
        control = controls[key];
       
        if(key == controlName){
            control.activate(); 
        }else{
           
            control.deactivate();
        } 
 
    }
}

 


