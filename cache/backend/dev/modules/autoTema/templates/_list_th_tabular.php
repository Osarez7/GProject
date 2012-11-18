<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_idTema">
  <?php if ('idTema' == $sort[0]): ?>
    <?php echo link_to(__('Id tema', array(), 'messages'), '@tema', array('query_string' => 'sort=idTema&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id tema', array(), 'messages'), '@tema', array('query_string' => 'sort=idTema&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_tituloTema">
  <?php if ('tituloTema' == $sort[0]): ?>
    <?php echo link_to(__('Titulo tema', array(), 'messages'), '@tema', array('query_string' => 'sort=tituloTema&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Titulo tema', array(), 'messages'), '@tema', array('query_string' => 'sort=tituloTema&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_proyectoFK">
  <?php if ('proyectoFK' == $sort[0]): ?>
    <?php echo link_to(__('Proyecto fk', array(), 'messages'), '@tema', array('query_string' => 'sort=proyectoFK&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Proyecto fk', array(), 'messages'), '@tema', array('query_string' => 'sort=proyectoFK&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_foreignkey sf_admin_list_th_usuarioFK">
  <?php if ('usuarioFK' == $sort[0]): ?>
    <?php echo link_to(__('Usuario fk', array(), 'messages'), '@tema', array('query_string' => 'sort=usuarioFK&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Usuario fk', array(), 'messages'), '@tema', array('query_string' => 'sort=usuarioFK&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_fecha_creacion">
  <?php if ('fecha_creacion' == $sort[0]): ?>
    <?php echo link_to(__('Fecha creacion', array(), 'messages'), '@tema', array('query_string' => 'sort=fecha_creacion&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha creacion', array(), 'messages'), '@tema', array('query_string' => 'sort=fecha_creacion&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_fecha_actualizacion">
  <?php if ('fecha_actualizacion' == $sort[0]): ?>
    <?php echo link_to(__('Fecha actualizacion', array(), 'messages'), '@tema', array('query_string' => 'sort=fecha_actualizacion&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fecha actualizacion', array(), 'messages'), '@tema', array('query_string' => 'sort=fecha_actualizacion&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>