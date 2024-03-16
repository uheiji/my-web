# Use the official PHP image as a base image
FROM php:7.2-apache

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql

