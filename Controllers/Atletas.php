<?php

class Atletas extends Controllers{

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

}