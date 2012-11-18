<table>
  <tbody>
    <tr>
      <th>Id tema:</th>
      <td><?php echo $tema->getIdTema() ?></td>
    </tr>
    <tr>
      <th>Titulo tema:</th>
      <td><?php echo $tema->getTituloTema() ?></td>
    </tr>
    <tr>
      <th>Proyecto fk:</th>
      <td><?php echo $tema->getProyectoFK() ?></td>
    </tr>
    <tr>
      <th>Usuario fk:</th>
      <td><?php echo $tema->getUsuarioFK() ?></td>
    </tr>
    <tr>
      <th>Fecha creacion:</th>
      <td><?php echo $tema->getFechaCreacion() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $tema->getFechaActualizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tema/edit?id_tema='.$tema->getIdTema()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tema/index') ?>">List</a>
