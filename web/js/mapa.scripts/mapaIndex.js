var map;
var map2;

jQuery(document).ready(function(){
    // renderMapaLugares();
    renderExampleMap();
    
 
});



function renderMapaLugares(){
    //Configuracion de opelayers
     


    


    map = new OpenLayers.Map("mapa");
    var mapnik         = new OpenLayers.Layer.OSM();
   
    var fromProjection = new OpenLayers.Projection("EPSG:4326");  
    var toProjection   = new OpenLayers.Projection("EPSG:900913");
  
    var position  =
        new OpenLayers.LonLat(13.41,52.52).transform( fromProjection, toProjection);
    var zoom           = 15; 



    vector_layer.events.register('afterfeaturemodified',this,actualizarLugar);

 
    map.addLayer(mapnik);
    map.addLayer(vector_layer);
    map.addControl(new OpenLayers.Control.EditingToolbar(vector_layer));
    map.addControl(new OpenLayers.Control.LayerSwitcher({}));


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
     

         
    var mapnik     = new OpenLayers.Layer.OSM();       
            
        
    //Create a Format object
    var vector_format = new OpenLayers.Format.GeoJSON({}); 
        
    //Create a Protocol object using the format object just created
    var vector_protocol = new OpenLayers.Protocol.HTTP({
        url:  url_index_map ,
        format: vector_format
    });
		
                
                
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



    //Create a vector layer that contains a Format, Protocol, and Strategy class
    var vector_layer = new OpenLayers.Layer.Vector('Lugares',{
        protocol: vector_protocol,
        strategies: customStrategies,
        style: getCentralBranchStyle() 
    });

    vector_layer.events.register('afterfeaturemodified',this,actualizarLugar);
    vector_layer.events.register('featureselected',this,abrirPopUp);
    map2.addControl(new OpenLayers.Control.EditingToolbar(vector_layer));



    var fromProjection = new OpenLayers.Projection("EPSG:4326");  
    var toProjection   = new OpenLayers.Projection("EPSG:900913");
  
    var position  = new OpenLayers.LonLat(13.41,52.52).transform( fromProjection, toProjection);
    var zoom      = 2; 
  


    //accion al realizar al seleccionar un feature (un punto del mapa)
    /*vector_layer.events.on({
            'featureselected': function(features){

                abrirPopUp();
            }
        });*/

    map2.addLayer(mapnik );    
    //map2.addLayer(wms_layer);
    map2.addLayer(vector_layer );

    /*
    if(!map2.getCenter()){
        map2.zoomToMaxExtent();
    }
*/

    agregarDragControl(map2,vector_layer);
    agregarSelectedFeauteControl(map2, vector_layer);
    

    map2.setCenter(position, zoom );



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




function agregarDragControl(mapa ,layer){
     
    mapa.addControl(new OpenLayers.Control.DragFeature(layer, {
        autoActivate: true,
        onComplete: function(feature) {
            alert('hello my feature:' + feature.id)
        }
    }));
     
}




function agregarSelectedFeauteControl(mapa, layer){
     
    mapa.addControl( new OpenLayers.Control.
        SelectFeature(
    layer,
    {
        multiple: false,
        toggle: true,
        multipleKey: 'shiftKey'
    }
));
     
}


function abrirPopUp(event){

    crearContentDialog();

    console.info('abrirPopUp ', event )   

    jQuery.ajax({
        type:"GET",
        contentType:"application/x-www-form-urlencoded;charset=ISO-8859-1",
        url: url_index_map ,
        dataType:"html",
        success:function (msg) {

            jQuery("#customDialogConent").html(msg);
            jQuery("#ui-dialog-title-customDialogConent").html('Pop up lugar');
            jQuery( "#customDialogConent" ).dialog( "open" );



        }
    });

}




function actualizarLugar(event){

    console.info('Se movio ', event )   
}

function nuevoLugar(lugar){
    console.log('El lugar'+ lugar.geometry)
}
