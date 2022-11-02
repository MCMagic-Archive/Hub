<?= $this->assign('title', 'Characters :: Edit') ?>
<?= $this->Form->create($character) ?>
<?php
    echo $this->Form->input('name');
    echo $this->Form->input('minecraft_name');
    echo $this->Form->input('movie');
    echo $this->Form->input('owner_name');
    echo $this->Form->button(__('Save changes'));
    echo $this->Form->end();
 ?>
