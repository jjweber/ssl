<?php

class about extends AppController{

    public function __construct($parent)
    {
        $this->parent = $parent;

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


/*
    public function showAddForm()
    {
        $this->getNav( "about" );
        $this->getView("addForm");
        //$this->getView("footer");

    }
*/

    public function addAction()
    {

    $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));
    header("Location:/about");

    }

/*
    public function showUpdateModel() {

        $this->getNav( "about" );
        $this->getView("deleteForm");
        //$this->getView("footer");
    }
*/

    public function deleteAction() {

        $itemName = $_GET["name"];

        $this->parent->getModel("fruits")->delete("DELETE FROM fruit_table WHERE name = :name", array(":name"=> $itemName));
        header("Location:/about");
    }


    public function updateAction() {


        $itemName = $_REQUEST["newName"];
        $itemId = $_REQUEST["id"];


        $this->parent->getModel("fruits")->update("UPDATE fruit_table SET name = :newName WHERE id= :id", array(":newName"=> $itemName, ":id"=> $itemId));
        header("Location:/about");
    }

}



?>