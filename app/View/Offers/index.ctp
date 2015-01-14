<?php $this->assign('title_for_layout', 'オファー一覧'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">オファー一覧</h3>
  </div>
  <div class="panel-body">    
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
            <td><?php echo $offer['User']['first_name'] . ' ' . $offer['User']['last_name']; ?></td>
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
  </div>
</div>
