<?php
use Cake\I18n\Time;
use Cake\Text;
//add markdown support
$Parsedown = new Parsedown();
?>
<?= $this->assign('title', 'Home'); ?>
<div class="chat">
    <div class="message">
      <div class="avatar">
        <img src="https://minotar.net/helm/<?= $username ?>/128.png">
      </div>
      <?= $this->Form->create($message) ?>
      <div class="messageText">
        <?= $this->Form->textarea('message', ['rows' => '4', 'cols' => '50', 'placeholder' => 'Share your thoughts']) ?>
        <?= $this->Form->button(__('Post')); ?>
      </div>
      <?= $this->Form->end(); ?>
      <div class="arrow"></div>
    </div>
</div>
<div class="chat">
<?php foreach ($messages as $message): ?>
  <div class="message">
    <div class="avatar">
      <img src="https://minotar.net/helm/<?= $message->username ?>/128.png">
    </div>
    <div class="messageText"><p><?php echo $Parsedown->text($message->message); ?></p></div>
    <div class="messageUsername"><?= $message->username ?></div>
    <div class="postDate">
      <span>
      Posted <?= $message->time->timeAgoInWords([
      'accuracy' => ['day' => 'day'],
      'end' => '1 year']);?>
      </span>
    </div>
    <div class="arrow"></div>
</div>
<?php endforeach; ?>
</div>
