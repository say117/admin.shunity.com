<?php $this->assign('title_for_layout', 'オファー一覧'); ?>

<h2 class="pull-left">オファー一覧</h2>


<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>氏名</th>
      <th>状態</th>
    </tr>
  </thead>
  <?php foreach ($offers as $offer) { ?>
    <tbody>
      <tr>
        <td><?php echo $offer['Offer']['id']; ?></td>
        <td><?php echo $offer['User']['last_name'] . ' ' . $offer['User']['first_name']; ?></td>\
        <?php if ($offer['Offer']['status'] == 0) { ?>
          <td>オファー中</td>
          <?php } elseif ($offer['Offer']['status'] == 1) { ?>
          <td>承諾</td>
        <?php } else { ?>
          <td>拒否</td>
        <?php } ?>
      </tr>
    </tbody>
  <?php } ?>
</table>

<ul class="pagination">
  <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
  <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
  <?php echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
</ul>