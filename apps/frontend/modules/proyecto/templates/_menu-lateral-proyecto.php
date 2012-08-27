

<div id="menu-lateral">
    <li>
        <?php echo link_to('Tareas', 'tarea/index', array('class' => 'button icon log')) ?> 
    </li>   
    <li>
        <?php echo link_to('Mapas', 'map/index', array('class' => 'button icon pin')) ?>
    </li>   
    <li>
        <?php echo link_to('Eventos', 'evento/index', array('class' => 'button icon calendar')) ?>
    </li>
    <li>
        <?php
        echo link_to('Editar Proyecto', 'proyecto/edit?id_proyecto=' . $proyecto->getIdProyecto(), array('class' => 'button primary icon edit'))
        ?>
    </li>
    <li> 
        <?php
        echo link_to('Participantes', 'usuario/index', array('class' => 'button icon user'))
        ?>
    </li>
    <li>
        <?php
        echo link_to('Volver a lista', 'proyecto/index', array('class' => 'button icon back'))
        ?>
    </li>
</div>