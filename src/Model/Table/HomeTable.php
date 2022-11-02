<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class HomeTable extends Table
{
    public function  initialize(array $config) {
        $this->table('chat');
        $this->addBehavior('Timestamp');

    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('message')
            ->requirePresence('message');
        return $validator;
    }
}
