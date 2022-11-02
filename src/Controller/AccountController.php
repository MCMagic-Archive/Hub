<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;

class AccountController extends AppController
{
    //set the theme
    public function settings($id = null)
    {
      $user = $this->Account->get($id);
      if ($this->request->is(['post', 'put'])) {
          $this->Account->patchEntity($user, $this->request->data);
          if ($this->Account->save($user)) {
              $this->Flash->success(__('Account settings successfully updated'));
              $this->redirect(['controller' => 'home', 'action' => 'index']);
          }
          $this->Flash->error(__('Unable to update account settings'));
      }
      $this->set('user', $user);
    }
}
