<h1>Proyectos</h1>

<table class="lista">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tiempo estimado</th>
                <th>Status pk</th>
                <th>Prioridad pk</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
            <td><a href="<?php echo url_for('proyecto/show?id_proyecto=' . $proyecto->getIdProyecto()) ?>"><?php echo $proyecto->getNombre() ?></a></td>
            <td><?php echo $proyecto->getTiempoEstimado() ?></td>
            <td><?php echo $proyecto->getStatusPK() ?></td>
            <td><?php echo $proyecto->getPrioridadPK() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

  <a href="<?php echo url_for('grupo/new') ?>">New</a>





