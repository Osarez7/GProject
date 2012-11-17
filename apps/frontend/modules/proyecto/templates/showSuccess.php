<?php use_javascript("treeTable.js") ?>
<?php use_javascript("myTreeTable.js") ?>
<?php use_javascript("myTreeTableDrop.js") ?>
<?php use_stylesheet("treeTable.css") ?>



  <div id="lateral" style="display:none;">
                <?php if (has_slot("menu_lateral")): ?>
                    <?php include_slot("menu_lateral"); ?>

                <?php endif; ?>

                <?php // include_component('evento', 'calendarioUsuario') ?>
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
    <?php include_partial('tarea/list',array('arbolTarea' =>$arbolTarea, 'proyecto' => $proyecto)); ?>
</div>


<?php    slot('menu_lateral') ?>
    <?php include_partial('proyecto/menu-lateral-proyecto',array('proyecto' => $proyecto)) ?>
<?php    end_slot(); ?>




