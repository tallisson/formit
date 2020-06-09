<?php
namespace Source\App;

use League\Plates\Engine;

class Web {
  private $view;

  public function __construct()
  {
    $this->view = Template::getView();
  }

  public function home($data) 
  {    
    echo $this->view->render('web/login', ['title' => 'FORMIT | Seus Questionário de Maneira Rápida e Divertida :)']);
  }
}