<?php
function arrayToJsonFile($array, $filePath) {
    $json = json_encode($array, JSON_PRETTY_PRINT);

    if ($json === false) {
        throw new Exception('Failed to encode array to JSON: ' . json_last_error_msg());
    }

    if (file_put_contents($filePath, $json) === false) {
        throw new Exception('Failed to write JSON to file: ' . $filePath);
    }

    return true;
}

// Example usage
$array = [
    "name" => "John Doe",
    "email" => "john.doe@example.com",
    "age" => 30
];

try {
    arrayToJsonFile($array, 'output.json');
    echo "Array successfully converted to JSON file.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
