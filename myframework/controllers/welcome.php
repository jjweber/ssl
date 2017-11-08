<?php

class welcome extends AppController{

    public function __construct() {
        if (!@$_SESSION["loggedin"] && !@$_SESSION["loggedin"]==1) {
            
        } else {
            header( "Location: /controller/greetingPage" );
        }
    }

    public function index() {
        $this->getView( "navigation" );
        $this->getView( "authorization" );
        $this->getView( "footer" );
    }

    public function ajaxAuthPars()
    {
        $user = preg_split( '/\r\n|\n|\r/', trim( file_get_contents( './assets/text_files/login_file.txt' )));
        foreach ($user as $x => $x_value) {               
            list( $Username, $Password, $someMessage ) = preg_split( '/\|+/', $x_value );
            
            if ( @$_REQUEST[ "username" ] And  @$_REQUEST[ "password" ]) {
                
                if ( @$_REQUEST[ "username" ] == $Username AND @$_REQUEST[ "password" ] == $Password ) {
                    echo "welcome";
                } 

            } else {
                echo "bad login";
            }
        
        }
    }

        
}



?>