<h1>Avances List</h1>

<table>
  <thead>
    <tr>
      <th>Id avance</th>
      <th>Titulo avance</th>
      <th>Resumen</th>
      <th>Duracion</th>
      <th>Fecha inicio</th>
      <th>Fecha final</th>
      <th>Tarea fk</th>
      <th>Fecha creacion</th>
      <th>Fecha actulizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($avances as $avance): ?>
    <tr>
      <td><a href="<?php echo url_for('avance/edit?id_avance='.$avance->getIdAvance()) ?>"><?php echo $avance->getIdAvance() ?></a></td>
      <td><?php echo $avance->getTituloAvance() ?></td>
      <td><?php echo $avance->getResumen() ?></td>
      <td><?php echo $avance->getDuracion() ?></td>
      <td><?php echo $avance->getFechaInicio() ?></td>
      <td><?php echo $avance->getFechaFinal() ?></td>
      <td><?php echo $avance->getTareaFK() ?></td>
      <td><?php echo $avance->getFechaCreacion() ?></td>
      <td><?php echo $avance->getFechaActulizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('avance/new') ?>">New</a>
