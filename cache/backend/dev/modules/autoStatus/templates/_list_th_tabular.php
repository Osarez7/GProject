<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_idStatus">
  <?php if ('idStatus' == $sort[0]): ?>
    <?php echo link_to(__('Id status', array(), 'messages'), '@status', array('query_string' => 'sort=idStatus&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id status', array(), 'messages'), '@status', array('query_string' => 'sort=idStatus&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_nombreStatus">
  <?php if ('nombreStatus' == $sort[0]): ?>
    <?php echo link_to(__('Nombre status', array(), 'messages'), '@status', array('query_string' => 'sort=nombreStatus&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre status', array(), 'messages'), '@status', array('query_string' => 'sort=nombreStatus&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>