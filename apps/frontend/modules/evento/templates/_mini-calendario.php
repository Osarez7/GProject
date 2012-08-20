 
<table border='1' cellpadding='3' cellspacing='0'>
    <tr>
        <td colspan="2"><input type="button" value="Anterior" onclick="javascript:cambiarMes('<?php echo  $calendario->an  ?>','<?php echo  $calendario->me  ?>','anterior','<?php echo url_for('evento/cambiarMes') ?>');"></td>
        <td colspan='3' align='center'><?php echo $calendario->meses[$calendario->me]; ?> </td>  
        <td colspan="2"><input type="button" value="Siguiente" onclick="javascript:cambiarMes('<?php echo  $calendario->an  ?>','<?php echo  $calendario->me  ?>','siguiente','<?php echo url_for('evento/cambiarMes')?>');"></td>
      
    </tr
    <tr>
        <td align='center'>D</td>  
        <td align='center'>L</td>  
        <td align='center'>M</td>  
        <td align='center'>M</td>  
        <td align='center'>J</td>  
        <td align='center'>V</td>  
        <td align='center'>S</td>
    </tr> 


    <?php
    /*

      echo "<table border='1' cellpadding='3' cellspacing='0'>\n";
      echo "<tr>";
      echo "<td colspan='7' align='center'>".$calendario->meses[$calendario->me]."</td>";
      echo "</tr>\n";
      echo "<tr><td align='center'>D</td>";
      echo "<td align='center'>L</td>";
      echo "<td align='center'>M</td>";
      echo "<td align='center'>M</td>";
      echo "<td align='center'>J</td>";
      echo "<td align='center'>V</td>";
      echo "<td align='center'>S</td></tr>\n";


     */
    if ($calendario->diaSemana != 0) {
        echo "<tr>";
        for ($i = 0; $i < $calendario->diaSemana; $i++) {
            echo "<td> </td>";
        }
    }

    
    
    for ($i = 1; $i <= $calendario->diaMes; $i++) {

        $calendario->diaSemana = date("w", mktime(0, 0, 0, $calendario->me, $i, $calendario->an));
        if ($calendario->diaSemana == 0) {
            echo "</tr><tr>";
        }
        ?> 


        <?php if (in_array($i, $sf_data->getRaw('listaEventos'))): ?>

            <td align='center' class='has-evento'>
                <a href="<?php echo url_for('evento/new') ?>">
                    <?php echo $i ?>
                </a>
            </td> 

        <?php else: ?>
            <td align='center'> <?php echo $i ?> </td>  

        <?php endif; ?>   



        <?php
        if ($calendario->diaSemana == 6) {
            echo "</tr>\n";
           }
    }



    for ($i = $calendario->diaSemana; $i < 6; $i++) {
        echo "<td></td> ";
    }
    
     echo "</tr> ";
    ?>


</table>



