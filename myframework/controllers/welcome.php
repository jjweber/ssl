<?php

class welcome extends AppController{

    public function __construct() {

        $this->getView("navigation", array("pagename"=>"welcome"));

        $this->getView("welcome");

        $this->getView("footer");

    }

}



?>