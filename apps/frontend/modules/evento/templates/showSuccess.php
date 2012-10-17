<table>
  <tbody>
    <tr>
      <th>Id evento:</th>
      <td><?php echo $evento->getIdEvento() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $evento->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha final:</th>
      <td><?php echo$evento->getFechaFinal() ?></td>
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
      <td><?php echo $evento->getProyectoFK() ?></td>
    </tr>
    <tr>
        <th>Fecha creaci&oacute;n:</th>
      <td><?php echo $evento->getFechaCreacion() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizaci&oacute;n:</th>
      <td><?php echo $evento->getFechaActualizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('evento/edit?id_evento='.$evento->getIdEvento()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('evento/index') ?>">List</a>
