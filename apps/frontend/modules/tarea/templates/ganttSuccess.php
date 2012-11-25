
<?php use_javascript("lib/jquery-context-menu/jquery.context.menu.js") ?>
<?php use_stylesheet("lib/jquery.context.menu/jquery.context.menu.css") ?>


<?php use_javascript("lib/tree.table/treeTable.js") ?>
<?php use_javascript("lib/tree.table/treeTable.js") ?>
<?php use_javascript("lib/tree.table/treeTable.js") ?>
<?php use_stylesheet("treeTable.css") ?>
<?php use_javascript("lib/jquery.fixedtable/jquery.fixedtable.js") ?>
<?php use_javascript("tarea.scripts/ganttTareas.js") ?>
<?php use_javascript("tarea.scripts/tareas.context.menu.js") ?>
<?php use_javascript("tarea.scripts/tareas.fixed.table.js") ?>
<?php use_javascript("prueba.js") ?>

<?php use_helper('Date') ?>


<div class="content-info">


    <h1>Tareas</h1>

    <div class="panel-gantt"> 

        <div class="content-gantt-left "> 

            <table id="table-tareas" class="listado fixed gantt-table">
                <col class="grupo-uno" />
                <col  span="3"/>
                <thead> 
                    <tr>

                        <th>Tarea</th>
                        <th>Acciones</th>
                        <th>Fecha Inicial</th>   
                        <th>Fecha Final</th> 
                    </tr>
                </thead>
                <?php include_partial('tarea/tableGantt', array('arbolTarea' => $arbolTarea, 'proyecto' => $proyecto, 'parent' => "0")); ?>
            </table>
        </div>

        <div class="content-gantt-right">
            <table class="listado fixed gantt-table">

                <thead> 
                    <tr>

                        <th>Enero</th>
                        <th>Febrero</th>
                        <th>Marzo</th>   
                        <th>Abril</th> 
                    </tr>
                </thead>
                <?php include_partial('tarea/tableGanttDays', array('arbolTarea' => $arbolTarea, 'proyecto' => $proyecto, 'parent' => "0")); ?>
            </table>


        </div>


    </div>

</div>





<div id="main">
<div id="content-slider"></div>
<div id="content-scroll">
  <div id="content-holder">
    <div class="content-item">
    </div>
    <div class="content-item">
    </div>
    <div class="content-item">
    </div>
    <div class="content-item">
    </div>
    <div class="content-item">
    </div>
  </div>
</div>
</div>









    <div class="gantt"> </div>
