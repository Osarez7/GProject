<?php use_stylesheet('openlayers-themes/default/style.css') ?>
<?php use_stylesheet('mapa.styles/mapa.index.css') ?>
<?php use_stylesheet('mapa.styles/mapa.index.css') ?>
<?php use_javascript("OpenLayers.js") ?>


<script type="text/javascript">

    var url_index_map = "<?php echo url_for('index_mapa', array('sf_format' => 'json', 'idProyecto' => $idProyecto)) ?>";
    var url_show_map = "<?php echo url_for('map/show?id_mapa=data') ?>";
    var url_index_lugares = "<?php echo url_for('index_lugar', array('sf_format' => 'json', 'idMapa' => "data")) ?>"
</script>

<?php use_javascript('mapa.scripts/mapaIndex.js') ?>




<div id="content-mapa-list">

    <h1>Mapas </h1>
    <select id="slct-mapas">
        <option value ="0"> -- Seleccione un mapa -</option>
        <?php foreach ($mapas as $mapa): ?>
            <option value = "<?php echo $mapa->getIdMapa() ?>"> <?php echo $mapa->getNombreMapa() . ',' . $mapa->getIdMapa() ?></option> 
            </tr>
        <?php endforeach; ?>
    </select>

</div>  


<div id="content-mapas-info">


    <div class="content-map">

        <div  id='mapa-index'>
            <div  id='panel_div' style="display:none">
                <input type="button"  class="button" value="Adicionar" onclick="toggleControl('drawCtrl')" />
                <input type="button" class="button" value="Eliminar" onclick="toggleSelected('deleteTrigger')"/>         
                <input type="button"  class="button" value="Mover" onclick="toggleControl('dragCtrl')" />
            </div>

        </div>
    </div>

    <div id="lista-lugares" >
        <p></p>

    </div>  

</div> 

<a id="btn-nuevo-mapa" class="button icon add dialogLink" href="<?php echo url_for('map/new') . '?idProyecto=' . $idProyecto ?>">Nuevo Mapa</a>




