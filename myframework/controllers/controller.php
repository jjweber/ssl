<?php

class controller extends AppController{

    public function __construct() {
        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {
            
        } else {
            header("Location: /welcome");
        }
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
        $random = substr( md5(rand()), 0, 7);     
        $this->getView("contact",array("cap"=>$random));        
        $this->getView("footer");

    }

    public function contactRecv()
    {   


        if(@$_POST["captcha"] == @$_SESSION["captcha_code"]){
            
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
            
        }else{
            
            header("Location: /controller/contact");
            
        }

    }

    public function ajaxPars()
    {   
        if (!@$_REQUEST["captcha_val"] == null) {

            if (@$_REQUEST["captcha_val"] == @$_SESSION["captcha_code"]) {

                if (!@$_REQUEST["name"] == null AND filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
                    echo "welcome";
                } else {
                    echo "bad login";
                }
            } else {
                echo "Invalid captcha";
            }
        } else {
            echo "no captcha";
        }
    }
}
?>