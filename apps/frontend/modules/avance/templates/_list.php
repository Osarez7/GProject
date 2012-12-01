<h1>Avances </h1>

<?php if($avances): ?>

<table>
  <thead>
    <tr>
      <th>Titulo avance</th>
      <th>Resumen</th>
     <th>Fecha inicio</th>
      <th>Fecha final</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($avances as $avance): ?>
    <tr>
      <td><?php echo $avance->getTituloAvance() ?></td>
      <td><?php echo $avance->getResumen() ?></td>
      <td><?php echo  date('Y-m-d H:i', strtotime($avance->getFechaInicio())) ?></td>
      <td><?php echo date('Y-m-d H:i', strtotime($avance->getFechaFinal())) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php else: ?>

<p>No se han registrado avances</p>

<?php endif; ?>


  <a class="button icion add dialogLink" href="<?php echo url_for('nuevo_avance',array('idTarea' => $tarea->getIdTarea())) ?>">Nuevo Avance</a>

