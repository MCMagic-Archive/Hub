<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    /*public function initialize(array $config) {
        $this->table('members');
    }*/
    public function validationDefault(Validator $validator)
    {
        return $validator
        ->notEmpty('username', 'You must provide a username.')
        ->notEmpty('password', 'You must provide a password.');
    }
}
