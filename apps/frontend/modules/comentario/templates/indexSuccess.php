<h1>Comentarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id comentario</th>
      <th>Contenido comentario</th>
      <th>Usuario fk</th>
      <th>Tema fk</th>
      <th>Fecha creacion</th>
      <th>Fecha actualizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comentarios as $comentario): ?>
    <tr>
      <td><a href="<?php echo url_for('comentario/show?id_comentario='.$comentario->getIdComentario()) ?>"><?php echo $comentario->getIdComentario() ?></a></td>
      <td><?php echo $comentario->getContenidoComentario() ?></td>
      <td><?php echo $comentario->getUsuarioFK() ?></td>
      <td><?php echo $comentario->getTemaFK() ?></td>
      <td><?php echo $comentario->getFechaCreacion() ?></td>
      <td><?php echo $comentario->getFechaActualizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comentario/new') ?>">New</a>
