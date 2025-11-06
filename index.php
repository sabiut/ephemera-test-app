<?php
// Simple PHP application for testing Ephemera preview environments
header('Content-Type: application/json');

$response = [
    'app' => 'Ephemera Test App',
    'version' => '1.5.0',
    'status' => 'healthy',
    'environment' => getenv('APP_ENV') ?: 'production',
    'timestamp' => date('c'),
    'hostname' => gethostname(),
    'message' => 'Hello from Ephemera preview environment!',
    'deployment_test' => 'Testing GitHub Actions workflow - Redis SSL fixed!',
    'workflow_status' => 'Production deployment successful',
    'update_timestamp' => date('Y-m-d H:i:s'),
    'redis_status' => 'Connected with TLS encryption',
    'features' => [
        'auto_preview_environments',
        'github_integration',
        'kubernetes_deployment',
        'redis_tls_support'
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
