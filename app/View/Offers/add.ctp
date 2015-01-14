<?php $this->assign('title_for_layout', 'オファー'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">オファーを送る</h3>
  </div>
  <div class="panel-body">
    <label for="QuestionDescription">オファー対象者</label>
	<p><?php echo $user['User']['first_name'] . ' ' . $user['User']['last_name']; ?></p>
    <div class="form-group">
		<?php echo $this->Form->create('Offer'); ?>
		  <?php echo $this->Form->hidden('Offer.user_id', array('value' => $user['User']['id'])); ?>
		  <label for="QuestionDescription">メッセージ</label>
		  <?php echo $this->Form->input('Offer.description', array('type' => 'textarea', 'label' => false, 'class' =>'form-control')); ?>
	</div>
	<?php echo $this->Form->submit('送信', array('class' => 'btn btn-block btn-primary')); ?>
	<?php echo $this->Form->end(); ?>
  </div>
</div>
