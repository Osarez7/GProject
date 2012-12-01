<script type="text/javascript">

 var url_index_lugares = "<?php echo url_for('index_lugar', array('sf_format' => 'json','idMapa' => $idMapa)) ?>";

</script>


<?php use_javascript('mapa.scripts/inicializarMapa.js') ?>
     

<div  id='mapa'>
        
        
</div>