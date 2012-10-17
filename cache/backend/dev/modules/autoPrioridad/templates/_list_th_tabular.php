<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_idPrioridad">
  <?php if ('idPrioridad' == $sort[0]): ?>
    <?php echo link_to(__('Id prioridad', array(), 'messages'), '@prioridad', array('query_string' => 'sort=idPrioridad&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id prioridad', array(), 'messages'), '@prioridad', array('query_string' => 'sort=idPrioridad&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_nombrePrioridad">
  <?php if ('nombrePrioridad' == $sort[0]): ?>
    <?php echo link_to(__('Nombre prioridad', array(), 'messages'), '@prioridad', array('query_string' => 'sort=nombrePrioridad&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre prioridad', array(), 'messages'), '@prioridad', array('query_string' => 'sort=nombrePrioridad&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>