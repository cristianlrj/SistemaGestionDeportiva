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
    public function getPerson($cedula){

        $str = file_get_contents('data.json');

        $arr = json_decode($str);

        foreach ( $arr as $obj ){
            if ( $obj->cedula == $cedula) {
                echo json_encode($obj, JSON_UNESCAPED_UNICODE);
            }
        }
    }

    public function getPersons(){

        $str = file_get_contents('data.json');

        $arr = json_decode($str);

        echo json_encode($arr, JSON_UNESCAPED_UNICODE);
            
        
    }
}