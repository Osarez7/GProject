<h1>Tareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id tarea</th>
      <th>Nombre tarea</th>
      <th>Duracion</th>
      <th>Status pk</th>
      <th>Prioridad pk</th>
      <th>Grupo pk</th>
      <th>Proyecto pk</th>
      <th>Tar fecha creacion</th>
      <th>Tar fecha actulizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tarea/show?id_tarea='.$tarea->getIdTarea()) ?>"><?php echo $tarea->getIdTarea() ?></a></td>
      <td><?php echo $tarea->getNombreTarea() ?></td>
      <td><?php echo $tarea->getDuracion() ?></td>
      <td><?php echo $tarea->getStatusPK() ?></td>
      <td><?php echo $tarea->getPrioridadPK() ?></td>
      <td><?php echo $tarea->getGrupoPK() ?></td>
      <td><?php echo $tarea->getProyectoPK() ?></td>
      <td><?php echo $tarea->getTarFechaCreacion() ?></td>
      <td><?php echo $tarea->getTarFechaActulizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tarea/new') ?>">New</a>
