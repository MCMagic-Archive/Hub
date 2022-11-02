<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['logout']);
    }

    //set the theme
    public $theme = "MagicLogin";
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if ($this->Auth->authenticationProvider()->needsPasswordRehash()) {
                  $user = $this->Users->get($this->Auth->user('id'));
                  $user->password = $this->request->data('password');
                  $user->modified = Time::now();
                  $this->Users->save($user);
                }
                $this->Flash->success(__('Successfully logged in.'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Wrong username or password, please try again.'));
        }
    }
    public function logout()
    {
        $this->Flash->success(__('Successfully logged out, come back soon!'));
        return $this->redirect($this->Auth->logout());
    }

    /*public function isAuthorized($user)
    {
        if($this->request->action === 'add') {
            return true;
        }

        return parent::isAuthorized($user);
    }*/
}
