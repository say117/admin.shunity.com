<?php $this->assign('title_for_layout', '問題一覧'); ?>

<h2 class="pull-left">問題追加</h2>

<?php echo $this->Form->create('Question'); ?>
  <div class="form-group">
    <div>
      <?php echo $this->Form->input('Question.description', array('type' => 'textarea', 'label' => '内容')); ?>
    </div>
  </div>
  <?php echo $this->Form->submit('追加', array('class' => 'btn btn-block btn-primary')); ?>
<?php echo $this->Form->end(); ?>

