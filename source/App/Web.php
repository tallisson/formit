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
    echo 'Meus ovos!';
  }
}