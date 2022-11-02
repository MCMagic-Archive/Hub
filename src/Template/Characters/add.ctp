<?= $this->assign('title', 'Characters :: Add ') ?>
<div class="user form">
<?= $this->Form->create($character) ?>
    <fieldset>
        <legend><?= __('Add Character') ?></legend>
        <?= $this->Form->input('name') ?>
        <?= $this->Form->input('minecraft_name') ?>
        <?= $this->Form->input('movie') ?>
        <?= $this->Form->input('owner_name') ?>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>
