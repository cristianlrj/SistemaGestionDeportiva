<?php

class Login extends Controllers{
    public function __construct(){
        parent::__construct();
        session_start();
        if (isset($_SESSION['login'])) {
			header('Location: ' . base_url() . '/Home');
			die();
		}
    }
    public function login(){

        $data['page_tag'] = APP_NAME;
		$data['page_title'] = APP_NAME;
		$data['page_name'] = "Login";
        $data['page_functions'] = functions($this, "login");
		$this->views->getView($this,"login",$data);
    }

    public function loginUser(){
        if($_POST){
            $email = strtolower(strClean($_POST["email"]));
            $clave = hash("SHA256", $_POST["clave"]);

            if(empty($email) || empty($clave)){
                $arrResponse = array('status' => false, "title" => "Error!", "msg" => "Revise los campos!");
                echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
                die();
            }

            $requestUser = $this->model->sessionLogin($email, $clave);

            if($requestUser){
                
                $_SESSION['login'] = true;
                $_SESSION['idUser'] = $requestUser['idusuario'];
                $_SESSION['nameUser'] = $requestUser['nombre'];

                $arrResponse = array("status" => true);
            }else{
                $arrResponse = array("status" => false, "title" => "Email o Contraseña Incorrecto!", "msg" => "Revise sus datos!");
            }

            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

}