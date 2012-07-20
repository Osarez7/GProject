<h1>Statuss List</h1>

<table>
  <thead>
    <tr>
      <th>Id status</th>
      <th>Nombre status</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($statuss as $status): ?>
    <tr>
      <td><a href="<?php echo url_for('status/show?id_status='.$status->getIdStatus()) ?>"><?php echo $status->getIdStatus() ?></a></td>
      <td><?php echo $status->getNombreStatus() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('status/new') ?>">New</a>
