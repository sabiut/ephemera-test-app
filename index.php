<?php
// Simple PHP application for testing Ephemera preview environments
header('Content-Type: application/json');

$response = [
    'app' => 'Ephemera Test App',
    'version' => '2.0.0',
    'status' => 'healthy',
    'environment' => getenv('APP_ENV') ?: 'production',
    'timestamp' => date('c'),
    'hostname' => gethostname(),
    'message' => 'Hello from Ephemera preview environment!',
    'deployment_test' => 'Testing end-to-end preview environment creation',
    'workflow_status' => 'Redis auth fixed - Celery workers operational',
    'update_timestamp' => date('Y-m-d H:i:s'),
    'redis_status' => 'Connected with TLS encryption',
    'celery_status' => 'Workers ready for tasks',
    'features' => [
        'auto_preview_environments',
        'github_integration',
        'kubernetes_deployment',
        'redis_tls_support',
        'celery_task_processing'
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);
