
<h1>Arb&oacute;l de Tareas (Nested)</h1>



<?php foreach ($arbolTarea as $node): ?>
<li> <?php  echo str_repeat('&nbsp;&nbsp;', $node['level']) . $node['nombreTarea'] . "\n"; ?> </li>
 
<?php endforeach; ?>

