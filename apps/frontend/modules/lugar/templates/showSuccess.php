<table>
  <tbody>
    <tr>
      <th>Id lugar:</th>
      <td><?php echo $lugar->getIdLugar() ?></td>
    </tr>
    <tr>
      <th>Titulo lugar:</th>
      <td><?php echo $lugar->getTituloLugar() ?></td>
    </tr>
    <tr>
      <th>Info lugar:</th>
      <td><?php echo $lugar->getInfoLugar() ?></td>
    </tr>
    <tr>
      <th>Latitud:</th>
      <td><?php echo $lugar->getLatitud() ?></td>
    </tr>
    <tr>
      <th>Longitud:</th>
      <td><?php echo $lugar->getLongitud() ?></td>
    </tr>
    <tr>
      <th>Mapa fk:</th>
      <td><?php echo $lugar->getMapaFK() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('lugar/edit?id_lugar='.$lugar->getIdLugar()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('lugar/index') ?>">List</a>
