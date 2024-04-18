<?php

class Home extends Controllers{

    public function home(){

        $data['page_tag'] = APP_NAME;
		$data['page_title'] = APP_NAME;
		$data['page_name'] = "Home";
        $data['functions'] = "admin";
		$this->views->getView($this,"home",$data);
    }

}