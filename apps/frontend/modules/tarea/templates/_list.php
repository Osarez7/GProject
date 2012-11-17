


<h1> Tareas </h1>

<?php if ($arbolTarea): ?>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($arbolTarea as $node): ?>
            <tr>
                <td> <?php echo str_repeat('&nbsp;&nbsp;', $node['level']) . $node['nombreTarea']  . " ". $node['level']. "\n"; ?> </td>

                <td>

                <td>
                    
                    <?php
                    echo link_to(' ', 'tarea/show?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon ver',
                    ))
                    ?>
                    

                    <?php
                    echo link_to(' ', 'tarea/delete?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon eliminar'
                    ))
                    ?>


                    <?php
                    echo link_to(' ', 'tarea/asignarUsuario?idTarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon asignar btn-asignar-usuario',
                    ))
                    ?>
                    
                    
                    <?php
                    echo link_to(' ', 'tarea/edit?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon editar',
                    ))
                    ?>



                </td>





            </tr>
        <?php endforeach; ?>
    </table>

<?php endif; ?>




<input type="button" id="btn-nueva-tarea" class="button icon add" value="Nueva Tarea" >

<form id="nueva-tarea-form" action="<?php echo url_for('nueva_tarea',array('idProyecto'=>$proyecto->getIdProyecto())) ?>" >
</form>


    <div id="dialog-nueva-tarea" class="dialog">
       
    </div>
