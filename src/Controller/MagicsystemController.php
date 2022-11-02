<?php
namespace App\controller;

use App\Controller\AppController;
use Cake\Event\Event;

class MagicsystemController extends AppController
{
    public function index()
    {
        $this->set('entries', $this->Magicsystem->find('all')->order(['id' => 'DESC']));
    }
    public function add()
    {
       $entry = $this->Magicsystem->newEntity();
       if ($this->request->is('post')) {
          $entry = $this->Magicsystem->patchEntity($entry, $this->request->data);
          if ($this->Magicsystem->save($entry)) {
              $this->Flash->success(__('Report successfully added'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to add the report'));
       }
       $this->set('entry', $entry);
    }    
    public function edit($id = null)
    {
        $entry = $this->Magicsystem->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Magicsystem->patchEntity($entry, $this->request->data);
            if ($this->Magicsystem->save($entry)) {
                $this->Flash->success(__('Entry succesfully updated'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update the entry'));
        }
        $this->set('entry', $entry);
      }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entry = $this->Magicsystem->get($id);
        if ($this->Magicsystem->delete($entry)) {
            $this->Flash->success(__('The entry with with the id: {0} has been successfully removed', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
