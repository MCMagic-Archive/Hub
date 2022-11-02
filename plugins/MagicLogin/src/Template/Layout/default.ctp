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

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  </head>
  <body>
      <?= $this->Flash->render() ?>
      <div id="content">
          <div class="container">
              <?= $this->fetch('content') ?>
          </div>
      </div>
      <?= $this->Html->script('material.min.js') ?>
  </body>
</html>
