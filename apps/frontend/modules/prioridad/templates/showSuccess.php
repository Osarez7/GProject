<table>
  <tbody>
    <tr>
      <th>Id prioridad:</th>
      <td><?php echo $prioridad->getIdPrioridad() ?></td>
    </tr>
    <tr>
      <th>Nombre prioridad:</th>
      <td><?php echo $prioridad->getNombrePrioridad() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('prioridad/edit?id_prioridad='.$prioridad->getIdPrioridad()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('prioridad/index') ?>">List</a>
