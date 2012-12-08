<?php /* use_javascript("treeTable.js") ?>
<?php use_javascript("myTreeTable.js") ?>
<?php use_javascript("myTreeTableDrop.js") ?>
<?php use_stylesheet("treeTable.css")*/?>

    
<?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js") ?>
<?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js") ?>
<?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js") ?>
<?php use_javascript("http://taitems.github.com/UX-Lab/core/js/prettify.js")  ?>


<?php use_javascript("tarea.scripts/inicializarTareas.js")  ?>

<?php /* use_javascript("/js/jQueryGantt/libs/jquery.livequery.min.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/jquery.timers.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/platform.js") ?>
<?php  use_javascript("/js/jQueryGantt/libs/date.js") */?>

     



<?php use_javascript("lib/tree.table/treeTable.js") ?>
<?php use_javascript("lib/tree.table/treeTable.js") ?>
<?php use_javascript("lib/tree.table/treeTable.js") ?>
<?php use_stylesheet("treeTable.css") ?>
<?php use_javascript("tarea.scripts/ganttTareas.js") ?>

<?php use_helper('Date') ?>
    
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


 <?php echo link_to('Mapas', 'map/index?idProyecto='.$proyecto->getIdProyecto(), array('class' => 'button  icon  pin'))
                        ?>





<br/><br/>

<div id="content-left-gantt"> 
    
    <div id="wrapper-left-gantt"> 
    <table id="table-tareas" class="gantt-table listado">
                
                        <thead> 
                            <tr>
                                <th class="celda-inicial">Tarea</th>
                                <th>Acciones</th>
                                <th>Fecha Inicial</th>   
                                <th class="celda-final">Fecha Final</th> 
                            </tr>
                        </thead>


    <?php include_partial('tarea/tableGantt',array('arbolTarea' =>$proyecto->getArbolTareas(), 'proyecto' => $proyecto , 'parent' => '0')); ?>
       </table>
 </div>
</div>


<br/>

<p>Convensiones<p>

<table class="convensiones-table">
    <tr>
        <td><img src="/images/raster/green/eye_12x9.png" alt="Ver detalles " /> Ver detalles</td>
        <td><img src="/images/raster/orange/pen_12x12.png" alt="Editar" /> Editar</td>
        <td><img src="/images/raster/blue/target_12x12.png" alt="Asignar" /> Asignar </td>
        <td><img src="/images/raster/magenta/fork_11x12.png" alt="Nueva Sub Tarea" /> Nueva Sub Tarea</td>
    </tr>
</table>



  <a  class="button icon add dialogLink" href="<?php echo url_for('tarea/new') ?>">Nueva Tarea</a>


<?php    slot('menu_lateral') ?>
    <?php include_partial('proyecto/menu-lateral-proyecto',array('proyecto' => $proyecto)) ?>
<?php    end_slot(); ?>




