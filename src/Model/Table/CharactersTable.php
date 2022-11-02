<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CharactersTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name')
            ->requirePresence('name')
            ->notEmpty('minecraft_name')
            ->requirePresence('minecraft_name')
            ->notEmpty('owner_name')
            ->requirePresence('owner_name');
        return $validator;
    }
}
