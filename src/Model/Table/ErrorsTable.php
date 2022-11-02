<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ErrorsTable extends Table
{
    public function initialize(array $config) {
        $this->table('errorcodes');
    }
}
