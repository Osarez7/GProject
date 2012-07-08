<h1>Tareas List</h1>

<table>
  <thead>
    <tr>
      <th>Id tarea</th>
      <th>Tar nombre</th>
      <th>Tar estado</th>
      <th>Tar fecha creacion</th>
      <th>Tar fecha actulizacion</th>
      <th>Status id status</th>
      <th>Prioridad id prioridad</th>
      <th>Grupo id grupo</th>
      <th>Proyecto id proyecto</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $tarea): ?>
    <tr>
      <td><a href="<?php echo url_for('tarea/show?id_tarea='.$tarea->getIdTarea()) ?>"><?php echo $tarea->getIdTarea() ?></a></td>
      <td><?php echo $tarea->getTarNombre() ?></td>
      <td><?php echo $tarea->getTarEstado() ?></td>
      <td><?php echo $tarea->getTarFechaCreacion() ?></td>
      <td><?php echo $tarea->getTarFechaActulizacion() ?></td>
      <td><?php echo $tarea->getStatusIdStatus() ?></td>
      <td><?php echo $tarea->getPrioridadIdPrioridad() ?></td>
      <td><?php echo $tarea->getGrupoIdGrupo() ?></td>
      <td><?php echo $tarea->getProyectoIdProyecto() ?></td>
      <td><?php echo $tarea->getCreatedAt() ?></td>
      <td><?php echo $tarea->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tarea/new') ?>">New</a>
