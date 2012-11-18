<h1>Temas List</h1>

<table>
  <thead>
    <tr>
      <th>Id tema</th>
      <th>Titulo tema</th>
      <th>Proyecto fk</th>
      <th>Usuario fk</th>
      <th>Fecha creacion</th>
      <th>Fecha actualizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($temas as $tema): ?>
    <tr>
      <td><a href="<?php echo url_for('tema/show?id_tema='.$tema->getIdTema()) ?>"><?php echo $tema->getIdTema() ?></a></td>
      <td><?php echo $tema->getTituloTema() ?></td>
      <td><?php echo $tema->getProyectoFK() ?></td>
      <td><?php echo $tema->getUsuarioFK() ?></td>
      <td><?php echo $tema->getFechaCreacion() ?></td>
      <td><?php echo $tema->getFechaActualizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tema/new') ?>">New</a>
