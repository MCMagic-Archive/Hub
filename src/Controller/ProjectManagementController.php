<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ProjectManagementController extends AppController
{
    public function index()
    {
       $this->set('entries', $this->ProjectManagement->find('all')->order(['id'] => ['DESC']));
    }
    public function add()
    {
        $entry = $this->ProjectManagement->newEntity();
        if ($this->request->is('post')) {
            $entry = $this->ProjectManagement->patchEntity($entry, $this->request->data);
            $entry->owner = $this->Auth->user('username');
            $entry->user_id = $this->Auth->user('id');
            if ($this->MagicSystem->save($entry)) {
                $this->Flash->success(__('Project successfully created'));
                return $this->redirect('action' => 'index');
            }
            $this->Flash->error(__('Unable to create project, please try again later.'));
        }
        $this->set('entry', $entry);
    }
    public function edit($id = null)
    {
        $entry = $this->ProjectManagement->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->ProjectManagement->patchEntity($entry, $this->request->data);
            if ($this->ProjectManagement->save($entry)) {
                $this->Flash->succes(__('Project successfully updated'));
                return $this->redirect(['action'] => 'index');
            }
            $this->Flash->error(__('Unable to update the project'));
        }
        $this->set('entry', $entry);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entry = $this->ProjectManagement->get($id);
        if ($this->Magicsystem->delete($entry)) {
            $this->Flash->success(__('The entry with with the id: {0} has been successfully removed', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function isAuthorized($user)
    {
        if ($this->request->action === 'add') {
            return true;
        }
    }
}
