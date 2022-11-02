<?php use Helpers\Url; ?>
<?php $this->assign('title', 'Characters'); ?>
<div class="info-section">
    <div class="info-section__text">
      <h4>General Info</h4>

      <p>This is a master list for all characters that are currently in use on our server. If the list is missing characters or there is information that is currently invalid. Managers and Staff in charge of the characters have the ability to add/delete/edit each and every character.</p>
      <p>If the list is outdated please contact a manager / character staff immediately.</p>
    </div>
</div>
<table style="position: relative; margin: 0 auto;" class="mdl-data-table mdl-js-data-table">
 <thead>
   <tr>
     <th class="mdl-data-table__cell--non-numeric">Character Name</th>
     <th class="mdl-data-table__cell--non-numeric">Minecraft Name</th>
     <th>Movie</th>
     <th class="mdl-data-table__cell--non-numeric">Owner</th>
     <th class="mdl-data-table__cell--non-numeric">Actions</th>
   </tr>
 </thead>
 <tbody>
   <?php foreach ($characters as $character): ?>
       <tr>
           <td><?= $character->name ?></td>
           <td><?= $character->minecraft_name ?></td>
           <td><?= $character->movie ?></td>
           <td><?= $character->owner_name ?></td>
           <td>
               <?= $this->Html->link('Edit', ['action' => 'edit', $character->id]) ?> |
               <?= $this->Form->postLink(
                   'Delete',
                   ['action' => 'delete', $character->id],
                   ['confirm' => 'Are you sure you want to remove this character?'])
               ?>
           </td>
       </tr>
    <?php endforeach; ?>
</tbody>
</table>
<div class="input-section">
<?= $this->Html->link("Add Character", ['action' => 'add'], ['class' => 'mdl-button']) ?>
</div>
