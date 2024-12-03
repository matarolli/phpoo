# Baseado na imagem PHP com Apache
FROM php:8.1-apache

# Instalar a extensão mysqli
RUN docker-php-ext-install mysqli
