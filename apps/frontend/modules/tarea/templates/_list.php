


<h1>Arb&oacute;l de Tareas (Nested)</h1>

<?php if ($arbolTarea): ?>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Añadir</th>
        </tr>
        <?php foreach ($arbolTarea as $node): ?>
            <tr>
                <td> <?php echo str_repeat('&nbsp;&nbsp;', $node['level']) . $node['nombreTarea'] . " " . $node['idTarea'] . "\n"; ?> </td>

                <td>

                <td><?php
        echo link_to(' ', 'tarea/addChild?idTarea=' . $node['idTarea'], array("idTarea" => $node['idTarea'],
            'class' => 'custom-button icon add-hija  ',
            'id' => 'adicinar-hija',
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


<a href="<?php echo url_for('tarea/new') ?>">New</a>

<input type="button" id="btn-nueva-tarea" class="button icon add" value="Nueva Tarea" >

<div class="demo">

    <div id="dialog-nueva-tarea" class="dialog" title="Nueva Tarea">
        <p>Crear nueva tarea</p>
    </div>