var map;
var selecControl;
var aDragControl ;
var aDrawPointsControl;
var aDestroyButton;

var popUpTrigger = false;
var deleteTrigger = false;



jQuery(document).ready(function(){
    renderMapaLugares();
   
    jQuery("#slct-mapas").bind("change",function(){
       
        var mapSelected = jQuery("#slct-mapas").val();
        if(mapSelected !=  0 ){
           
            changeLayer(url_index_lugares.replace('data',mapSelected));
            mostraListaLugares(url_index_lugares.replace('data',mapSelected));
           
        }else{
            
            var $warningBox = createWarningBox();
            $warningBox.html("Debe seleccionar un mapa"); 
            $warningBox.dialog("open");
        }
       
    })
 
});


function renderMapaLugares(){
    //Configuracion de opelayers
     
    var options = {
        numZoomLevels: null, 
        minZoomLevel: 5, 
        maxZoomLevel: 16
    };
    

    map = new OpenLayers.Map("mapa-index", options);
    var mapnik         = new OpenLayers.Layer.OSM();
   
    var fromProjection = new OpenLayers.Projection("EPSG:4326");  
    var toProjection   = new OpenLayers.Projection("EPSG:900913");
    
    var position  =  new OpenLayers.LonLat(13.41,52.52).transform( fromProjection, toProjection);
    var zoom      =  5; 

    map.addLayer(mapnik);
    // map.addControl(new OpenLayers.Control.MousePosition({}));
   
    map.setCenter(position, zoom );

}



function actualizarLugar(event){

    console.info('Se movio ', event )   
}

function nuevoLugar(lugar){
    console.log('El lugar'+ lugar.geometry)
}




function toggleSelected(triggerName){
	/*
	if(triggerName == 'popUpTrigger' && popUpTrigger == false){
	  
		popUpTrigger = true;
		deleteTrigger = false;
		
	}else(triggerName = 'deleteTrigger' && deleteTrigger == false){
		
		
		popUpTrigger = false;
		deleteTrigger = true;
		
	}
	*/
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

function toggleSelectControlPoPUp(elSelectControl){
    
    
    var toggle_button_activate_func = function(){
        elSelectControl.activate();     
    } 

    var toggle_button_deactivate_func = function(){
       
        elSelectControl.deactivate();    
    }

    //CREATE TOGGLE BUTTON OBJECT
    //
    //Create the toggle button object
    var toggleSelectButton = new OpenLayers.Control.Button({
        displayClass: 'olControlCustomButtonToggle',
        eventListeners: {
            'activate': toggle_button_activate_func,
            'deactivate': toggle_button_deactivate_func
        },
        type: OpenLayers.Control.TYPE_TOGGLE
    })
    
    
}


function toggleDragControl(){
    

    var toggle_button_activate_func = function(){
        aDragControl.activate();     
    } 

    var toggle_button_deactivate_func = function(){
       
        aDragControl.deactivate();    
    }


    var aToggleDragControl = new OpenLayers.Control.Button({
        displayClass: 'olControlToggleDrag',
        eventListeners: {
            'activate': toggle_button_activate_func,
            'deactivate': toggle_button_deactivate_func
        },
        type: OpenLayers.Control.TYPE_TOGGLE
    });
    
    return aToggleDragControl;
   
    
 
}


function toggleDrawControl(){
    

    var toggle_button_draw_activate_func = function(){
        aDragControl.activate();     
    } 

    var toggle_button_draw_deactivate_func = function(){
       
        aDragControl.deactivate();    
    }


    var aToggleDrawControl = new OpenLayers.Control.Button({
        displayClass: 'olControlToggleDraw',
        eventListeners: {
            'activate': toggle_button_draw_activate_func,
            'deactivate': toggle_button_draw_deactivate_func
        },
        type: OpenLayers.Control.TYPE_TOGGLE
    });
    
    return aToggleDrawControl;
   
    
 
}

function agregarPointerControl(){
    
  

    var activePointerFunction = function (evt){
    
        aDragControl.deactivate();
        aDrawPointsControl.deactivate();
        aDestroyButton.desactivate();
                
    };
    
    var custom_button = new OpenLayers.Control.Button({
        displayClass: 'olControlPointer', 
        trigger: activePointerFunction
    })
        
        
        
    return custom_button;
}
 
 
var onFeatureSelected = function (evt){
    

  if(popUpTrigger){
	  
	  var feature = evt.feature;
	    var popup = new OpenLayers.Popup.FramedCloud("popup",
	        OpenLayers.LonLat.fromString(feature.geometry.toShortString()),
	        null,
	        "<div class='content-popup' >Titulo: " + feature.attributes.titulo+"<br> Descripci&oacute;n:"+feature.attributes.descripcion+"</div>",
	        null,
	        true
	        );
	    feature.popup = popup;
	    map.addPopup(popup);
 
  }else if(deleteTrigger){

	  var feature = evt.feature;
      alert("Voy a eliminar el lugar " + feature.attribute.idLugar) 
	  
  }
  
}
    
var onFeatureUnSelected = function (evt){

	var feature = evt.feature;
	
	if(popUpTrigger){
	   
	    map.removePopup(feature.popup);
	    feature.popup.destroy();
	    feature.popup = null;
	   
   }
}

function  createLayer(url){
      
    //Create a Format object
    var vector_format = new OpenLayers.Format.GeoJSON({}); 
        
      //Create an array of strategy objects
    var vector_strategies = [new OpenLayers.Strategy.Fixed()];
          
    var  customStrategies = [new OpenLayers.Strategy.BBOX(), 
    new OpenLayers.Strategy.Refresh({
        interval: 5000,
        refresh: function() {
        //   wms_layer.refresh({force:true})
        }

    })
    ] 
        
    //Create a Protocol object using the format object just created
    var vector_protocol = new OpenLayers.Protocol.HTTP({
        url:  url,
        format: vector_format
      
    });
		
                              
    //Create a vector layer that contains a Format, Protocol, and Strategy class
    var vector_layer = new OpenLayers.Layer.Vector('Lugares',{
        protocol: vector_protocol,
        style: getCentralBranchStyle(),
          strategies: customStrategies,
       eventListeners:{
            'featureselected': function (evt){
    

  if(popUpTrigger){
	  
	  var feature = evt.feature;
	    var popup = new OpenLayers.Popup.FramedCloud("popup",
	        OpenLayers.LonLat.fromString(feature.geometry.toShortString()),
	        null,
	        "<div class='content-popup' >Titulo: " + feature.attributes.titulo+"<br> Descripci&oacute;n:"+feature.attributes.descripcion+"</div>",
	        null,
	        true
	        );
	    feature.popup = popup;
	    map.addPopup(popup);
 
  }else if(deleteTrigger){

	  var feature = evt.feature;
      alert("Voy a eliminar el lugar " + feature.attribute.idLugar) 
	  
  }
  
},
            'featureunselected':function (evt){

	var feature = evt.feature;
	
	if(popUpTrigger){
	   
	    map.removePopup(feature.popup);
	    feature.popup.destroy();
	    feature.popup = null;
	   
   }
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

function agregarDragControl(mapa ,layer){
     
    var dragControl = new OpenLayers.Control.DragFeature(layer, {
        onComplete: function(event) {
         
            alert(event.feature.attributes.titulo); 
        
        },
        autoActivate: true   
    });
     
     
    return dragControl;
     
}

function agregarSelectedFeauteControlOnHover(mapa, layer){
     
    selecControl = new OpenLayers.Control.SelectFeature(layer,{
        hover:true,
        autoActivate:true
    });
    
    mapa.addControl(selecControl);
}              
                
function agregarSelectedFeauteControl(mapa, layer){
     
    mapa.addControl( new OpenLayers.Control.
        SelectFeature(
            layer,  {
                multiple: false,
                toggle: true,
                multipleKey: 'shiftKey'
            }
            ));
                           
     
}

function destroyFeature(evt){
    var feature = evt.feature;
    feature.destroy();
}



var destroyActiveSelected = function(){ 
            
    selecControl.hover = false;  
    map.layers[1].events.unregister('featureselected', map, onFeatureSelected);
    map.layers[1].events.unregister('featureunselected', map, onFeatureUnSelected);
    map.layers[1].events.register('featureselected', map, destroyFeature);
          
        
}
        
        
var destroyInativeSelected = function(){ 
            
    selecControl.hover = true;  
    map.layers[1].events.unregister('featureselected', map, destroyFeature);
    map.layers[1].events.register('featureselected', map, onFeatureSelected);
    map.layers[1].events.register('featureunselected', map, onFeatureUnSelected);
        
}      


function getButtonDestroy(){
    
    
    var aDetroyControl = new OpenLayers.Control.Button({
        displayClass: 'olControlDestroy',
        eventListeners: {
            'activate': destroyActiveSelected ,
            'deactivate': destroyInativeSelected 
        },
        type: OpenLayers.Control.TYPE_TOGGLE
    });
    
    return aDetroyControl ;
    
    
}






function changeLayer(url){
    
    if(map.layers.length > 1){
        
        map.layers[1].destroy();
      
    }
    
    map.addLayer(createLayer(url));
    
    
     initControls(map.layers[1]);
    
   // oldInitControls();
     
    map.layers[1].refresh();
     
    if(map.layers[1].features.length > 0){
         
        map.setCenter(map.layers[1].feature[0].lonlat, 5);
         
    }
  
}


function oldInitControls(){
    
   // var control_panel = new OpenLayers.Control.Panel({
    //    div: document.getElementById('panel_div')
    //}); 
    aDragControl = agregarDragControl(map,map.layers[1]);
    /*
     aDragControl = agregarDragControl(map,map.layers[1]);
     aDrawPointsControl =  new OpenLayers.Control.DrawFeature(map.layers[1],
        OpenLayers.Handler.Point);
    
  

    agregarSelectedFeauteControlOnHover(map, map.layers[1]);                    
                        
    // agregarSelectedFeauteControl(map, map.layers[1]);
    
    var aToggleDrag = toggleDragControl();
    var aToggleDrawPoints = toggleDrawControl();
    //Desactiva los demas
    var pointerControl = agregarPointerControl();
    
    aDestroyButton = getButtonDestroy();
    
    control_panel.addControls([aDrawPointsControl,aDestroyButton,aToggleDrawPoints, pointerControl ]);
    
    
    map.addControl(aDragControl);
    map.addControl(aDrawPointsControl);
    map.addControl(control_panel);*/
    
  
    map.addControl( new   OpenLayers.Control.EditingToolbar(map.layers[1]));
    map.addControl( aDragControl);
    agregarSelectedFeauteControlOnHover(map, map.layers[1]);
    
}


 function toggle(key) {
                var control = controls[key];
                if(control.active) {
                    control.deactivate();
                } else {
                    control.activate();
                }

            }
            
            
function initControls(layer){
        
                
    controls = {
        "popupCtrl": new OpenLayers.Control.SelectFeature(layer, {
            hover: true
        }),
        "drawCtrl": new OpenLayers.Control.DrawFeature(layer,
            OpenLayers.Handler.Point)
        ,
        "dragCtrl": new OpenLayers.Control.DragFeature(layer, {
            onComplete: function(event) {
         
                alert(event.feature.attributes.titulo); 
        
            },
            autoActivate: true   
        }),
         

       
    };

    var control;
    for(var key in controls) {
        control = controls[key];
        // only to route output here
        control.key = key;
        map.addControl(control);
    }

  map.addControl( new   OpenLayers.Control.EditingToolbar(layer));
}


 
    


