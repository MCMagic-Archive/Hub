<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MagicsystemTable extends Table
{
    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username', 'You must provide a username')
            ->notEmpty('date', 'You must provide a date')
            ->notEmpty('explain', 'You must provide an explanation')
            ->notEmpty('evidence', 'You must provide evidence');
        return $validator;
    }
}
