FROM php:7.4

RUN apt-get update -y && \
    apt-get install default-mysql-client nodejs npm git unzip -y && \
    docker-php-ext-install pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app
