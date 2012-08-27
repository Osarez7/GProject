<table>
  <tbody>
    <tr>
      <th>Id mapa:</th>
      <td><?php echo $mapa->getIdMapa() ?></td>
    </tr>
    <tr>
      <th>Nombre mapa:</th>
      <td><?php echo $mapa->getNombreMapa() ?></td>
    </tr>
    <tr>
      <th>Desc mapa:</th>
      <td><?php echo $mapa->getDescMapa() ?></td>
    </tr>
    <tr>
      <th>Proyecto fk:</th>
      <td><?php echo $mapa->getProyectoFK() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('map/edit?id_mapa='.$mapa->getIdMapa()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('map/index') ?>">List</a>
