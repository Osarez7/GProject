
<div class="menu-acciones-tarea">
        
                  <?php
                    echo link_to(' ', 'tarea/show?id_tarea=' . $node['idTarea'], array(
                        'class' => 'dialogLink custom-button icon ver','title' => 'Ver detalles'
                    ))
                    ?>
                    

                    <?php
                    echo link_to(' ', 'tarea/edit?id_tarea=' . $node['idTarea'], array(
                        'class' => 'dialogLink custom-button icon editar ','title' => 'Editar'
                    ))
                    ?>


                    <?php
                    echo link_to(' ', 'tarea/asignarUsuario?idTarea=' . $node['idTarea'], array(
                        'class' => ' dialogLink custom-button icon asignar btn-asignar-usuario'
                        ,'title' => 'Asignar'
                    ))
                    ?>
                    
                
 <?php
                    echo link_to(' ', 'tarea/addChild?idTarea=' . $node['idTarea'].'&idProyecto='.$proyecto->getIdProyecto(), array(
                        'class' => ' dialogLink custom-button icon extender ','title' => 'Crear sub tarea'
                    ))
                    ?>
    

</div>

