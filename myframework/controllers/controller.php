<?php

class controller extends AppController{

    public function __construct() {

    }

    public function getNav($pagename, $data=array())
    {
        $menuItems = array(
            "greetingPage" => "Home",
            "api" => "Api",
            "gallery" => "Gallery",
            "about" => "About", 
            "contact" => "Contact" 
        );

        $this->getView("navigation", $menuItems, array("pagename"=>"$pagename"));
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

    public function greetingPage() {
        
        $this->getNav("greetingPage");
        $this->getView("greetingPage");
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

    public function contactRecv()
    {
        $this->getNav("contact");

        echo "<div id=\"formSubmitBody\" class=\"container\" style=\"margin-top:3rem\">";

            echo "<h1>Your Form Was Successfully Submitted!</h1>";

            echo "<div id=\"feedbackInfo\">";
                echo "<h2>Here is the information we got!</h2>";
                echo "<p>Name: ".$_POST["namefield"]."</p>";
                echo "<p>Email valid: ".$_POST["email"]."</p>";

                if (!$_POST["phone"]) {
                    echo "Phone Number: No Number Was Provided!<br>";
                } else {
                    echo "<p>Phone Number: ".$_POST["phone"]."</p>";
                }
                if (!empty($_POST["canCall"])) {
                    echo "Can Call: We will call you at the number provide!";
                } else {
                    echo "<p>Can Call: You chose not to let us call you so we will reply by email!<p>";            
                }

                echo "<p>Number Type: ".$_POST["formSelect"]."</p>";

                if (!$_POST["textfield"]) {
                    echo "<p>Text: You did not provide any text!</p>";
                } else {
                    echo "<p>Text: ".$_POST["textfield"]."</p><br>";
                }
                echo "<p>Best Time To Reach: ".$_POST["radio"]."</p>"; 
            echo "</div>";  
        echo "</div>";

        $this->getView("footer");
    }

    public function ajaxPars()
    {
        //var_dump($_REQUEST);

        if (!@$_REQUEST["name"] == null AND filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
            echo "welcome";
        } else {
            echo "bad login";
        }
    }
}
?>