<?php $this->assign('title_for_layout', '問題一覧'); ?>

<h2 class="pull-left">解答一覧</h2>

<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>問題番号</th>
      <th>ユーザ名</th>
      <th>解答内容</th>
      <th>オファー</th>
    </tr>
  </thead>
  <?php foreach ($answers as $answer) { ?>
    <tbody>
      <tr>
        <td><?php echo $answer['Answer']['id']; ?></td>
        <td><?php echo $answer['Answer']['question_id']; ?></td>
        <td><?php echo $answer['User']['last_name'] . ' ' . $answer['User']['first_name']; ?></td>
        <td><?php echo $answer['Answer']['description']; ?></td>
        <td>
          <a href="/offers/add/<?php echo $answer['Answer']['user_id']; ?>">
            <button class="btn btn-success">オファーする</button>
          </a>
        </td>
      </tr>
    </tbody>
  <?php } ?>
</table>

<ul class="pagination">
  <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
  <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
  <?php echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
</ul>