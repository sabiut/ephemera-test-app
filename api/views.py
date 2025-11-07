import socket
from datetime import datetime
from django.http import JsonResponse
from django.views.decorators.http import require_http_methods


@require_http_methods(["GET"])
def index(request):
    """Main endpoint that returns application information."""
    response_data = {
        'app': 'Ephemera Test App',
        'version': '3.0.0',
        'framework': 'Django',
        'status': 'healthy',
        'environment': 'production',
        'timestamp': datetime.now().isoformat(),
        'hostname': socket.gethostname(),
        'message': 'Hello from Ephemera preview environment!',
        'deployment_test': 'Testing Django deployment with Ephemera',
        'workflow_status': 'Django app with improved PR comments',
        'update_timestamp': datetime.now().strftime('%Y-%m-%d %H:%M:%S'),
        'features': [
            'auto_preview_environments',
            'github_integration',
            'kubernetes_deployment',
            'django_framework',
            'json_api_responses'
        ]
    }

    return JsonResponse(response_data)


@require_http_methods(["GET"])
def health(request):
    """Health check endpoint."""
    return JsonResponse({
        'status': 'healthy',
        'timestamp': datetime.now().isoformat()
    })
