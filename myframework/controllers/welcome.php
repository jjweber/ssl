<?php

class welcome extends AppController{

    public function __construct() {
        if (!@$_SESSION["loggedin"] && !@$_SESSION["loggedin"]==1) {
            
        } else {
            header("Location: /controller/greetingPage");
        }
    }

    public function index() {
        $this->getView("navigation");
        $this->getView("authorization");
        $this->getView("footer");
    }

    public function ajaxAuthPars()
    {
        if (@$_REQUEST["username"]=="jjweber01" AND @$_REQUEST["password"]=="Weber1005") {
            echo "welcome";
        } else {
            echo "bad login";
        }
    }

}



?>