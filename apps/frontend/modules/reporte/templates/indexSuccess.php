<?php use_javascript('reportes.scripts/inicializarReportes.js') ?>

<?php use_helper('Date') ?>
<h1>Reportes</h1>

 <div class="button-group">


                        <?php
                          echo link_to('Reporte Proyectos', 'reporte/reporteProyectos', array('class' => 'button primary  pill reporteButton'))
                        ?>

                         <?php
                          echo link_to('Reporte Tareas', 'reporte/reporteTareas', array('class' => 'button  pill reporteButton'))
                        ?>

     
                           <?php
//                          echo link_to('Reporte Participantes', 'reporte/reporteParticipantes', array('class' => 'button  pill reporteButton'))
                        ?>

    
</div>
<br/><br/>
<div id="filter-content">
         <?php include_partial('reporte/filtroReporteProyectos', array('filter' =>  $filter)); ?>
    
</div>

<br/>

<div id="resultado-reporte">
    
<!--    <div>
      fitro usuarios , por proyectos ,todos los proyectos , entre una fecha y otra fecha, opcional por nombre o correo electronico
      por nick,    contar tareas terminadas , todas las tareas , ....
    <div>
        
        
    <div>
      filtros tareas , por prioridad , por estado  ,  un ragon de horas estimadas , por numero de usuarios ,
      
    <div>-->
    
    
</div>
