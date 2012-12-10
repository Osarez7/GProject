<table>
  <tbody>
    <tr>
      <th>Id comentario:</th>
      <td><?php echo $comentario->getIdComentario() ?></td>
    </tr>
    <tr>
      <th>Contenido comentario:</th>
      <td><?php echo $comentario->getContenidoComentario() ?></td>
    </tr>
    <tr>
      <th>Usuario fk:</th>
      <td><?php echo $comentario->getUsuarioFK() ?></td>
    </tr>
    <tr>
      <th>Tema fk:</th>
      <td><?php echo $comentario->getTemaFK() ?></td>
    </tr>
    <tr>
      <th>Fecha creacion:</th>
      <td><?php echo $comentario->getFechaCreacion() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $comentario->getFechaActualizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comentario/edit?id_comentario='.$comentario->getIdComentario()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comentario/index') ?>">List</a>
