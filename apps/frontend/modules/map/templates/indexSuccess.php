<?php use_stylesheet('openlayers-themes/default/style.css') ?>
<?php use_stylesheet('mapa.styles/mapa.index.css') ?>
<?php use_javascript("OpenLayers.js") ?>
<?php use_javascript("lib/jquery.tineyscrollbar/jquery.tinyscrollbar.js") ?>


<script type="text/javascript">

    var url_index_map = "<?php echo url_for('index_mapa', array('sf_format' => 'json', 'idProyecto' => $idProyecto)) ?>";
    var url_show_map = "<?php echo url_for('map/show?id_mapa=data') ?>";
    var url_index_lugares = "<?php echo url_for('index_lugar', array('sf_format' => 'json', 'idMapa' => "data")) ?>"
    var url_for_edit_place = "<?php echo url_for('lugar/edit?id_lugar=dataLugar') ?>";
    var url_for_move_place = "<?php echo url_for('lugar/edit?id_lugar=dataLugar&lon=dataLon&lat=dataLat') ?>";
    var url_for_create_place = "<?php echo url_for('lugar/new?id_lugar=dataLugar&lon=dataLon&lat=dataLat') ?>";
</script>

<?php use_javascript('mapa.scripts/mapaIndex.js') ?>



<h1>Mapas </h1>

<div id="content-mapa-list">


    <div id="map-control-content">

        <select id="slct-mapas">
            <option value ="0" class="default-selected"> -- Seleccione un mapa -</option>
            <?php foreach ($mapas as $mapa): ?>
                <option value = "<?php echo $mapa->getIdMapa() ?>"> <?php echo $mapa->getNombreMapa() ?></option> 
                
            <?php endforeach; ?>
        </select>


        <div  id='panel_div' class="button-group ">
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

        <div id="lista-lugares" >
            <p></p>

        </div>  

    </div> 

</div>  



<div id="scrollbar1">
    <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
    <div class="viewport">
        <div class="overview">
            <h3>Magnis dis parturient montes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae velit at velit pretium sodales. Maecenas egestas imperdiet mauris, vel elementum turpis iaculis eu. Duis egestas augue quis ante ornare eu tincidunt magna interdum. Vestibulum posuere risus non ipsum sollicitudin quis viverra ante feugiat. Pellentesque non faucibus lorem. Nunc tincidunt diam nec risus ornare quis porttitor enim pretium. Ut adipiscing tempor massa, a ullamcorper massa bibendum at. Suspendisse potenti. In vestibulum enim orci, nec consequat turpis. Suspendisse sit amet tellus a quam volutpat porta. Mauris ornare augue ut diam tincidunt elementum. Vivamus commodo dapibus est, a gravida lorem pharetra eu. Maecenas ultrices cursus tellus sed congue. Cras nec nulla erat.</p>

            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eget mauris libero. Nulla sit amet felis in sem posuere laoreet ut quis elit. Aenean mauris massa, pretium non bibendum eget, elementum sed nibh. Nulla ac felis et purus adipiscing rutrum. Pellentesque a bibendum sapien. Vivamus erat quam, gravida sed ultricies ac, scelerisque sed velit. Integer mollis urna sit amet ligula aliquam ac sodales arcu euismod. Fusce fermentum augue in nulla cursus non fermentum lorem semper. Quisque eu auctor lacus. Donec justo justo, mollis vel tempor vitae, consequat eget velit.</p>

            <p>Vivamus sed tellus quis orci dignissim scelerisque nec vitae est. Duis et elit ipsum. Aliquam pharetra auctor felis tempus tempor. Vivamus turpis dui, sollicitudin eget rhoncus in, luctus vel felis. Curabitur ultricies dictum justo at luctus. Nullam et quam et massa eleifend sollicitudin. Nulla mauris purus, sagittis id egestas eu, pellentesque et mi. Donec bibendum cursus nisi eget consequat. Nunc sit amet commodo metus. Integer consectetur lacus ac libero adipiscing ut tristique est viverra. Maecenas quam nibh, molestie nec pretium interdum, porta vitae magna. Maecenas at ligula eget neque imperdiet faucibus malesuada sed ipsum. Nulla auctor ligula sed nisl adipiscing vulputate. Curabitur ut ligula sed velit pharetra fringilla. Cras eu luctus est. Aliquam ac urna dui, eu rhoncus nibh. Nam id leo nisi, vel viverra nunc. Duis egestas pellentesque lectus, a placerat dolor egestas in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vitae ipsum non est iaculis suscipit.</p>

            <h3>Adipiscing risus </h3>
            <p>Quisque vel felis ligula. Cras viverra sapien auctor ante porta a tincidunt quam pulvinar. Nunc facilisis, enim id volutpat sodales, leo ipsum accumsan diam, eu adipiscing risus nisi eu quam. Ut in tortor vitae elit condimentum posuere vel et erat. Duis at fringilla dolor. Vivamus sem tellus, porttitor non imperdiet et, rutrum id nisl. Nunc semper facilisis porta. Curabitur ornare metus nec sapien molestie in mattis lorem ullamcorper. Ut congue, purus ac suscipit suscipit, magna diam sodales metus, tincidunt imperdiet diam odio non diam. Ut mollis lobortis vulputate. Nam tortor tortor, dictum sit amet porttitor sit amet, faucibus eu sem. Curabitur aliquam nisl sed est semper a fringilla velit porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum in sapien id nulla volutpat sodales ac bibendum magna. Cras sollicitudin, massa at sodales sodales, lacus tortor vestibulum massa, eu consequat dui nulla et ipsum.</p>

            <p>Aliquam accumsan aliquam urna, id vulputate ante posuere eu. Nullam pretium convallis tincidunt. Duis vitae odio arcu, ut fringilla enim. Nam ante eros, vestibulum sit amet rhoncus et, vehicula quis tellus. Curabitur sed iaculis odio. Praesent vitae ligula id tortor ornare luctus. Integer placerat urna non ligula sollicitudin vestibulum. Nunc vestibulum auctor massa, at varius nibh scelerisque eget. Aliquam convallis, nunc non laoreet mollis, neque est mattis nisl, nec accumsan velit nunc ut arcu. Donec quis est mauris, eu auctor nulla. Fusce leo diam, tempus a varius sit amet, auctor ac metus. Nam turpis nulla, fermentum in rhoncus et, auctor id sem. Aliquam id libero eu neque elementum lobortis nec et odio.</p>
        </div>
    </div>
</div>

<a id="btn-nuevo-mapa" class="button icon add dialogLink" href="<?php echo url_for('map/new') . '?idProyecto=' . $idProyecto ?>">Nuevo Mapa</a>




