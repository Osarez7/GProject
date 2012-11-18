<?php use_javascript("usuarios.js") ?>

<h1>Lista de Usuarios</h1>

<div id="filtro">

<?php echo $filtroUsuarios ?>
</div>

<br/>

<div id="lista-usuarios">
 <?php include_partial('usuario/list', array('usuarios' => $pager->getResults())) ?>
  
  
<div>



<?php if ($pager->haveToPaginate()): ?>
  <div class="pagination">
    <a href="<?php echo url_for('usuario/index') ?>?page=1">
<img src="/images/first.png"
alt="Inicio" title="Inicio" />
</a>
<a href="<?php echo url_for('usuario/index') ?>?page=<?php echo
$pager->getPreviousPage() ?>">
<img src="/images/previous.png"
alt="Previous page" title="Previous page" />
</a>

<?php foreach ($pager->getLinks() as $page): ?>
<?php if ($page == $pager->getPage()): ?>
<?php echo $page ?>
<?php else: ?>
<a href="<?php echo url_for('usuario/index') ?>?page=<?php
echo $page ?>"><?php echo $page ?></a>
<?php endif; ?>
<?php endforeach; ?>

<a href="<?php echo url_for('usuario/index') ?>?page=<?php echo
$pager->getNextPage() ?>">
<img src="/images/next.png" alt="Next
page" title="Next page" />
</a>
<a href="<?php echo url_for('usuario/index') ?>?page=<?php echo
$pager->getLastPage() ?>">
<img src="/images/last.png" alt="Last
page" title="Última Pagina" />
</a>
</div>
<?php endif; ?>

<div class="pagination_desc">
<strong><?php echo count($pager) ?></strong> resultados
<?php if ($pager->haveToPaginate()): ?>
 Pagina <strong><?php echo $pager->getPage() ?>  de <?php echo
$pager->getLastPage() ?></strong>
<?php endif; ?>
</div>



  <a  class="button" href="<?php echo url_for('usuario/new') ?>">Nuevo Usuario</a>
