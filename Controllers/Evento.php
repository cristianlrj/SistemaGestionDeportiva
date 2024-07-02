<?php

class Evento extends Controllers{

    public function __construct(){
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: ' . base_url() . '/Login');
            die();
		    }
    }

    public function registroEvento(){

		$data['page_title'] = APP_NAME;
		$data['page_name'] = "Registro de Evento";
    $data['page_functions'] = functions($this, "registroEvento");
		$this->views->getView($this,"registroEvento",$data);

    }

    public function verEventos(){

      $data['page_title'] = APP_NAME;
      $data['page_name'] = "Eventos";
      $data['page_functions'] = functions($this, "registroEvento");
      $this->views->getView($this,"verEvento",$data);
  
      }

}