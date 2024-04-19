<?php

class Home extends Controllers{

    public function home(){

        $data['page_tag'] = APP_NAME;
		$data['page_title'] = APP_NAME;
		$data['page_name'] = "Home";
        $data['page_functions'] = functions($this, "home");

		$this->views->getView($this,"home",$data);
    }

}