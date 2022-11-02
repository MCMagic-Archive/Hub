<?= $this->assign('title', 'Characters :: Add ') ?>
<div class="info-section">
    <div class="info-section__text">
      <h4>General Info</h4>

      <p>This form will add a character to the database, and on submit will automatically redirect you back to the character list. If your character does not display please contact a manager/developer immediatly.</p>
    </div>
</div>
<div class="input-form mdl-shadow--2dp">
<?= $this->Form->create($character) ?>
        <p>Name of the character</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('name', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
        <p>What is the character's username?</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('minecraft_name', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
        <p>What movie is the character featured in?</p>
        <div class="mdl-textfield mdl-js-textfield">
          <?= $this->Form->input('movie', [
              'class' => 'mdl-textfield__input',
              'label' => ['class' => 'mdl-textfield__label']
              ])
          ?>
        </div>
        <p>Who is the owner of said character?</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('owner_name', [
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
