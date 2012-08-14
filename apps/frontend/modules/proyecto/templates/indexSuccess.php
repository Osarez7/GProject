<h1>Proyectos</h1>

<table class="lista">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Prioridad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
            <td><a href="<?php echo url_for('proyecto/show?id_proyecto=' . $proyecto->getIdProyecto()) ?>"><?php echo $proyecto->getNombre() ?></a></td>
            <td><?php echo $proyecto->getStatus() ?></td>
            <td><?php echo $proyecto->getPrioridad() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

  <a href="<?php echo url_for('proyecto/new') ?>">New</a>





