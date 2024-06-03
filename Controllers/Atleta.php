<?php

class Atleta extends Controllers{
    public function __construct(){
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: ' . base_url() . '/Login');
            die();
		    }
    }
    public function registroAtleta(){

      $data['page_title'] = APP_NAME;
      $data['page_name'] = "Registro de Atleta";
      $data['page_functions'] = functions($this, "registroAtleta");
      $this->views->getView($this,"registroAtleta",$data);

    }
    public function verAtletas(){

      $data['page_title'] = APP_NAME;
      $data['page_name'] = "Atletas";
      $data['page_functions'] = functions($this, "verAtletas");
      $this->views->getView($this,"verAtletas",$data);
        
    }

    public function setAtleta(){
      if($_POST){
        $cedula = intval($_POST['cedula']);
        $talla_zapato = intval($_POST['talla_zapato']);
        $talla_franela = strClean($_POST['talla_franela']);
        $talla_pantalon = strClean($_POST['talla_pantalon']);
        $estatura = intval($_POST['estatura']);
        $peso = intval($_POST['peso']);
        $alergias = strClean($_POST['alergias']);
        $patologias = strClean($_POST['patologias']);
        $disciplina = intval($_POST['disciplina']);
        $tipo_sangre = strClean($_POST['tipo_sangre']);

        
      //   if(empty($nombre) || empty($descripcion)){
      //     $arrResponse = array('status' => false, "title" => "Error!", "msg" => "Revise los campos!");
      //     echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
      //     die();
      // }

      $insert = $this->model->insertAtleta($cedula, $talla_zapato, $talla_franela, $talla_pantalon, $estatura, $peso, $alergias, $patologias, $disciplina, $tipo_sangre);

      if($insert > 0){
          $arrResponse = array("status" => true, "title" => "Exito!", "msg" => "Atleta registrado correctamente!");
      }else{
          $arrResponse = array("status" => false, "title" => "Atlteta ya registrado!", "msg" => "Revise sus datos!");
      }
        
      echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
      
    }
      die();
    }


}