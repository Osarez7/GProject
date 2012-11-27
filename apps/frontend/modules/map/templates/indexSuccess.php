<?php use_stylesheet('openlayers-themes/default/style.css') ?>
<?php use_stylesheet('mapa.styles/mapa.index.css') ?>
<?php use_stylesheet('mapa.styles/mapa.index.css') ?>
<?php use_javascript("OpenLayers.js") ?>


<script type="text/javascript">

 var url_index_map = "<?php echo url_for('index_mapa', array('sf_format' => 'json','idProyecto' => $idProyecto)) ?>";
 

</script>

<?php use_javascript('mapa.scripts/inicializarMapa.js') ?>



<div id="content-mapa-list">
<h1>Mapas </h1>

<table>
  <thead>
    <tr>
      <th>Id mapa</th>
      <th>Nombre mapa</th>
      <th>Desc mapa</th>
      <th>Proyecto fk</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mapas as $mapa): ?>
    <tr>
      <td><a href="<?php echo url_for('map/show?id_mapa='.$mapa->getIdMapa()) ?>"><?php echo $mapa->getIdMapa() ?></a></td>
      <td><?php echo $mapa->getNombreMapa() ?></td>
      <td><?php echo $mapa->getDescMapa() ?></td>
      <td><?php echo $mapa->getProyectoFK() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>  
 
    <div class="content-map" id='mapa'></div>

<a id="btn-nuevo-mapa" class="button icon add dialogLink" href="<?php echo url_for('map/new').'?idProyecto='.$idProyecto ?>">Nuevo Mapa</a>
