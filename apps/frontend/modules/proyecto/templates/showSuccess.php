<table>
  <tbody>
    <tr>
      <th>Id proyecto:</th>
      <td><?php echo $proyecto->getIdProyecto() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $proyecto->getNombre() ?></td>
    </tr>
    <tr>
      <th>Tiempo estimado:</th>
      <td><?php echo $proyecto->getTiempoEstimado() ?></td>
    </tr>
    <tr>
      <th>Desc proyecto:</th>
      <td><?php echo $proyecto->getDescProyecto() ?></td>
    </tr>
    <tr>
      <th>Status pk:</th>
      <td><?php echo $proyecto->getStatusPK() ?></td>
    </tr>
    <tr>
      <th>Prioridad pk:</th>
      <td><?php echo $proyecto->getPrioridadPK() ?></td>
    </tr>
    <tr>
      <th>Fecha creacion:</th>
      <td><?php echo $proyecto->getFechaCreacion() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $proyecto->getFechaActualizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('proyecto/edit?id_proyecto='.$proyecto->getIdProyecto()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('proyecto/index') ?>">List</a>
