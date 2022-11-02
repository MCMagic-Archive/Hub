<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CharactersController extends AppController
{
    public function index()
    {
        $this->set('characters', $this->Characters->find('all')->order(['name' => 'ASC']));
    }
    public function add()
    {
       $character = $this->Characters->newEntity();
       if ($this->request->is('post')) {
          $character = $this->Characters->patchEntity($character, $this->request->data);
          if ($this->Characters->save($character)) {
              $this->Flash->success(__('Character successfully added'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to add the character'));
       }
       $this->set('character', $character);
    }
    public function edit($id = null)
    {
        $character = $this->Characters->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Characters->patchEntity($character, $this->request->data);
            if ($this->Characters->save($character)) {
                $this->Flash->success(__('Character successfully updated'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your character'));
        }
        $this->set('character', $character);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $character = $this->Characters->get($id);
        if ($this->Characters->delete($character)) {
            $this->Flash->success(__('The character with the id: {0} has been successfully removed', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
