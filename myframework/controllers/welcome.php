<?php

class welcome extends AppController
{

    // Protected. If user is signed it returns to greetingPage.
    public function __construct()
    {
        if (!@$_SESSION["loggedin"] && !@$_SESSION["loggedin"] == 1) {

        } else {
            header("Location: /controller/greetingPage");
        }
    }

    public function index()
    {
        $this->getView("navigation");
        $this->getView("authorization");
        $this->getView("footer");
    }

    public function ajaxAuthPars()
    {

        if (@$_REQUEST["username"] And @$_REQUEST["password"]) {

            if (@$_REQUEST["username"] == "jjweber@fullsail.edu") {
                echo "welcome";
            } else {
                echo "bad login";
            }

        }





    }
}



?>