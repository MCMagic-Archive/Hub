<?= $this->assign('title', 'Users :: Edit') ?>
<div class="input-form mdl-shadow--2dp">
<?= $this->Form->create($user) ?>
        <p>Name of the User</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('username', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
        <p>User's Password</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('password', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
        <p>User Rank</p>
        <div class="mdl-textfield mdl-js-textfield">
          <?= $this->Form->input('role', [
              'options' => ['admin' => 'Admin', 'castmember' => 'Cast Member', 'showdev' => 'Show Dev']
          ]) ?>
        </div>
<div class="input-button">
  <?= $this->Form->button(__('Submit'), ['class' => 'mdl-button mdl-js-button mdl-button--raised']); ?>
</div>
<?= $this->Form->end() ?>
</div>
