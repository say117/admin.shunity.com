<?php $this->assign('title_for_layout', '問題一覧'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">問題追加</h3>
  </div>
  <div class="panel-body">
    <?php echo $this->Form->create('Question'); ?>
	  <div class="form-group">
	    <label for="QuestionDescription">問題文</label>
	    <?php echo $this->Form->input('Question.description', array('type' => 'textarea', 'label' => false, 'class' =>'form-control')); ?>
	  </div>
      <?php echo $this->Form->submit('追加', array('class' => 'btn btn-block btn-primary')); ?>
    <?php echo $this->Form->end(); ?>
  </div>
</div>
