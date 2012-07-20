<table>
  <tbody>
    <tr>
      <th>Id status:</th>
      <td><?php echo $status->getIdStatus() ?></td>
    </tr>
    <tr>
      <th>Nombre status:</th>
      <td><?php echo $status->getNombreStatus() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('status/edit?id_status='.$status->getIdStatus()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('status/index') ?>">List</a>
