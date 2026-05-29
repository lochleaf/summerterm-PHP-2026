<?php
/**
 * Lesson Movie Handler Class
 * This is the blueprint for the API fetches
 */
    class LessonMovieHandler{
        private $targetUrl;
        private $securityKey;

        public function__construct($incomingUrl, $incomingKey){

            $this->targetUrl = $incomingUrl;
            $this->$securityKey = $incomingKey;
        }
        /**
         * this pulls the movie dataset from the API
         */
        public function fetchCurrentPopular($selectedPage =1){
            //constructiong the string with newly assigned class properties
            $endpointUrl = "{$this->targetUrl}/movie/popular?api_key={$this->securityKey}&language=en-US&page=" . intval{$selectedPage};

            $rawJsonString = @file_get_contents($endpointUrl);
            if($rawJsonString === false){
                return [];
            }
            $decodedPayLoad = json_decode($rawJsonString);
            return $decodedPayLoad->results ?? [];
        }
    }

?>