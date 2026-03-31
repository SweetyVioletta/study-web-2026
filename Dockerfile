FROM php:8.5-fpm

# Устанавливаем расширения для работы с MySQL
RUN docker-php-ext-install pdo pdo_mysql
# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY ./code /var/www/html

CMD ["php-fpm"]
