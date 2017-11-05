<?php

class profile extends AppController{

    public function __construct() {
       if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {
        
       } else {
           header("Location: /welcome");
       }
    }

    public function index() {

        $this->getView("navigation");
        echo "This is a protected area";
    }

}



?>