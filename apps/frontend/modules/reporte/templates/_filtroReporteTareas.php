
<form action="<?php echo url_for('reporte/filtrarReporteTareas') ?>">

    <table>

  <?php echo $filter['fechaInicio']->renderLabel() ?>: <br/>
    <?php echo $filter['fechaInicio']->renderError() ?>
    <?php echo $filter['fechaInicio'] ?><br/>


   <?php echo $filter['fechaFinal']->renderLabel() ?>: <br/>
    <?php echo $filter['fechaFinal']->renderError() ?>
    <?php echo $filter['fechaFinal'] ?><br/>

   <?php echo $filter['statusFK']->renderLabel() ?>: <br/>
    <?php echo $filter['statusFK']->renderError() ?>
    <?php echo $filter['statusFK'] ?> <br/>


   <?php echo $filter['prioridadFK']->renderLabel() ?>: <br/>
    <?php echo $filter['prioridadFK']->renderError() ?>
    <?php echo $filter['prioridadFK'] ?><br/>

<?php echo $filter['proyectoFK']->renderLabel() ?>: <br/>
    <?php echo $filter['proyectoFK']->renderError() ?>
    <?php echo $filter['proyectoFK'] ?><br/>

<?php echo $filter['usuario_list']->renderLabel() ?>: <br/>
    <?php echo $filter['usuario_list']->renderError() ?>
    <?php echo $filter['usuario_list'] ?><br/>

    <?php echo $filter['_csrf_token'] ?><br/>

        <tr>
            <td>
<br/>
                <input type="submit" value="Filtrar" class="button filtrarReporte"  >
            </td>
        <tr>
    </table>    
</form>
