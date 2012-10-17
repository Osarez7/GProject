<h1>Prioridads List</h1>

<table>
  <thead>
    <tr>
      <th>Id prioridad</th>
      <th>Nombre prioridad</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($prioridads as $prioridad): ?>
    <tr>
      <td><a href="<?php echo url_for('prioridad/show?id_prioridad='.$prioridad->getIdPrioridad()) ?>"><?php echo $prioridad->getIdPrioridad() ?></a></td>
      <td><?php echo $prioridad->getNombrePrioridad() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('prioridad/new') ?>">New</a>
