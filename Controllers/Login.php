<?php

class Login extends Controllers{

    public function login(){

        $data['page_tag'] = APP_NAME;
		$data['page_title'] = APP_NAME;
		$data['page_name'] = "Login";
		$this->views->getView($this,"login",$data);
    }

}