<?php $this->assign('title', 'Characters'); ?>
<h3>Character List</h3>
<p><?= $this->Html->link("Add Character", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Name</th>
        <th>Minecraft Name</th>
        <th>Movie</th>
        <th>Owner</th>
        <th>Actions</th>
    </tr>
<?php foreach ($characters as $character): ?>
    <tr>
        <td><?= $character->name ?></td>
        <td><?= $character->minecraft_name ?></td>
        <td><?= $character->movie ?></td>
        <td><?= $character->owner_name ?></td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $character->id],
                ['confirm' => 'Are you sure you want to remove this character?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $character->id]) ?>
        </td>
    </tr>
<?php endforeach; ?>
