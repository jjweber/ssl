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


}



?>