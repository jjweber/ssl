<?php

class about extends AppController{

    public function __construct($parent)
    {
        $this->parent = $parent;

        // echo "<br>HERE";

        if(isset($_POST["id"])) {
            $id = $_POST["id"];
            // echo "<br>ID: $id<br>";
        }

        $this->showList();
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



    public function showList()
    {
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
        $this->getNav( "about" );
        $this->getView("about", $data);
        $this->getView("footer");
    }

    public function addAction()
    {

    $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));
    header("Location:/about");

    }

    public function deleteAction() {

        $itemName = $_GET["name"];

        $this->parent->getModel("fruits")->delete("DELETE FROM fruit_table WHERE name = :name", array(":name"=> $itemName));
        header("Location:/about");
    }

    /*
        public function showUpdateModel() {

            $this->getNav( "about" );
            $this->getView("deleteForm");
            //$this->getView("footer");
        }
    */

    public function updateAction() {
        $itemName = $_REQUEST["name"];
        $itemId = $_REQUEST["id"];

        $this->parent->getModel("fruits")->update("UPDATE fruit_table SET name = :newName WHERE id= :id", array(":newName"=> $itemName, ":id"=> $itemId));
        header("Location:/about");
    }





    public function updateAction2() {

        //$itemId=$_POST['id'];
        //$itemName=$_POST['value'];
        //edit_ajax($itemId,$itemName);

        $itemId = $_POST['id_val'];
        $itemName = $_POST['name_val'];


        $this->parent->getModel("fruits")->update("UPDATE fruit_table SET name = :newName WHERE id= :id", array(":newName"=> $itemName, ":id"=> $itemId));
        header("Location:/about");
    }

}



?>