<?php

class youTubeApi {

    public function  __construct($parent)
    {
        $this->db = $parent->db;
    }


    public function youTubeVideos() {
        //Get videos from channel by YouTube Data API
        $baseYTURL = 'https://www.googleapis.com/youtube/v3/search?';
        $part = 'snippet';
        //$channelID  = 'UCPsopTKQfSgW9XdYkKA6Gdw';
        $searchQuery= 'Webdesign';
        $type = 'video';
        $maxResults = 20;
        $API_key    = 'AIzaSyB6fDbzn-_44vn0_zYHiVWkRnOL5xbhK60';

        //$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
        $videoList = json_decode(file_get_contents(''.$baseYTURL.'part='.$part.'&q='.$searchQuery.'&type='.$type.'&maxResults='.$maxResults.'&key='.$API_key.''));


        return $videoList;

    }

    public function youTubeSearch($query = '') {
        //Get videos from channel by YouTube Data API
        $baseYTURL = 'https://www.googleapis.com/youtube/v3/search?';
        $part = 'snippet';
        //$channelID  = 'UCPsopTKQfSgW9XdYkKA6Gdw';
        $searchQuery=  str_replace(' ', '', $query);
        $type = 'video';
        $maxResults = 20;
        $API_key    = 'AIzaSyB6fDbzn-_44vn0_zYHiVWkRnOL5xbhK60';

        //$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
        $videoList = json_decode(file_get_contents(''.$baseYTURL.'part='.$part.'&q='.$searchQuery.'&type='.$type.'&maxResults='.$maxResults.'&key='.$API_key.''));


        return $videoList;

    }
}

?>
