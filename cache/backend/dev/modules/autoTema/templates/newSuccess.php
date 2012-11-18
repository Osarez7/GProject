<?php use_helper('I18N', 'Date') ?>
<?php include_partial('tema/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Tema', array(), 'messages') ?></h1>

  <?php include_partial('tema/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('tema/form_header', array('tema' => $tema, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('tema/form', array('tema' => $tema, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('tema/form_footer', array('tema' => $tema, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
