FROM php:8.5-fpm

# Устанавливаем расширения для работы с MySQL
RUN docker-php-ext-install pdo pdo_mysql
# Устанавливаем zip и unzip
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*
# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY ./code /var/www/html

CMD ["php-fpm"]
