<?php

class controller extends AppController{

    public function __construct() {

        $menuItems = array(
            "home" => "Home",
            "api" => "Api",
            "about" => "About", 
            "contact" => "Contact", 
            "location" => "Location" 
        );

        $this->getView("navigation", $menuItems);
        $this->getView("greetingBody");
        $this->getView("footer");

    }

}



?>