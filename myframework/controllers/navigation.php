<?php

class navigation extends AppController{

    public function __construct() {

        $this->getView("header", array("pagename"=>"navigation"));
        $this->getView("navigation");

    }

}



?>