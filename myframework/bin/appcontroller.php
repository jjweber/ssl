<?php


session_start();
class AppController{


    public function __construct($urlPathParts, $config){


        //$this->db = new PDO("mysql:dbname=".$config["dbname"].";", $config["dbuser"], $config["dbpass"]);

        try {
            $this->db = new PDO("mysql:dbname=".$config["dbname"].";", $config["dbuser"], $config["dbpass"]);
            $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch (PDOException $e) {
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND)."<br>";
            die();
        }


        $this->urlPathParts = $urlPathParts;

        if ($urlPathParts[0]) {           
            include './controllers/'.$urlPathParts[0].".php";

            $appcon = new $urlPathParts[0]($this);

            if (isset($urlPathParts[1])) {              
                $appcon->$urlPathParts[1]();
            } else {
                $methodVariable = array($appcon, 'index');

                if (is_callable($methodVariable, false, $callable_name)) {
                    $appcon->index($this);
                }
            }

        } else {
            include './controllers/'.$config["defaultController"].".php";
            $appcon = new $config['defaultController']($this);
            if (isset($urlPathParts[1])) {
                $appcon->config['defaultController'][1]();
            } else {
                $methodVariable = array($appcon, 'index');
                
                if (is_callable($methodVariable, false, $callable_name)) {
                    $appcon->index($this);
                }
            }
        }

    }



    public function getNav( $pagename, $data = array() )
    {
        $menuItems = array(
            "greetingPage" => "Home",
            "api" => "Api",
            "gallery" => "Gallery",
            "about" => "About",
            "contact" => "Contact"
        );

        $this->getView( "navigation", $menuItems, array( "pagename" => "$pagename" ));
    }

    public function getView($page, $data=array(), $data2=array()) {

        
        require_once './views/'.$page.".php";

    }

    public function getModel($page) {

        require_once './models/'.$page.".php";
        $model = new $page($this);
        return $model;
        
    }

}

?>