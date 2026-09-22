# Ephemera Test App

This is a test application for the Ephemera platform.

It deploys two services:
- **web**: the PHP app in this repository, built for every commit by `.github/workflows/preview-image.yml` and pushed to `ghcr.io/sabiut/ephemera-test-app:<commit>`. The page reports the `commit` it was built from.
- **echo**: `hashicorp/http-echo`, a stock image that is not built from this repository.

Used to test docker-compose.yml parsing and Kubernetes deployment.
# Testing workflow
# Tables created
