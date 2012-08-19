<?php use_javascript("treeTable.js") ?>
<?php use_javascript("myTreeTable.js") ?>
<?php use_javascript("myTreeTableDrop.js") ?>
<?php use_stylesheet("treeTable.css") ?>



 <div class="button-group">
  
  
   <?php echo link_to('Editar', 'proyecto/edit?id_proyecto='.$proyecto->getIdProyecto(),
      array('class' => 'button primary icon edit')) 
    ?>
    
  <?php echo link_to('Participantes', 'usuario/index',
      array('class' => 'button icon user')) 
    ?>
    
    
     <?php echo link_to('Volver a lista', 'proyecto/index',
      array('class' => 'button icon back')) 
    ?>
    
  
    
</div>
<div class="content-info">
    <h1><?php echo $proyecto->getNombre() ?></h1>
      
<table class="tbl-show">
  <tbody>
    <tr>
      <th>Desc proyecto:</th>
      <td><?php echo $proyecto->getDescProyecto() ?></td>
    </tr>
    <tr>
      <th>Status :</th>
      <td><?php echo $proyecto->getStatus() ?></td>
    </tr>
    <tr>
      <th>Prioridad :</th>
      <td><?php echo $proyecto->getPrioridad() ?></td>
    </tr>
  </tbody>
</table>
  
  

</div>

<div class="content-info">
    <?php include_partial('tarea/list',array('arbolTarea' =>$arbolTarea)); ?>
</div>




