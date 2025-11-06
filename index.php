<?php
// Simple PHP application for testing Ephemera preview environments
header('Content-Type: application/json');

$response = [
    'app' => 'Ephemera Test App',
    'version' => '1.6.0',
    'status' => 'healthy',
    'environment' => getenv('APP_ENV') ?: 'production',
    'timestamp' => date('c'),
    'hostname' => gethostname(),
    'message' => 'Hello from Ephemera preview environment!',
    'deployment_test' => 'Testing improved PR comment formatting',
    'workflow_status' => 'All systems operational',
    'update_timestamp' => date('Y-m-d H:i:s'),
    'redis_status' => 'Connected with TLS encryption',
    'preview_url_status' => 'Clickable links enabled',
    'features' => [
        'auto_preview_environments',
        'github_integration',
        'kubernetes_deployment',
        'redis_tls_support',
        'clickable_preview_urls'
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
