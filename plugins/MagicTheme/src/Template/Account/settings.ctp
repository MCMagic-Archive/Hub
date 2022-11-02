<?= $this->assign('title', 'User Account Settings :: '.$user->username.'' ) ?>
<div class="info-section">
    <div class="info-section__text">
      <h4>General Info</h4>

      <p>Please make sure your username matches your minecraft username. If you are having issues with account settings, please contact a manager or developer. You will need to re-log to see your changed username.</p>
    </div>
</div>
<div class="input-form mdl-shadow--2dp">
<?= $this->Form->create($user) ?>
        <p>Username</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('username', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
        <p>Password</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('password', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
<div class="input-button">
  <?= $this->Form->button(__('Submit'), ['class' => 'mdl-button mdl-js-button mdl-button--raised']); ?>
</div>
<?= $this->Form->end() ?>
</div>
