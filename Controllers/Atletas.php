<?php

class Atletas extends Controllers{

    public function verAtletas(){

        $data['page_tag'] = APP_NAME;
		$data['page_title'] = APP_NAME;
		$data['page_name'] = "Atletas";
        $data['page_functions'] = functions($this, "verAtletas");
		$this->views->getView($this,"verAtletas",$data);
    }

}