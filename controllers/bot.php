<?php
class Bot extends Controller{

  function __construct(){
    parent::__construct();
    $this->view->render('bot/index');

  }
}

?>
