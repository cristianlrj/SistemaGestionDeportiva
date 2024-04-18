<?php

class Errors extends Controllers{

    public function notFound(){

        $data['page_tag'] = NOMBRE_EMPESA;
		$data['page_title'] = NOMBRE_EMPESA;
		$data['page_name'] = "Error";
        $data['functions'] = "admin";
		$this->views->getView($this,"error",$data);
    }

}

$notFound = new Errors();
$notFound->notFound();