<?php use_javascript("treeTable.js") ?>
<?php use_javascript("myTreeTable.js") ?>
<?php use_stylesheet("treeTable.css") ?>


<h1>Arb&oacute;l de Tareas</h1>

<table id="tbl-tareas">
  <thead>
    <tr>
      <th>Nombre tarea</th>
      <th>Duracion</th>
      <th>Status pk</th>
      <th>Prioridad pk</th>
      <th>Grupo pk</th>
      <th>Proyecto pk</th>
      <th>Tar fecha creacion</th>
      <th>Tar fecha actulizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tareas as $key=>$tarea): ?>
    <tr id="<?php echo "node-".($key+1); ?>"  <?php  if(($key) % 2 != 0) { echo "class='child-of-node-".$key."'";} ?>>
     
      <td><?php echo $tarea->getNombreTarea() ?></td>
      <td><?php echo $tarea->getDuracion() ?></td>
      <td><?php echo $tarea->getStatusPK() ?></td>
      <td><?php echo $tarea->getPrioridadPK() ?></td>
      <td><?php echo $tarea->getGrupoPK() ?></td>
      <td><?php echo $tarea->getProyectoPK() ?></td>
      <td><?php echo $tarea->getTarFechaCreacion() ?></td>
      <td><?php echo $tarea->getTarFechaActulizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tarea/new') ?>">New</a>
