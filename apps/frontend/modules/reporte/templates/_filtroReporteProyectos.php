
<form action="<?php echo url_for('reporte/filtrarReporteProyectos') ?>">

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

 <?php echo $filter['_csrf_token'] ?><br/>

        <tr>
            <td>
<br/>
                <input type="submit" value="Filtrar" class="button filtrarReporte"  >
<br/>
            </td>
        <tr>
    </table>    
</form>
