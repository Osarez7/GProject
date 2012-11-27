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
<select id="slct-mapas">
    <option value ="0"> -- Seleccione un mapa -</option>
    <?php foreach ($mapas as $mapa): ?>
    <option value = "<?php $mapa->getIdMapa()?>"> <?php echo $mapa->getNombreMapa() ?></option> 
    </tr>
    <?php endforeach; ?>
</select>

</div>  
 

<div class="content-map" id='mapa'></div>

<a id="btn-nuevo-mapa" class="button icon add dialogLink" href="<?php echo url_for('map/new').'?idProyecto='.$idProyecto ?>">Nuevo Mapa</a>


<a  class= "button icon ver dialogLink" href="<?php echo url_for('map/show?id_mapa=data') ?>">Ver Detalles</a>