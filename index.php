<?php
// Simple PHP application for testing Ephemera preview environments
header('Content-Type: application/json');

$response = [
    'app' => 'Ephemera Test App',
    'version' => '1.1.0',
    'status' => 'healthy',
    'environment' => getenv('APP_ENV') ?: 'production',
    'timestamp' => date('c'),
    'hostname' => gethostname(),
    'message' => 'Hello from Ephemera preview environment!',
    'deployment_test' => 'Testing new deployment pipeline'
];

echo json_encode($response, JSON_PRETTY_PRINT);
