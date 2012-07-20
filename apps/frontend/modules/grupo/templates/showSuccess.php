<table>
  <tbody>
    <tr>
      <th>Id grupo:</th>
      <td><?php echo $grupo->getIdGrupo() ?></td>
    </tr>
    <tr>
      <th>Nombre grupo:</th>
      <td><?php echo $grupo->getNombreGrupo() ?></td>
    </tr>
    <tr>
      <th>Desc grupo:</th>
      <td><?php echo $grupo->getDescGrupo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('grupo/edit?id_grupo='.$grupo->getIdGrupo()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('grupo/index') ?>">List</a>
