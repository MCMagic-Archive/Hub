<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class LookupController extends AppController
{
    public function user($name)
    {

        $user = $this->Lookup->find('all')
                    ->where(['Lookup.username' => $name]);
        $player = $user->all();
        $this->set('player', $player);
    }
}
