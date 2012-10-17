<td colspan="2">
  <?php echo __('%%idPrioridad%% - %%nombrePrioridad%%', array('%%idPrioridad%%' => link_to($prioridad->getIdPrioridad(), 'prioridad_edit', $prioridad), '%%nombrePrioridad%%' => $prioridad->getNombrePrioridad()), 'messages') ?>
</td>
