<?php

class Usuario extends Controllers{
    public function __construct(){
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
            header('Location: ' . base_url() . '/Login');
            die();
		    }
    }
    public function registroUsuario($id){

      $data['id_usuario'] = intval($id);
      $data['page_title'] = APP_NAME;

      if( $data['id_usuario'] > 0) $data['page_name'] = "Actualizar Usuario";
      else $data['page_name'] = "Registro de Usuario";

      $data['page_functions'] = functions($this, "registroUsuario");
      $this->views->getView($this,"registroUsuario",$data);

    }
    public function verUsuarios(){

      $data['page_title'] = APP_NAME;
      $data['page_name'] = "Usuarios";
      $data['page_functions'] = functions($this, "verUsuarios");
      $this->views->getView($this,"verUsuarios",$data);
        
    }

    public function setUsuario(){
      if($_POST){
        $id_usuario = intval($_POST['id_usuario']);
        $nombre = strClean($_POST['nombre']);
        $descripcion = strClean($_POST['descripcion']);

        
        if(empty($nombre) || empty($descripcion)){
          $arrResponse = array('status' => false, "title" => "Error!", "msg" => "Revise los campos!");
          echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
          die();
      }
      if($id_usuario == 0) {
        $insert = $this->model->insertUsuario($nombre, $descripcion);
        $msg = "Usuario actualizada correctamente!";
      }
      else {
        $insert = $this->model->updateUsuario($id_usuario, $nombre, $descripcion);
        $msg = "Usuario creada correctamente!";
      }

      if($insert > 0){
          $arrResponse = array("status" => true, "title" => "Exito!", "msg" => $msg);
      }else{
          $arrResponse = array("status" => false, "title" => "Usuario ya creada!", "msg" => "Revise sus datos!");
      }
        
      echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
      
    }
      die();
    }

    public function getUsuarios(){

      $arrData = $this->model->selectUsuarios();

      for ($i=0; $i < count($arrData); $i++) { 
        $arrData[$i]['options'] = '<a class="btn btn-primary" href="'.base_url().'/Usuario/registroUsuario/'.$arrData[$i]['id_usuario'].'">Editar</a>';
      }

      echo json_encode($arrData, JSON_UNESCAPED_UNICODE);

    }

    public function getUsuario($id){
      
      $arrData = $this->model->selectUsuario($id);

      echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
    }

}