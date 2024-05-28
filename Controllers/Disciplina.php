<?php

class Disciplina extends Controllers{
    public function __construct(){
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: ' . base_url() . '/Login');
            die();
		    }
    }
    public function registroDisciplina(){

      $data['page_title'] = APP_NAME;
      $data['page_name'] = "Registro de Disciplina";
      $data['page_functions'] = functions($this, "registroDisciplina");
      $this->views->getView($this,"registroDisciplina",$data);

    }
    public function verDisciplinas(){

      $data['page_title'] = APP_NAME;
      $data['page_name'] = "Disciplinas";
      $data['page_functions'] = functions($this, "verDisciplinas");
      $this->views->getView($this,"verDisciplinas",$data);
        
    }

}