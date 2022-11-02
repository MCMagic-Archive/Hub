<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\View\viewBuilder;

class HomeController extends AppController
{
    // Method requires version 3.1 of framework to work
    /*public function beforeRender(Event $event){
        parent::beforeRender($event);
        $this->viewBuilder()->theme('MagicTheme');
    }*/
    public function index()
    {
        $this->set('messages', $this->Home->find('all')->order(['id' =>'DESC']));

        $message = $this->Home->newEntity();
        if($this->request->is('post')) {
           $message = $this->Home->patchEntity($message, $this->request->data);
           $message->username = $this->Auth->user('username');
           if ($this->Home->save($message)) {
               $this->Flash->success(__('Your message has been posted!'));
               return $this->redirect(['action' => 'index']);
           }
           $this->Flash->error(__('Unable to post your message.'));
        }
        $this->set('message', $message);
    }

}
