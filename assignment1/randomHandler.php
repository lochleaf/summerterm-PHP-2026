<?php
/**
 * randomHandler Class
 * Blueprint for executing basic API fetches from the files content
 */
class randomHandler {
    private $targetUrl;

    public function __construct($incomingUrl) {
        $this->targetUrl = $incomingUrl;
    }

    /**
     * Pulls movie datasets from the API
     */
    public function fetchInfo() {
        // Constructing string with newly assigned class properties
        $rawJsonString = @file_get_contents($this->targetUrl);
        
        if ($rawJsonString === false) {
            return [];
        }

        $decodedPayload = json_decode($rawJsonString);
        return $decodedPayload->results ?? [];
    }
}