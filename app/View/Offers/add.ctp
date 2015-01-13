<?php $this->assign('title_for_layout', 'オファー'); ?>

<h2 class="pull-left">オファー</h2>

<h4>氏名</h4>
<p><?php echo $user['User']['last_name'] . ' ' . $user['User']['first_name']; ?></p>

<?php echo $this->Form->create('Offer'); ?>
  <?php echo $this->Form->hidden('Offer.user_id', array('value' => $user['User']['id'])); ?>
  <?php echo $this->Form->input('Offer.description', array('type' => 'textarea', 'label' => '内容')); ?>
  <?php echo $this->Form->submit('追加', array('class' => 'btn btn-block btn-primary')); ?>
<?php echo $this->Form->end(); ?>

