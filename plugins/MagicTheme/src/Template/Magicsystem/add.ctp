<?= $this->assign('title', 'Magic System :: Add ') ?>
<div class="info-section">
    <div class="info-section__text">
      <h4>General Info</h4>

      <p>You must provide all information for the evidence for the incident below. <br>Please format the date as follows: mm/dd/yyyy.<br> This form will not submit until you have fully filled it out, if you have an issue with submitting please contact an <b>Manager/Developer</b> ASAP.</p>
    </div>
</div>
<div class="input-form mdl-shadow--2dp">
<?= $this->Form->create($entry) ?>
        <p>User in question</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('username', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
        <p>When did this incident occur?</p>
        <div class="mdl-textfield mdl-js-textfield">
          <?= $this->Form->input('date', [
              'class' => 'mdl-textfield__input',
              'label' => ['class' => 'mdl-textfield__label']
              ])
          ?>
        </div>
        <p>Please provide a description of the incident</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('explain', [
            'class' => 'mdl-textfield__input',
            'label' => ['class' => 'mdl-textfield__label']
            ])
        ?>
        </div>
        <p>Please provide evidence</p>
        <div class="mdl-textfield mdl-js-textfield">
        <?= $this->Form->input('evidence', [
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
