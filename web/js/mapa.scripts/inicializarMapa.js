var map;


jQuery(document).ready(function(){
     // renderMapaLugares();
          renderExampleMap();
 
  });



function renderMapaLugares(){
    //Configuracion de opelayers
     

    var CentralBranchStyle = OpenLayers.Util.extend({externalGraphic:"http://www.openlayers.org/dev/img/marker.png",pointRadius:100,fillOpacity: 1,graphicWidth: 25,graphicHeight:30, graphicOpacity: 1},OpenLayers.Feature.Vector.style['default']);

    


    map = new OpenLayers.Map("mapa");
    var mapnik         = new OpenLayers.Layer.OSM();
    var vector_layer   = new OpenLayers.Layer.Vector('Lugares',{style:CentralBranchStyle});

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
        url:  url_index_map ,
        format: vector_format
    });
		
                
                
    //Create an array of strategy objects
    var vector_strategies = [new OpenLayers.Strategy.Fixed()];
          
    var     customStrategies = [new OpenLayers.Strategy.BBOX(), 
                                 new OpenLayers.Strategy.Refresh({ interval: 5000,
                                     refresh: function() {
                                      //   wms_layer.refresh({force:true})
                                     }

                                  })
            ]  
          
    //Create a vector layer that contains a Format, Protocol, and Strategy class
    var vector_layer = new OpenLayers.Layer.Vector('More Advanced Vector Layer',{
        protocol: vector_protocol,
        strategies: customStrategies
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
