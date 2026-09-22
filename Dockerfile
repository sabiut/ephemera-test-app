FROM php:8.2-apache

# The commit this image was built from, shown on the page so a preview
# visibly proves which code it runs.
ARG GIT_SHA=unknown
ENV GIT_SHA=${GIT_SHA}

# Enable Apache modules
RUN a2enmod rewrite

# Copy application files
COPY index.php /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Health check
HEALTHCHECK --interval=30s --timeout=3s --start-period=5s --retries=3 \
    CMD curl -f http://localhost/ || exit 1

# Start Apache
CMD ["apache2-foreground"]
