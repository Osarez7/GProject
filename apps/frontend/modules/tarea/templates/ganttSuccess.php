
<?php /* Librerias gantt.jquery */ ?>
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
<?php use_javascript("http://taitems.github.com/UX-Lab/core/js/prettify.js") ?>
<?php use_stylesheet("jQuery.Gantt-master/style.css") ?>
<?php use_stylesheet("http://twitter.github.com/bootstrap/assets/css/bootstrap.css") ?>
<?php use_stylesheet("http://taitems.github.com/UX-Lab/core/css/prettify.css") ?>
<?php /* Fin Librerias gantt.jquery */ ?>


<?php use_javascript("jquery.treeview/jquery.treeview.js") ?>
<?php use_javascript("jquery.treeview/jquery.treeview.edit.js") ?>
<?php use_javascript("jquery.treeview/jquery.treeview.async.js") ?>
<?php use_javascript("jquery.treeview/jquery.treeview.sortable.js") ?>
<?php use_stylesheet("jquery.treeview/jquery.treeview.css") ?>

<?php use_javascript("lib/jquery-context-menu/jquery.context.menu.js") ?>


<?php use_stylesheet("lib/jquery.context.menu/jquery.context.menu.css") ?>



<?php use_javascript("tarea.scripts/ganttTareas.js") ?>
<?php use_javascript("tarea.scripts/tareas.context.menu.js") ?>

<?php use_helper('Debug') ?>



<div class="content-info">

    <h1>Tareas</h1>
    <div class="content-gantt-left"> 

        <ul id="listaArbol" class="filetree">

            <?php include_partial('tarea/tree', array('arbolTarea' => $arbolTarea)); ?>
        </ul>
    </div>

    <div class="content-gantt-right">

        <table>
            <?php include_partial('tarea/tableGantt', array('arbolTarea' => $arbolTarea)); ?>
        </table>

    </div>


    <div class="gantt"> </div>
