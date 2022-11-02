<?php use Cake\I18n\Time; ?>
<?= $this->assign('title', 'Home'); ?>
<h1>MCMagic Cast Member Hub - <?= $this->fetch('title'); ?></h1>

<?php
  echo $this->Form->create($message);
  echo $this->Form->input('message', ['rows' => '3']);
  echo $this->Form->button(__('Post'));
  echo $this->Form->end();
?>
<?php foreach ($messages as $message): ?>
  <h4><?= $message->username ?></h4>
  <p><?= $message->message ?></p>
  <p><small><?= $message->time->i18nFormat('MM-dd-YYYY', 'America/New_York'); ?></small></p>
<?php endforeach; ?>
