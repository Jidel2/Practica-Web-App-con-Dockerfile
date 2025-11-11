# Imagen oficial de PHP 8 con Apache
FROM php:8.3-apache

# Instala la extensión PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copia los archivos de la app al docroot de Apache
COPY . /var/www/html