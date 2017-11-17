<?php

class api extends AppController {

    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    public function showApi()
    {
        $this->getNav("api");
        $data = $this->parent->getModel("apiModel")->googleBooks("Harry Potter");
        $this->getView("api", $data);
        $this->getView("footer");
    }


}



?>