<?php use_helper('I18N', 'Date') ?>
<?php include_partial('usuario/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Usuario', array(), 'messages') ?></h1>

  <?php include_partial('usuario/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('usuario/form_header', array('usuario' => $usuario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('usuario/form', array('usuario' => $usuario, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('usuario/form_footer', array('usuario' => $usuario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
