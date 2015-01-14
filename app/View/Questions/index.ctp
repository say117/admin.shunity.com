<?php $this->assign('title_for_layout', '問題一覧'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">問題一覧</h3>
  </div>
  <div class="panel-body">    
    <table class="table table-striped">
      <thead>
        <tr>
          <th>id</th>
          <th>内容</th>
        </tr>
      </thead>
      <?php foreach ($questions as $question) { ?>
        <tbody>
          <tr>
            <td><?php echo $question['Question']['id']; ?></td>
            <td><?php echo $question['Question']['description']; ?></td>
          </tr>
        </tbody>
      <?php } ?>
</table>
  </div>
</div>

<!--
<ul class="pagination">
  <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
  <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
  <?php echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
</ul>
-->