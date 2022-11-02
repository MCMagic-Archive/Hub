<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Database\Connection;

class BannedPlayersTable extends Table
{
    public static function defaultConnectionName() {
        return 'MainServer';
    }
    public function initialize(array $config) {
      $this->table('banned_players');
      $this->hasOne('Lookup');
    }
}
