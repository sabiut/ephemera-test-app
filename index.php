<?php
// Simple PHP application for testing Ephemera preview environments
header('Content-Type: application/json');

$response = [
    'app' => 'Ephemera Test App',
    'version' => '1.3.0',
    'status' => 'healthy',
    'environment' => getenv('APP_ENV') ?: 'production',
    'timestamp' => date('c'),
    'hostname' => gethostname(),
    'message' => 'Hello from Ephemera preview environment!',
    'deployment_test' => 'Testing webhook integration',
    'webhook_status' => 'Webhook configured - testing synchronize event',
    'update_timestamp' => date('Y-m-d H:i:s'),
    'features' => [
        'auto_preview_environments',
        'github_integration',
        'kubernetes_deployment'
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
