<?php

class Api extends Controllers{

    public function __construct(){
        parent::__construct();
        session_start();
        if (empty($_SESSION['login'])) {
			//header('Location: ' . base_url() . '/Login');
			die();
		}
    }
    public function getPersona($cedula){

        $str = file_get_contents('data.json');

        $arr = json_decode($str);

        foreach ( $arr as $obj ){
            if ( $obj->cedula == $cedula) {
                echo json_encode(array("status" => true, "data" => $obj), JSON_UNESCAPED_UNICODE);
            }
        }
    }
}