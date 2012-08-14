<?php use_javascript("treeTable.js") ?>
<?php use_javascript("myTreeTable.js") ?>
<?php use_javascript("myTreeTableDrop.js") ?>
<?php use_stylesheet("treeTable.css") ?>


<h1><?php echo $proyecto->getNombre() ?></h1>

<div class="content-info">
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
    <?php echo button_to('Editar','proyecto/edit?id_proyecto='.$proyecto->getIdProyecto()) ?>
&nbsp;
<?php echo button_to('Volver a lista','proyecto/index') ?>
<?php echo button_to('Participantes','proyecto/index') ?>
  <span class="ui-icon ui-icon-arrowthick-1-s"></span>Da click

  
  <a class="button" href="<?php echo url_for('usuario/index')?>">
   <span class="icon-button  ui-icon-person">&nbsp;&nbsp;&nbsp;&nbsp;</span>
    Participantes
</a>    

</div>



<div class="content-info">
    <?php include_partial('tarea/list',array('arbolTarea' =>$arbolTarea)); ?>
</div>




