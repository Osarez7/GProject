


<?php
$rows = array();


foreach ($eventos as $evento) {

//Is it an all day event?
    $all = ($evento->getDiaCompleto()== 1);

//Create an event entry
    $rows[] = array('id' =>  $evento->getIdEvento() ,
        'title' => $evento->getNombreEvento(),
        'start' => date('Y-m-d H:i', strtotime($evento->getFechaInicio())),
        'end' => date('Y-m-d H:i', strtotime($evento->getFechaFinal())),
        'url' =>  url_for('evento/show?id_evento=' . $evento->getIdEvento()) ,
        'allDay' => $all,
    );
}

echo json_encode($rows);

?>


