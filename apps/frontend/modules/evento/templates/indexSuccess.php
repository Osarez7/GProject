<h1>Eventos List</h1>

<table>
  <thead>
    <tr>
      <th>Id evento</th>
      <th>Fecha evento</th>
      <th>Nombre evento</th>
      <th>Desc evento</th>
      <th>Proyecto</th>
      <th>Fecha cambio estado</th>
      <th>Fecha actualizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($eventos as $evento): ?>
    <tr>
      <td><a href="<?php echo url_for('evento/show?id_evento='.$evento->getIdEvento()) ?>"><?php echo $evento->getIdEvento() ?></a></td>
      <td><?php echo $evento->getFechaEvento() ?></td>
      <td><?php echo $evento->getNombreEvento() ?></td>
      <td><?php echo $evento->getDescEvento() ?></td>
      <td><?php echo $evento->getProyecto() ?></td>
      <td><?php echo $evento->getFechaCambioEstado() ?></td>
      <td><?php echo $evento->getFechaActualizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('evento/new') ?>">New</a>
  
  
  <div id="calendario-content">
   <?php 
   
     include_partial('evento/mini-calendario', array("calendario" => $calendario, "listaEventos"=>$listaEventos));
   ?>
  
  </div>
