


<?php

$miMapa = array();
$puntos = array();




$mispuntos =  ' "type": "FeatureCollection",
    "features": [
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[-81, 42]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[-71, -7]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[-21, 63]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[19, -24]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[4, 42]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[-116, 61]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[-17, 40]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[32, 35]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[83, 38]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[133, -28]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[-53, -18]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[99, 3]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[137, 42]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[77, 21]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[83, 31]}},
        {"type":"Feature","properties":{}, "geometry":{"type":"Point", "coordinates":[24, 52]}}
    ]
}';



if ($mapas) {

    foreach ($mapas as $mapa) {


        $puntos[] = array('type' => 'Feature',
            'properties' => array(),
            'descripcion' => $mapa->getDescMapa(),
            'geometry' => array('type'=>'Point',
             'coordinates' => array(24, 52)
            )
        );
    }
}


$miMapa['type'] = 'FeatureCollection';
$miMapa['features'] = $puntos;

echo json_encode($miMapa);
  
?>


   
