<?php

class galleryApi extends AppController {

    public function __construct($parent)
    {
        $this->parent = $parent;
    }


    public function showYouTubeApi()
    {
        $this->getNav("gallery");
        $data = $this->parent->getModel("youTubeApi")->youTubeVideos();
        $this->getView("gallery", $data);
        $this->getView("footer");
    }

    public function newSearchQuery() {
        $query = $_REQUEST["videoSearch"];

        $this->getNav("gallery");
        $data = $this->parent->getModel("youTubeApi")->youTubeSearch($query);
        $this->getView("gallery", $data);
        $this->getView("footer");
    }


}



?>