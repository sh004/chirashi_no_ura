<?php

class ChirauraController extends AppController {

  public $name = 'Chiraura';
  public $user = null;
  public $layout = "Chiraura";
  public $autoRender = true;

  public function index(){
	$title_for_layout = "チラシの裏";
	$this->set(compact('title_for_layout'));
	
/*	$data = $this->Chiraura->find('all');
	$this->set('data', $data);*/
  }
  
  public function other(){
	echo "これは、index以外のページです。";
  }
}
?>