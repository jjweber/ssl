<?php

class auth extends AppController{

    public function __construct($parent) {

        $this->parent = $parent;
    }

    public function login() {


        if ( $_REQUEST[ "username" ] && $_REQUEST[ "password" ] ) {
            echo $_REQUEST[ "password" ]."<br>";


            $userEmail = $_REQUEST[ "username" ];
            $userPWD = sha1($_REQUEST[ "password" ]);

            try {
                $data = $this->parent->getModel( "users" )->select(
                    "select * from users where email = ?",
                    array($userEmail));
            } catch (PDOException $e) {
                echo $e->getMessage()."<br>";
                die();
            }


            if($data) {

                $_SESSION[ "loggedin" ] = 1;

                $_SESSION[ 'uname' ] = $_REQUEST[ "username" ];
                //$_SESSION[ 'upass' ] = $Password;
                //$_SESSION[ 'umessage' ] = $someMessage;

                header( "Location: /controller/greetingPage" );
            } else {
                header( "Location: /welcome/index?msg=Bad Login" );
            }

        } else {
            header( "Location: /welcome/index?msg=Bad Login" );
        }
        
    }


    public function logout()
    {
        session_destroy();
        header( "Location: /welcome" );
    }

}



?>