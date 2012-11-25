
<div class="menu-acciones-tarea">
        
                  <?php
                    echo link_to(' ', 'tarea/show?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon ver',
                    ))
                    ?>
                    

                    <?php
                    echo link_to(' ', 'tarea/edit?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon editar '
                    ))
                    ?>


                    <?php
                    echo link_to(' ', 'tarea/asignarUsuario?idTarea=' . $node['idTarea'], array(
                        'class' => ' dialogLink custom-button icon asignar btn-asignar-usuario',
                    ))
                    ?>
                    
                
 <?php
                    echo link_to(' ', 'tarea/addChild?idTarea=' . $node['idTarea'].'&idProyecto='.$proyecto->getIdProyecto(), array(
                        'class' => ' dialogLink custom-button icon extender btn-asignar-usuario',
                    ))
                    ?>
    

</div>

