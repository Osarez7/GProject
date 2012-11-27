

<h1> Tareas </h1>

<?php if ($arbolTarea): ?>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($arbolTarea as $node): ?>
            <tr>
                <td> <?php echo str_repeat('&nbsp;&nbsp;', $node['level']) . $node['nombreTarea'] . " " . $node['level'] . "\n"; ?> </td>

                <td>

                <td>

                    <?php
                    echo link_to(' ', 'tarea/show?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon ver',
                    ))
                    ?>


                    <?php
                    echo link_to(' ', 'tarea/edit?id_tarea=' . $node['idTarea'], array(
                        'class' => 'custom-button icon editar'
                    ))
                    ?>


                    <?php
                    echo link_to(' ', 'tarea/asignarUsuario?idTarea=' . $node['idTarea'], array(
                        'class' => ' dialogLink custom-button icon asignar btn-asignar-usuario',
                    ))
                    ?>


                    <?php
                    echo link_to(' ', 'tarea/addChild?idTarea=' . $node['idTarea'] . '&idProyecto=' . $proyecto->getIdProyecto(), array(
                        'class' => ' dialogLink custom-button icon extender btn-asignar-usuario',
                    ))
                    ?>



                </td>





            </tr>
        <?php endforeach; ?>
    </table>

<?php endif; ?>


<a sytle="display:block;" class="button icon add dialogLink" href="<?php echo url_for('nueva_tarea', array('idProyecto' => $proyecto->getIdProyecto())) ?>">Nueva Tarea</a>


