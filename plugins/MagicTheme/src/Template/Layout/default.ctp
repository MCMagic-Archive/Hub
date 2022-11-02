<?php
  $static_title = 'MCMagic Cast Member Hub';
?>
<!DOCTYPE html>
<html>
  <head>
    <?= $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?= $this->fetch('title') ?> - <?= $static_title ?>
    </title>
    <?= $this->Html->meta('icon'); ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('material.min.css') ?>
    <?= $this->Html->css('ionicons/css/ionicons.min.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  </head>
  <body>
      <?= $this->Flash->render() ?>
      <header>
          <div class="mainTitle">Cast Member Hub</div>
          <!-- user avatar -->
          <!-- <div class="hub-avatar" id="avatar" style="background-image: url('https://minotar.net/helm/<?= h($username) ?>/128.png')"></div> -->
          <!-- username -->
          <!--<div id="namebox">
              <div class="name"><p><?= h($username) ?></p></div>
          </div>-->
          <div class="namebox">
              <div class="namebox-profile">
                <img src="//minotar.net/helm/<?= h($username) ?>/128.png" class="Photo" />
                <span class="Name"><?= h($username) ?></span>
                <span class="MenuIcon">
                  <span class="MenuIcon-line"></span>
                  <span class="MenuIcon-line"></span>
                  <span class="MenuIcon-line"></span>
                </span>
              </div>
              <nav class="namebox-nav">
                <ul class="namebox-group" style="height: 155px;">
                  <li>
                    <?= $this->Html->link('Account Settings', ['controller' => 'Account', 'action' => 'settings', $userID], ['class' => 'NavLink']) ?>
                  </li>
                  <li>
                    <a href="javascript:0(void);" disabled class="NavLink"> Profile</a>
                  </li>
                  <li>
                    <a href="javascript:0(void);" disabled class="NavLink">Show Dev</a>
                  </li>
                  <?php if($rank == 'admin'): ?>
                  <li>
                    <?= $this->Html->link('Administration', ['controller' => 'Admin', 'action' => 'index'], ['class' => 'NavLink']); ?>
                  </li>
                  <?php else: ?>
                  <?php endif; ?>
                </ul>
                <ul class="namebox-group">
                  <li>
                    <?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'NavLink']) ?>
                  </li>
                </ul>
              </nav>
            </div>
      </header>

      <div id="logo">
          <a href="/hub/">
		      <div class="logo-img" style="background-image: url('/hub/magic_theme/img/Logos/mcmagic_logo_small.png')"></div>
          </a>
      </div>
      <div id="navigation">
      		<ul>
      				<li><?= $this->Html->link('Home', ['controller' => 'Home', 'action' => 'index'], ['class' => 'ion-ios-home-outline']) ?></li>
      				<li><?= $this->Html->link('Project Management', ['controller' => 'Projectmanagement', 'action' => 'index'], ['class' => 'ion-android-apps']) ?></li>
      				<li><a href="#" class="ion-ios-person-outline">User Lookup</a></li>
      				<li><?= $this->Html->link('Magic System', ['controller' => 'Magicsystem', 'action' => 'index'], ['class' => 'ion-ios-list-outline']) ?></li>
      				<li><?= $this->Html->link('Characters', ['controller' => 'Characters', 'action' => 'index'], ['class' => 'ion-ios-people-outline']) ?></li>
      				<li><?= $this->Html->link('Status', ['controller' => 'Status', 'action' => 'index'], ['class' => 'ion-ios-speedometer-outline']) ?></li>
      				<li><?= $this->Html->link('Error Codes', ['controller' => 'Errors', 'action' => 'index'], ['class' => 'ion-ios-paper-outline']) ?></li>
      				<li><a href="#" class="ion-document">Monthly Quiz</a></li>
      				<li><a href="#" class="ion-ios-help-outline">FAQS</a></li>
      		</ul>
      </div>
      <div id="content">
          <div class="headerTitle">
              <h2><?= $this->fetch('title') ?></h2>
          </div>
          <div class="container">
              <?= $this->fetch('content') ?>
          </div>
      </div>
      <footer>
        <div class="footContent">
            <div class="copyText">&copy; 2011- <?php echo date('Y'); ?> <a href="http://mcmagic.us">MCMagic Parks</a></div>
            <div class="footText">Designed with <span style="color: #F44336;"><i class="icon ion-ios-heart"></i></span> by <div class="img-rounded"><img src="https://minotar.net/helm/Flakenstine/128.png"></div>&amp; <div class="img-rounded"><img src="https://minotar.net/helm/Legobuilder0813/128.png"></div>
            </div>
            <div class="footVersion">Hub<sup>2</sup> version <a href="#"><b><?= $version ?></b></a></div>
        </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <?= $this->Html->script('material.min.js') ?>
      <?= $this->Html->script('web.js') ?>
  </body>
</html>
