<h1>Lugares</h1>

<table>
  <thead>
    <tr>
      <th>Titulo lugar</th>
      <th>Info lugar</th>
      <th>Latitud</th>
      <th>Longitud</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($lugares as $lugar): ?>
    <tr>
      <td><?php echo $lugar->getTituloLugar() ?></td>
      <td><?php echo $lugar->getInfoLugar() ?></td>
      <td><?php echo $lugar->getLatitud() ?></td>
      <td><?php echo $lugar->getLongitud() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
