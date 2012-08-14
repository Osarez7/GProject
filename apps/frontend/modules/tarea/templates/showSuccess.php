<table>
  <tbody>
    <tr>
      <th>Id tarea:</th>
      <td><?php echo $tarea->getIdTarea() ?></td>
    </tr>
    <tr>
      <th>Nombre tarea:</th>
      <td><?php echo $tarea->getNombreTarea() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $tarea->getDuracion() ?></td>
    </tr>
    <tr>
      <th>Status</th>
      <td><?php echo $tarea->getStatus() ?></td>
    </tr>
    <tr>
      <th>Prioridad :</th>
      <td><?php echo $tarea->getPrioridad() ?></td>
    </tr>
    <tr>
      <th>Grupo :</th>
      <td><?php echo $tarea->getGrupo() ?></td>
    </tr>
    <tr>
      <th>Proyecto :</th>
      <td><?php echo $tarea->getProyecto() ?></td>
    </tr>
    <tr>
      <th>Tar fecha creacion:</th>
      <td><?php echo $tarea->getTarFechaCreacion() ?></td>
    </tr>
    <tr>
      <th>Tar fecha actulizacion:</th>
      <td><?php echo $tarea->getTarFechaActulizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tarea/edit?id_tarea='.$tarea->getIdTarea()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tarea/index') ?>">List</a>
