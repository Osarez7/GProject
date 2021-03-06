<?php use_stylesheet('openlayers-themes/default/style.css') ?>
<?php use_stylesheet('mapa.styles/mapa.index.css') ?>
<?php use_javascript("OpenLayers.js") ?>
<?php use_javascript("lib/jquery.tineyscrollbar/jquery.tinyscrollbar.js") ?>


<script type="text/javascript">

    var url_index_map = "<?php echo url_for('index_mapa', array('sf_format' => 'json', 'idProyecto' => $proyecto->getIdProyecto())) ?>";
    var url_show_map = "<?php echo url_for('map/show?id_mapa=data') ?>";
    var url_index_lugares = "<?php echo url_for('index_lugar', array('sf_format' => 'json', 'idMapa' => "data")) ?>"
    var url_for_edit_place = "<?php echo url_for('lugar/edit?id_lugar=dataLugar') ?>";
    var url_for_move_place = "<?php echo url_for('lugar/move?id_lugar=dataLugar&lon=dataLon&lat=dataLat') ?>";
    var url_for_create_place = "<?php echo url_for('lugar/new?id_lugar=dataLugar&lon=dataLon&lat=dataLat') ?>";
</script>

<?php use_javascript('mapa.scripts/mapaIndex.js') ?>



<h1>Mapas de <?php echo $proyecto->getNombre()?></h1>

<div id="content-mapa-list">


    <div id="map-control-content">

        <select id="slct-mapas">
            <option value ="0" class="default-selected"> -- Seleccione un mapa -</option>
            <?php foreach ($mapas as $mapa): ?>
                <option value = "<?php echo $mapa->getIdMapa() ?>"> <?php echo $mapa->getNombreMapa() ?></option> 
                
            <?php endforeach; ?>
        </select>


        <div style="display:none" id='panel_div' class="button-group ">
            <input type="button"  class="button" value="Adicionar" onclick="toggleControl('drawCtrl',this)" />
            <input type="button"  class="button" value="Mover" onclick="toggleControl('dragCtrl',this)" />
            <input type="button"  class="button " value="Editar" onclick="toggleControl('selectCtrl',this)"/>         
        </div>
        
       
    </div>






    <div id="content-mapas-info">


        <div class="content-map">

            <div  id='mapa-index'>


            </div>
        </div>

        <div style="display:none" id="lista-lugares" >
            <p></p>

        </div>  

    </div> 

</div>  





<a id="btn-nuevo-mapa" class="button icon add dialogLink" href="<?php echo url_for('map/new') . '?idProyecto=' . $idProyecto ?>">Nuevo Mapa</a>




