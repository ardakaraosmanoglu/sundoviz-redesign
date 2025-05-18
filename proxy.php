<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log incoming request
error_log("Proxy request received: " . $_SERVER['REQUEST_METHOD']);

// Set headers to allow cross-origin requests and specify response as JSON
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Content-Type: application/json; charset=UTF-8');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Function to get data from the external API
function fetchApiData() {
    error_log("Fetching data from API...");
    $apiUrl = 'https://online.sundoviz.com/services/api.php';
    
    // Initialize cURL session
    $ch = curl_init($apiUrl);
    
    // Set cURL options
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
    ]);
    
    // Execute cURL session and get the response
    $response = curl_exec($ch);
    
    // Check for cURL errors
    if (curl_errno($ch)) {
        $error = curl_error($ch);
        curl_close($ch);
        error_log("cURL Error: " . $error);
        throw new Exception("cURL Error: " . $error);
    }
    
    // Get HTTP status code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    error_log("API Response Code: " . $httpCode);
    
    // Close cURL session
    curl_close($ch);
    
    // Check if response is valid
    if ($httpCode !== 200) {
        error_log("API Error Response: " . $response);
        throw new Exception("HTTP Error: " . $httpCode);
    }
    
    // Log raw response
    error_log("API Raw Response: " . substr($response, 0, 500) . "...");
    
    // Attempt to decode JSON response
    $decoded = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("JSON Decode Error: " . json_last_error_msg());
        throw new Exception("JSON Decode Error: " . json_last_error_msg());
    }
    
    return $decoded;
}

try {
    // Get API data
    $data = fetchApiData();
    
    // Validate data structure
    if (!is_array($data)) {
        error_log("Invalid data format: " . gettype($data));
        throw new Exception("Invalid data format received from API");
    }
    
    // Log success
    error_log("Successfully fetched and processed data");
    
    // Output the data
    echo json_encode($data);
    
} catch (Exception $e) {
    // Log the error
    error_log("API Error: " . $e->getMessage());
    
    // Return error response
    http_response_code(500);
    echo json_encode([
        'error' => true,
        'message' => 'An error occurred while fetching exchange rates: ' . $e->getMessage()
    ]);
}
?> 