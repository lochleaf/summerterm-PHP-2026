<?php
/**
 * LessonMovieHandler Class
 * Blueprint for executing basic API fetches
 */
class dogHandler {
    private $targetUrl;
    private $securityKey;

    public function __construct($incomingUrl, $incomingKey) {
        $this->targetUrl = $incomingUrl;
        $this->securityKey = $incomingKey;
    }

    /**
     * Pulls movie datasets from the API
     */
    public function fetchInfo($firstName = " ") {
        // Constructing string with newly assigned class properties
        $endpointUrl = "{$this->targetUrl}/images/search?api_key={$this->securityKey}&language=en-US&page=" . intval($selectedPage);
        
        $rawJsonString = @file_get_contents($endpointUrl);
        
        if ($rawJsonString === false) {
            return [];
        }

        $decodedPayload = json_decode($rawJsonString);
        return $decodedPayload->results ?? [];
    }
}