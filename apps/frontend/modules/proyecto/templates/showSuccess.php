


<? /* php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js") ?>
  <?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js") ?>
  <?php use_javascript("http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js") ?>
  <?php use_javascript("http://taitems.github.com/UX-Lab/core/js/prettify.js") */ ?>



<?php use_javascript("lib/tree.table/treeTable.js") ?>
<?php use_stylesheet("treeTable.css") ?>
<?php use_javascript("tarea.scripts/inicializarTareas.js") ?>
<?php use_javascript("tarea.scripts/ganttTareas.js") ?>

<?php /* use_javascript("/js/jQueryGantt/libs/jquery.livequery.min.js") ?>
  <?php  use_javascript("/js/jQueryGantt/libs/jquery.timers.js") ?>
  <?php  use_javascript("/js/jQueryGantt/libs/platform.js") ?>
  <?php  use_javascript("/js/jQueryGantt/libs/date.js") */ ?>





<?php use_javascript("lib/tree.table/treeTable.js") ?>


<?php use_helper('Date') ?>

<div id="lateral" style="display:none;">
    <?php if (has_slot("menu_lateral")): ?>
        <?php include_slot("menu_lateral"); ?>

    <?php endif; ?>

</div>

<div class="content-info">
    <h1><?php echo $proyecto->getNombre() ?></h1>
    <span id="control-detalles"> Ver detalles</span>
    <div id="detalle-proyecto-content">
        <label> Descripción del proyecto: </labe> <br/>
            <?php echo $proyecto->getDescProyecto() ?>

            <table>
                <tr>
                    <td>
                        <label>  Estado: </label>  <?php echo $proyecto->getStatus() ?>
                    </td>
                    <td>
                        <label>  Prioridad :  </label> <?php echo $proyecto->getPrioridad() ?>
                    </td>
                </tr>
            </table>

    </div>
    
</div>


<?php echo link_to('Calendario', 'evento/index?idProyecto=' . $proyecto->getIdProyecto(), array('class' => 'button  icon  calendar'))
?>


<?php echo link_to('Mapas', 'map/index?idProyecto=' . $proyecto->getIdProyecto(), array('class' => 'button  icon  pin'))
?>





<br/><br/>

<div id="content-left-gantt"> 

    <div id="wrapper-left-gantt"> 
        <table id="table-tareas" class="gantt-table list">

            <thead> 
                <tr>
                    <th >Tarea</th>
                    <th>Acciones</th>
                    <th>Fecha Inicial</th>   
                    <th>Fecha Final</th> 
                </tr>
            </thead>


            <?php include_partial('tarea/tableGantt', array('arbolTarea' => $proyecto->getArbolTareas(), 'proyecto' => $proyecto, 'parent' => '0')); ?>

            <tfoot>

            </tfoot>

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



<a  class="button icon add dialogLink" href="<?php echo url_for('tarea/new?idProyecto=' . $proyecto->getIdProyecto()) ?>">Nueva Tarea</a>


<?php slot('menu_lateral') ?>
<?php include_partial('proyecto/menu-lateral-proyecto', array('proyecto' => $proyecto)) ?>
<?php end_slot(); ?>




