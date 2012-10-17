<?php use_stylesheet('openlayers-themes/default/style.css') ?>

<h1>Mapas </h1>

<table>
  <thead>
    <tr>
      <th>Id mapa</th>
      <th>Nombre mapa</th>
      <th>Desc mapa</th>
      <th>Proyecto fk</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mapas as $mapa): ?>
    <tr>
      <td><a href="<?php echo url_for('map/show?id_mapa='.$mapa->getIdMapa()) ?>"><?php echo $mapa->getIdMapa() ?></a></td>
      <td><?php echo $mapa->getNombreMapa() ?></td>
      <td><?php echo $mapa->getDescMapa() ?></td>
      <td><?php echo $mapa->getProyectoFK() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('map/new') ?>">New</a>
  
  
  
 
    <div id='mapa' style='width: 500px; height: 500px;'></div>
    <div id='mapa2' style='width: 500px; height: 500px;'></div>

