<?php $this->assign('title', 'Admin Hub'); ?>
<table style="position: relative; margin: 0 auto; width: 75%;" class="mdl-data-table mdl-js-data-table">
  <thead>
    <tr>
        <th>ID</td>
        <th>Username</th>
        <th>Rank</th>
        <th>Actions</th>
        <!--<th>Last Seen</th>-->
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->role ?></td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?> |
          <?= $this->Form->postLink(
              'Delete',
              ['action' => 'delete', $user->id],
              ['confirm' => 'Are you sure you want to remove this user account?'])
          ?>
        </td>
        <!-- feature is not yet supported -->
        <!--<td><?= $user->lastseen ?></td>-->
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<div class="input-section">
<?= $this->Html->link("Create User Account", ['action' => 'add'], ['class' => 'mdl-button']) ?>
</div>
