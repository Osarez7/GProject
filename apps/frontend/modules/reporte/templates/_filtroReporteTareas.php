
<form action="<?php echo url_for('reporte/filtrarReporteTareas') ?>">

    <table>
        <?php echo $filter ?>

        <tr>
            <td>
                <input type="submit" value="Filtrar" class="button filtrarReporte"  >
            </td>
        <tr>
    </table>    
</form>
