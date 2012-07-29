

<table id="tabla-carga" onload="tareasAJax();">
 <tr>
     <th>Nombre <th>
 </tr>

</table>






<?php


foreach ($proyectos as $proyecto) {
    
    echo "<tr><td>".$proyecto->getIdProyecto()."</tr></td> </br>" ;
}
            ?>