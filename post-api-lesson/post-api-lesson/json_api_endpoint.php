<?php
/**
 * json_api_endpoint.php
 * -------------------------
 * Building a POST API endpoint that speaks JSON in and JSON out.
 *
 * This is the "Create" endpoint of a small posts API. It:
 *   1. Reads a raw JSON body (not $_POST — no form was submitted)
 *   2. Validates the fields it expects and whitelists them
 *   3. Inserts the record using a prepared statement
 *   4. Responds with a JSON body and an appropriate HTTP status code
 *
 * Test it from the command line:
 *   curl -X POST http://localhost/03_json_api_endpoint.php \
 *        -H "Content-Type: application/json" \
 *        -d '{"title":"Hello API","body":"My first post"}'
 *
 * Or use 05_curl_client.php, written for this exact endpoint.
 */
