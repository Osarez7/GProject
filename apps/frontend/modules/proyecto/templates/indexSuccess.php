


<div id="mi-lista-proyectos">
     
                    <div class="flash_error"><?php echo $sf_user->getFlash('prueba'); ?></div>
              
    <h1>Proyectos List</h1>
    <input type="button"  value="LLamar Ajax" onclick="javascript:tareasAJax(); "   />
<div id="mi-nueva-lista"
    <table class="lista">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tiempo estimado</th>
                <th>Status pk</th>
                <th>Prioridad pk</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
            <td><a href="<?php echo url_for('proyecto/show?id_proyecto=' . $proyecto->getIdProyecto()) ?>"><?php echo $proyecto->getNombre() ?></a></td>
            <td><?php echo $proyecto->getTiempoEstimado() ?></td>
            <td><?php echo $proyecto->getStatusPK() ?></td>
            <td><?php echo $proyecto->getPrioridadPK() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <a href="<?php echo url_for('proyecto/new') ?>">New</a>


    <div id="resultado-ajax">

    </div>

    


    <div id="wait-icon" style="display:none">
        <img src=" /images/ajax-loader.gif" alt="" />
    </div>

    <div>
