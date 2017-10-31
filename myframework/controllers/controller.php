<?php

class controller extends AppController{

    public function __construct() {

    }

    public function getNav($pagename, $data=array())
    {
        $menuItems = array(
            "index" => "Home",
            "api" => "Api",
            "gallery" => "Gallery",
            "about" => "About", 
            "contact" => "Contact" 
        );

        $this->getView("navigation", $menuItems, array("pagename"=>"$pagename"));
    }

    
    public function index() {

        $this->getNav("index");
        $this->getView("greetingBody");
        $this->getView("footer");
    }

    public function api() {

        $this->getNav("api");
        $this->getView("api");
        $this->getView("footer");

    }

    public function gallery() {
        
        $this->getNav("gallery");
        $this->getView("gallery");
        $this->getView("footer");

    }

    public function about() {
        
        $this->getNav("about");
        $this->getView("about");
        $this->getView("footer");

    }

    public function contact() {
        
        $this->getNav("contact");
        $this->getView("contact");
        $this->getView("footer");

    }
}
?>