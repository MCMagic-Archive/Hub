<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class AdminController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
    public function index()
     {

        $this->set('users', $this->Admin->find('all'));
        $this->set('username', $this->Auth->user('username'));
    }
    public function add()
    {
        $user = $this->Admin->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Admin
                         ->patchEntity($user, $this->request->data);
            if ($this->Admin->save($user)) {
                $this->Flash->success(__('User account has been successfully created'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to create user account'));
        }
        $this->set('user', $user);
    }
    public function edit($id = null)
    {
        $user = $this->Admin->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Admin->patchEntity($user, $this->request->data);
            if ($this->Admin->save($user)) {
                $this->Flash->success(__('User succesfully updated'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update the selected user'));
        }
        $this->set('user', $user);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Admin->get($id);
        if ($this->Admin->delete($user)) {
            $this->Flash->success(__('The user with the id: {0} has been successfully deleted', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
