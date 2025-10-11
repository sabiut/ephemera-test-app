# Ephemera Test App

This is a test application for the Ephemera platform.

It deploys two simple services:
- **web**: Nginx web server on port 80
- **app**: Python HTTP server on port 8000

Used to test docker-compose.yml parsing and Kubernetes deployment.

## Testing Preview Environment

This PR tests the automatic preview environment deployment on GKE.

**Testing on:** Google Cloud Platform (GKE)
**Cluster:** ephemera-dev (us-central1)
**Domain:** *.devpreview.app
Rebuild test
Test with gcloud auth
