<?php $this->assign('title', 'Magic System'); ?>
<div class="table-responsive-vertical shadow-z-1">
      <table class="table table-hover table-mc-light-blue">
          <thead>
              <tr>
                <th width="14%">Source</th>
                <th width="15%">Player</th>
                <th width="12%">Date</th>
                <th width="40%">Description</th>
                <th width="25%">Evidence</th>
              </tr>
          </thead>
          <tbody>
<?php foreach ($entries as $entry): ?>
    <tr>
        <td><?= $entry->submitter ?></td>
        <td><?= $entry->username ?></td>
        <td><?= $entry->date ?></td>
        <td><?= $entry->explain ?></td>
        <td class="evidence"><?= $entry->evidence ?></td>
    </tr>
<?php endforeach; ?>
    </table>
</div>
<div class="magicSysteminput">
<?= $this->Html->link("Add Entry", ['action' => 'add'], ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect']) ?>
</div>
