<?php
namespace App\Controller;

use App\Controller\AppController;

class ErrorsController extends AppController
{
    public function index()
    {
      $this->set('errors', $this->Errors->find('all')->order(['id' =>'DESC']));
    }
}
