<table>
  <tbody>
    <tr>
      <th>Id evento:</th>
      <td><?php echo $evento->getIdEvento() ?></td>
    </tr>
    <tr>
      <th>Fecha evento:</th>
      <td><?php echo $evento->getFechaEvento() ?></td>
    </tr>
    <tr>
      <th>Nombre evento:</th>
      <td><?php echo $evento->getNombreEvento() ?></td>
    </tr>
    <tr>
      <th>Desc evento:</th>
      <td><?php echo $evento->getDescEvento() ?></td>
    </tr>
    <tr>
      <th>Proyecto pk:</th>
      <td><?php echo $evento->getProyectoPK() ?></td>
    </tr>
    <tr>
      <th>Fecha cambio estado:</th>
      <td><?php echo $evento->getFechaCambioEstado() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $evento->getFechaActualizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('evento/edit?id_evento='.$evento->getIdEvento()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('evento/index') ?>">List</a>
