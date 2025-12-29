FROM php:8.2-apache

# Enable SQLite support (safe for Render)
RUN apt-get update && apt-get install -y sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo_sqlite

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

