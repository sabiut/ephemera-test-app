# Ephemera Test App

This is a test application for the Ephemera platform.

It deploys two simple services:
- **web**: Nginx web server on port 80
- **app**: Python HTTP server on port 8000

Used to test docker-compose.yml parsing and Kubernetes deployment.

## What This Tests

This application tests:
- Automatic PR detection via GitHub webhook
- Docker Compose parsing and conversion to Kubernetes manifests
- Namespace creation with resource quotas
- Service deployment to GKE cluster
- Service account authentication for kubectl access

## Testing Preview Environment

This PR tests the automatic preview environment deployment on GKE.

**Testing on:** Google Cloud Platform (GKE)
**Cluster:** ephemera-dev (us-central1)
**Domain:** *.devpreview.app

Testing with service account authentication - full workflow test!
# Testing Ingress with HTTPS
Testing HTTPS Ingress with cert-manager
Final Ingress test with correct DNS
Testing with correct devpreview.app domain
