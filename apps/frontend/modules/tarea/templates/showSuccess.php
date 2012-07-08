<table>
  <tbody>
    <tr>
      <th>Id tarea:</th>
      <td><?php echo $tarea->getIdTarea() ?></td>
    </tr>
    <tr>
      <th>Tar nombre:</th>
      <td><?php echo $tarea->getTarNombre() ?></td>
    </tr>
    <tr>
      <th>Tar estado:</th>
      <td><?php echo $tarea->getTarEstado() ?></td>
    </tr>
    <tr>
      <th>Tar fecha creacion:</th>
      <td><?php echo $tarea->getTarFechaCreacion() ?></td>
    </tr>
    <tr>
      <th>Tar fecha actulizacion:</th>
      <td><?php echo $tarea->getTarFechaActulizacion() ?></td>
    </tr>
    <tr>
      <th>Status id status:</th>
      <td><?php echo $tarea->getStatusIdStatus() ?></td>
    </tr>
    <tr>
      <th>Prioridad id prioridad:</th>
      <td><?php echo $tarea->getPrioridadIdPrioridad() ?></td>
    </tr>
    <tr>
      <th>Grupo id grupo:</th>
      <td><?php echo $tarea->getGrupoIdGrupo() ?></td>
    </tr>
    <tr>
      <th>Proyecto id proyecto:</th>
      <td><?php echo $tarea->getProyectoIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $tarea->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $tarea->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tarea/edit?id_tarea='.$tarea->getIdTarea()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tarea/index') ?>">List</a>
