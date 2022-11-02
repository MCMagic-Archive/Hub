<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Database\Connection;
use Cake\Datasource\ConnectionManager;
class LookupTable extends Table
{
    public static function defaultConnectionName() {
        return 'MainServer';
    }
    public function initialize(array $config) {
      $this->table('player_data');
    }
}
