<?php

class auth extends AppController{

    public function __construct() {
    

    }

    public function login() {

        if ($_REQUEST["username"] && $_REQUEST["password"]) {
            
            if ($_REQUEST["username"]=="jjweber01" && $_REQUEST["password"]=="Weber1005") {
                $_SESSION["loggedin"]=1;
                header("Location: /controller/greetingPage");
            } else {
                header("Location: /welcome/index?msg=Bad Login");
            }
        } else {
            header("Location: /welcome/index?msg=Bad Login");            
        }

    }


    public function logout()
    {
        session_destroy();
        header("Location: /welcome");
    }

}



?>