# Ephemera Test App

This is a Django-based test application for the Ephemera platform.

## Features

- Django 4.2 web framework
- JSON API endpoints
- Health check endpoint
- Gunicorn WSGI server
- Docker containerization

## Endpoints

- `/` - Main endpoint returning application information
- `/health` - Health check endpoint

## Local Development

```bash
# Install dependencies
pip install -r requirements.txt

# Run migrations
python manage.py migrate

# Start development server
python manage.py runserver
```

## Docker

```bash
# Build image
docker build -t ephemera-test-app .

# Run container
docker run -p 80:80 ephemera-test-app
```

## Deployment

This application is automatically deployed to Ephemera preview environments when pull requests are created.
