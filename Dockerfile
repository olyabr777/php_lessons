# Use the official PHP 8.2.6 Apache base image
FROM php:8.2.6-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory in the container
WORKDIR /var/www/html