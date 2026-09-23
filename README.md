# Ephemera Test App

This is a test application for the Ephemera platform.

It deploys two services:
- **web**: the PHP app in this repository, built for every commit by `.github/workflows/preview-image.yml` and pushed to `ghcr.io/<owner>/ephemera-test-app:<commit>` (the repository it runs in, so forks push their own). The compose file names it `ghcr.io/${EPHEMERA_REPOSITORY}:${EPHEMERA_SHA}`. The page reports the `commit` it was built from.
- **echo**: `hashicorp/http-echo`, a stock image that is not built from this repository.

Used to test docker-compose.yml parsing and Kubernetes deployment.
# Testing workflow
# Tables created

## Try it on your own account

1. Fork this repository.
2. In your fork, open the **Actions** tab and enable workflows (GitHub turns them off in forks).
3. Install the Ephemera GitHub App on your fork and sign in to the Ephemera dashboard.
4. On a new branch, change the `message` in `index.php` and open a pull request in your fork.
5. The first build creates the package `ephemera-test-app` in your account, private by default. Make it public (**Packages → ephemera-test-app → Package settings → Change visibility**), then click **Retry preview** in the dashboard.
6. Open the link Ephemera posts on the pull request. Every push after that updates it.
