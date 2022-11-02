<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Account extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($value)
    {
        return (new DefaultPasswordHasher)->hash($value);
    }
}
