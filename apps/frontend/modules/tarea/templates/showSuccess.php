<table>
  <tbody>
    <tr>
      <th>Id tarea:</th>
      <td><?php echo $tarea->getIdTarea() ?></td>
    </tr>
    <tr>
      <th>Nombre tarea:</th>
      <td><?php echo $tarea->getNombreTarea() ?></td>
    </tr>
    <tr>
      <th>Fecha de Inicio:</th>
      <td><?php echo $tarea->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha de Fin:</th>
      <td><?php echo $tarea->getFechaFinal() ?></td>
    </tr>
    <tr>
      <th>Status</th>
      <td><?php echo $tarea->getStatus() ?></td>
    </tr>
    <tr>
      <th>Prioridad :</th>
      <td><?php echo $tarea->getPrioridad() ?></td>
    </tr>
 
  </tbody>
</table>

<hr />


<div class="content-info">
    <?php include_partial('avance/list',array('avances' =>$avances,"tarea"=>$tarea)); ?>
</div>
