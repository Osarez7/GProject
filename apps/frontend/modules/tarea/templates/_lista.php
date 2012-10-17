...
    <table id="main_list" cellspacing="0">
...
      <tbody>
        <?php foreach ($pager->getResults() as $i => $tree): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?>
          <tr id="node-<?php echo $tree['id'] ?>" class="sf_admin_row <?php echo $odd ?><?php
          // insert hierarchical info
          $node = $tree->getNode();
          if ($node->isValidNode() && $node->hasParent())
          {
            echo " child-of-node-".$node->getParent()->getId();
          }
          ?>">
            <?php include_partial('tree/list_td_batch_actions', array('tree' => $tree, 'helper' => $helper)) ?>
            <?php include_partial('tree/list_td_tabular', array('tree' => $tree)) ?>
            <?php include_partial('tree/list_td_actions', array('tree' => $tree, 'helper' => $helper)) ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
...
<script type="text/javascript">
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for(index in boxes) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
$(document).ready(function()  {
  $("#main_list").treeTable({
    treeColumn: 2,
    initialState: 'expanded'
  });
}
</script>