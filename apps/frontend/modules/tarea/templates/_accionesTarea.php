
<div class="menu-acciones-tarea">
        
                    <?php
                    echo link_to(' ', 'tarea/show?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon ver btn-ver',
                    ))
                    ?>
                    

                    <?php
                    echo link_to(' ', 'tarea/delete?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon eliminar btn-eliminar'
                    ))
                    ?>


                    <?php
                    echo link_to(' ', 'tarea/asignarUsuario?idTarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon asignar btn-asignar-usuario',
                    ))
                    ?>
                    
                    
                    <?php
                    echo link_to(' ', 'tarea/edit?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon editar btn-editar',
                    ))
                    ?>


</div>

