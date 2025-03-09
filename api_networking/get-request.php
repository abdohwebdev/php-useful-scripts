<?php
function sendGetRequest($url) {
    $ch = curl_init($url);

    // Set the cURL option to return the response as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === false) {
        return 'cURL Error: ' . curl_error($ch);
    } else {
        return $response;
    }

}

// Example usage
$url = 'https://jsonplaceholder.typicode.com/posts/1';
$response = sendGetRequest($url);
echo 'Response: ' . $response;
?>