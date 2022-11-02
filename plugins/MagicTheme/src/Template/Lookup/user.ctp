<?php foreach ($player as $player): ?>
  <p><?= $player->username ?></p>
  <p><?= $player->uuid ?></p>
  <?php
    switch ($player->rank) {
        case 'guest':
          echo 'Guest';
          break;
        case 'dvc':
          echo 'DVC';
          break;
        case 'shareholder':
          echo 'Shareholder';
          break;
          case 'intern':
            echo 'Intern';
            break;
          case 'castmember':
            echo 'Cast Member';
            break;
          case 'manager':
            echo 'Manager';
            break;
          case 'technician':
            echo 'Developer';
            break;
          case 'owner':
            echo 'Owner';
            break;
          case 'mayor':
            echo 'Mayor';
            break;
          case 'craftventure':
            echo 'Craft Venture';
            break;
          case 'discoverridge':
            echo 'Discovery Ridge';
            break;
          case 'nauticalcraft':
            echo 'Nautical Craft';
            break;
          case 'character':
            echo 'Character';
            break;
          case 'characterguest':
            echo 'Character(Guest)';
            break;
          default:
            echo 'Invalid Rank';
            break;
      }
  ?>
<?php endforeach; ?>
<?= $Total ?>
<?= $bans->uuid ?>
