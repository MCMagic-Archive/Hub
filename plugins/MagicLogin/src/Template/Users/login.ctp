<?= $this->assign('title', 'Login') ?>
<div class="logo" style="background-image: url('/hub/magic_theme/img/Logos/mcmagic_logo_new.png');"></div>
<div class="login-form">
    <h1>Log In</h1>
    <?= $this->Form->create() ?>
    <div class="form-group">
      <?= $this->Form->input('username', ['class' => 'form-control ', 'placeholder' => 'Username', 'label' => false])?>
      <i class="fa fa-user"></i>
    </div>
    <div class="form-group">
      <?= $this->Form->input('password', ['class' => 'form-control ', 'placeholder' => 'Password', 'label' => false])?>
      <i class="fa fa-lock"></i>
    </div>
    <?= $this->Form->button(__('Login'), ['class' => 'log-btn']); ?>
    <?= $this->Form->end() ?>
    <span class="alert"><?= $this->Flash->render('auth') ?></span>
</div>
