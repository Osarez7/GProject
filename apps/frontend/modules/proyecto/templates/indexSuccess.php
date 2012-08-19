<h1>Proyectos</h1>

<table class="lista info">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Prioridad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
            <td><?php echo $proyecto->getNombre() ?></td>
            <td><?php echo $proyecto->getStatus() ?></td>
            <td><?php echo $proyecto->getPrioridad() ?></td>
            <td>
                <a  href="<?php echo url_for('proyecto/show?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="ver icon custom-button"></a>
                <a  href="<?php echo url_for('proyecto/edit?id_proyecto=' . $proyecto->getIdProyecto()) ?>" class="editar icon custom-button"></a>
            </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

  <a href="<?php echo url_for('proyecto/new') ?>" class="button  icon add">Nuevo Proyecto</a>





