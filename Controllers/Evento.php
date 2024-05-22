<?php

class Evento extends Controllers{

    public function registroEvento(){

		$data['page_title'] = APP_NAME;
		$data['page_name'] = "Registro de Evento";
    $data['page_functions'] = functions($this, "registroEvento");
		$this->views->getView($this,"registroEvento",$data);

    }

}