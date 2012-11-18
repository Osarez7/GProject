<?php use_helper('I18N', 'Date') ?>
<?php include_partial('prioridad/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Prioridad', array(), 'messages') ?></h1>

  <?php include_partial('prioridad/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('prioridad/form_header', array('prioridad' => $prioridad, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('prioridad/form', array('prioridad' => $prioridad, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('prioridad/form_footer', array('prioridad' => $prioridad, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
