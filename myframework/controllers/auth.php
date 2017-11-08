<?php

class auth extends AppController{

    public function __construct() {
    

    }

    public function login() {


        $user = preg_split( '/\r\n|\n|\r/', trim( file_get_contents( './assets/text_files/login_file.txt' )));
        foreach ( $user as $x => $x_value ) {               

            list( $Username, $Password, $someMessage ) = preg_split( '/\|+/', $x_value );

            if ( $_REQUEST[ "username" ] && $_REQUEST[ "password" ] ) {
                
                if ( $_REQUEST[ "username" ] == $Username && $_REQUEST[ "password" ] == $Password ) {
                    $_SESSION[ "loggedin" ] = 1;

                    $_SESSION[ 'uname' ] = $Username;
                    $_SESSION[ 'upass' ] = $Password;   
                    $_SESSION[ 'umessage' ] = $someMessage;                       

                    header( "Location: /controller/greetingPage" );
                } else {
                    header( "Location: /welcome/index?msg=Bad Login" );
                }
            } else {
                header( "Location: /welcome/index?msg=Bad Login" );            
            }
        }
    }


    public function logout()
    {
        session_destroy();
        header( "Location: /welcome" );
    }

}



?>