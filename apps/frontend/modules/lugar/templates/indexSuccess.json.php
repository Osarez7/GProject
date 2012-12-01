


<?php

$arrayMapa = array();
$arrayLugares = array();



if ($lugares) {

    foreach ($lugares as $lugar) {


        $arrayLugares[] = array('type' => 'Feature',
            'properties'=>array('idLugar'=> $lugar->getIdLugar(),'titulo' => $lugar->getTituloLugar(),'descripcion'=> $lugar->getInfoLugar()),
            'geometry' => array('type'=>'Point',
            'coordinates' => array($lugar->getLongitud(),$lugar->getLatitud())
            )
        );
    }
}


$arrayMapa['type'] = 'FeatureCollection';
$arrayMapa['features'] = $arrayLugares ;

echo json_encode($arrayMapa);
  
?>


   
