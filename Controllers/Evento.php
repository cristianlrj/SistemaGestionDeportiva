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
      $data['page_functions'] = functions($this, "verEvento");
      $this->views->getView($this,"verEvento",$data);
  
    }

    public function setEvento(){
      if ($_POST) {
          $nombre = strClean($_POST['nombre']);
          $fecha_inicio = $_POST['fecha_inicio'];
          $fecha_fin = $_POST['fecha_fin'];
          $disciplinas = $_POST['disciplinas']; // Aquí se asume que `disciplinas` es un array
          $lugar = strClean($_POST['lugar']);
          
          // Verificar que los campos necesarios no estén vacíos
          if (empty($nombre) || empty($fecha_inicio) || empty($fecha_fin) || empty($disciplinas) || empty($lugar)) {
              $arrResponse = array('status' => false, "title" => "Error!", "msg" => "Revise los campos!");
              echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
              die();
          }
  
          // Insertar el evento
          $insert = $this->model->insertEvento($nombre, $fecha_inicio, $fecha_fin, $disciplinas, $lugar);
  
          if ($insert > 0) {
              $arrResponse = array("status" => true, "title" => "Éxito!", "msg" => "Evento registrado correctamente!");
          } else {
              $arrResponse = array("status" => false, "title" => "Evento ya registrado!", "msg" => "Revise sus datos!");
          }
  
          echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
      }
      die();
  }

}