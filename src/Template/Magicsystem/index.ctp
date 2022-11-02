<?php $this->assign('title', 'Magic System'); ?>
<h3>Entries</h3>
<p><?= $this->Html->link("Add Entry", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Author</th>
        <th>Username</th>
        <th>Date</th>
        <th>Description</th>
        <th>Evidence</th>
        <th>Options</th>
    </tr>
<?php foreach ($entries as $entry): ?>
    <tr>
        <td><?= $entry->submitter ?></td>
        <td><?= $entry->username ?></td>
        <td><?= $entry->date ?></td>
        <td><?= $entry->explain ?></td>
        <td><?= $entry->evidence ?></td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $entry->id],
                ['confirm' => 'Are you sure you want to delete this entry?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $entry->id]) ?>
        </td>
    </tr>
<?php endforeach; ?>
