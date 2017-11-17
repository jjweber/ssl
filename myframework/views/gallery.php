<div id="searchContainer" class="">
    <div id="searchBox">
        <form id="searchForm">
            <div id="inputContainer">
                <div id="inputInners">
                    <input type="text" id="videoSearch" name="videoSearch" placeholder="Search for Something..." />
                </div>
            </div>
            <button id="searchBtn" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>
<div id="ytContainer" class="container" >

    <div id="contentContainer" class="row">

        <div id="mainVideoContent" class="col-xs-12 col-sm-8 col-md-8 video-container">
            <div id="playerContainer">

            <iframe id="featuredVideo" src="https://www.youtube.com/embed/<?php echo $data->items[0]->id->videoId; ?>" frameborder="0" allowfullscreen=""></iframe>

            </div>
        </div>


        <div id="sidebar" class="col-xs-12 col-sm-4 col-md-6 "><div>

                <ul id="relatedVideos" style="padding: 0px">
                    <?php

                    foreach ($data->items as $video) {
                        $title = $video->snippet->title;
                        $description = $video->snippet->description;
                        $thumbnail = $video->snippet->thumbnails->high->url;
                        $videoId = $video->id->videoId;
                        $date = $video->snippet->publishedAt;
                        $channelTitle = $video->snippet->channelTitle;
                    ?>



                    <li id="individualVideo" style="list-style-type: none; margin-bottom: 10px; background-color: #FFF">
                        <div id="indivVideoContent" class="container">
                            <span style="cursor: pointer; margin-bottom: 10px" onclick="switchVideo('<?php echo $videoId; ?>');">
                                <div class="row" id="vid_<?php echo $videoId; ?>" style="padding: 8px; border-bottom: 1px solid #FFF;">
                                    <div id="thumbnailContainer" class="image col-md-4 col-lg-4">
                                        <a id="thumbnailLink">
                                            <div id="thumbnail">
                                                <img id="videoImg" src="https://i.ytimg.com/vi/<?php echo $videoId; ?>/default.jpg">
                                            </div>
                                        </a>
                                    </div>
                                    <div id="descriptionContent" class="container text col-md-7 col-lg-7">

                                        <h3 id="videoTitle">
                                            <span id="nameOfVideo"><?php echo $title; ?></span>
                                        </h3>
                                        <div id="metaContainer">
                                            <div id="channelContent">
                                                <div id="channelContentInners">
                                                    <p id="nameOfChannel" class="date"><?php echo $channelTitle; ?></p>
                                                </div>
                                                <div id="separator" class="style-scope ytd-video-meta-block">•</div>
                                                <h3 id="viewsContent">
                                                    <span id="viewsText"><?php echo "Hello"; ?></span>
                                                </h3>
                                                <div id="dateContent">
                                                    <span id="dateOfPost">
                                                        <?php echo date('M j, Y', strtotime($date)); ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </li>

                    <?php } ?>


                </ul>
            </div>


    </div>


</div><!--  /.container  -->














<?php

/*
foreach($videoList->items as $item){
    //Embed video
    if(isset($item->id->videoId)){
        echo '<div class="youtube-video">
                <iframe width="100%" height="450px" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                <h2 style="font-size: 16px">'. $item->snippet->title .'</h2>
                <h2 >'.$item->snippet->channelId.'</h2>


            </div>';
    }
}

*/
?>