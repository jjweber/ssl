<?php

class welcome extends AppController{

    public function __construct() {
       
    }

    public function index() {

        $this->getView("welcome");

    }

}



?>