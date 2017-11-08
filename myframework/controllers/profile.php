<?php

class profile extends AppController{

    public function __construct() {
       if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {
        
       } else {
           header("Location: /welcome");
       }
    }

    public function index() {
        $menuItems = array(
            "greetingPage" => "Home",
            "api" => "Api",
            "gallery" => "Gallery",
            "about" => "About", 
            "contact" => "Contact" 
        );      
        $this->getView("navigation", $menuItems, array( "pagename" => "profile" ));
        $this->getView("profile");
        $this->getView("footer");        
    }

    public function update()
    {
       if ($_FILES["img"]["name"] != null) {
    
            $imageFileType = pathinfo("assets/images/".$_FILES["img"]["name"], PATHINFO_EXTENSION);

            if (file_exists("assets/images/".$_FILES["img"]["name"])) {
                header("Location: /profile?msg=File Exists");
                echo "Sorry, file exists";
            
            } else {
                
                if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
                    header("Location: /profile?msg=Invalid Type");
                    echo "Sorry, file type is not allowed!";
                } else {
                    
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], "assets/images/".$_FILES["img"]["name"])) {
                        header("Location: /profile?msg=File Uploaded");
                        echo "File uploaded!";
                    } else {
                        header("Location: /profile?msg=Error Uploading");
                        echo "Error uploading!";                       
                    }

                }
            }

       } else {
            header("Location: /profile?msg=Null Value");
       }
    }

}

?>