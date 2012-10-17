<td colspan="2">
  <?php echo __('%%idStatus%% - %%nombreStatus%%', array('%%idStatus%%' => link_to($status->getIdStatus(), 'status_edit', $status), '%%nombreStatus%%' => $status->getNombreStatus()), 'messages') ?>
</td>
