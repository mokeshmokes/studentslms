# Use official PHP image with Apache
FROM php:8.2-apache

# Install mysqli and other dependencies
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev libonig-dev libxml2-dev zip unzip && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files to Apache root
COPY . /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html

# Expose default HTTP port
EXPOSE 80
