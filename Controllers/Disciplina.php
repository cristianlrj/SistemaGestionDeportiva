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

    public function setDisciplina(){
      if($_POST){
        $nombre = strClean($_POST['nombre']);
        $descripcion = strClean($_POST['descripcion']);

        
        if(empty($nombre) || empty($descripcion)){
          $arrResponse = array('status' => false, "title" => "Error!", "msg" => "Revise los campos!");
          echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
          die();
      }

      $insert = $this->model->insertDisciplina($nombre, $descripcion);

      if($insert > 0){
          $arrResponse = array("status" => true, "title" => "Exito!", "msg" => "Disciplina creada correctamente!");
      }else{
          $arrResponse = array("status" => false, "title" => "Disciplina ya creada!", "msg" => "Revise sus datos!");
      }
        
      echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
      
    }
      die();
    }

    public function getDisciplinas(){

      $arrData = $this->model->selectDisciplinas();

      for ($i=0; $i < count($arrData); $i++) { 
        $arrData[$i]['options'] = "elimina, editar, ver";
      }

      echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

    }

}