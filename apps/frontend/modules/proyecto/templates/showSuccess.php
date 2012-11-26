<?php /* use_javascript("treeTable.js") ?>
<?php use_javascript("myTreeTable.js") ?>
<?php use_javascript("myTreeTableDrop.js") ?>
<?php use_stylesheet("treeTable.css")*/?>

<?php use_javascript("/js/jQuery.Gantt-master/js/dataDays.js") ?>
<?php use_javascript("/js/jQuery.Gantt-master/js/dataHours.js") ?>
<?php use_javascript("/js/jQuery.Gantt-master/js/dataDaysEnh.js") ?>
<?php use_javascript("/js/jQuery.Gantt-master/js/jquery.cookie.js") ?>
<?php use_javascript("/js/jQuery.Gantt-master/js/jquery.fn.gantt.js") ?>
<?php use_javascript("/js/jQuery.Gantt-master/js/jquery.cookie.js") ?>
<?php use_javascript("/js/jQuery.Gantt-master/js/jquery.fn.gantt.js") ?>
<?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js") ?>
<?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js") ?>
<?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js") ?>
<?php use_javascript("http://taitems.github.com/UX-Lab/core/js/prettify.js")  ?>


<?php use_javascript("tarea.scripts/inicializarTareas.js")  ?>

<?/*php  use_javascript("/js/jQueryGantt/libs/jquery.livequery.min.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/jquery.timers.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/platform.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/date.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/i18nJs.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/dateField/jquery.dateField.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/JST/jquery.JST.js") ?>

<?php  use_javascript("/js/jQueryGantt/ganttUtilities.js") ?>
<?php  use_javascript("/js/jQueryGantt/ganttTask.js") ?>
<?php  use_javascript("/js/jQueryGantt/ganttDrawer.js") ?>
<?php  use_javascript("/js/jQueryGantt/ganttGridEditor.js") ?>
<?php  use_javascript("/js/jQueryGantt/ganttMaster.js") ?>

<?php  use_javascript("tareas") ?>

<?php use_stylesheet("/js/jQueryGantt/platform.css")?>
<?php use_stylesheet("/js/jQueryGantt/libs/dateField/jquery.dateField.css")?>
<?php use_stylesheet("/js/jQueryGantt/gantt.css")*/?>
  


<?php use_stylesheet("jQuery.Gantt-master/style.css")?>
<?php use_stylesheet("http://twitter.github.com/bootstrap/assets/css/bootstrap.css")?>
<?php use_stylesheet("http://taitems.github.com/UX-Lab/core/css/prettify.css") ?>
       
  <div id="lateral" style="display:none;">
                <?php if (has_slot("menu_lateral")): ?>
                    <?php include_slot("menu_lateral"); ?>

                <?php endif; ?>

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


 <?php echo link_to('Calendario', 'evento/index?idProyecto='.$proyecto->getIdProyecto(), array('class' => 'button  icon  calendar'))
                        ?>



<div class="content-info">
    <?php include_partial('tarea/list',array('arbolTarea' =>$arbolTarea, 'proyecto' => $proyecto)); ?>
</div>


<div class="gantt">
</div>


  <a href="<?php echo url_for('tarea/new') ?>">New</a>


 <a  class="button" href="<?php echo url_for('tarea/gantt') ?>?idProyecto=<?php echo $proyecto->getIdProyecto(); ?>">Gantt</a>


  


<?php    slot('menu_lateral') ?>
    <?php include_partial('proyecto/menu-lateral-proyecto',array('proyecto' => $proyecto)) ?>
<?php    end_slot(); ?>




