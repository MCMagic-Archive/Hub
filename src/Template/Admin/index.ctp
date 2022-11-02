<?php $this->assign('title', 'Admin Hub'); ?>
<h1>Current Users</h1>
<h3>Hello, <?= h($username) ?></h3>
<p><?= $this->Html->link("Add User", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>ID</td>
        <th>Username</th>
        <th>Rank</th>
        <!--<th>Last Seen</th>-->
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->username ?></td>
        <td><?= $user->role ?></td>
        <!-- feature is not yet supported -->
        <!--<td><?= $user->lastseen ?></td>-->
    </tr>
  <?php endforeach; ?>
</table>
