FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    pkg-config \
    unzip \
    curl \
    git \
    && docker-php-ext-install pdo pdo_sqlite


WORKDIR /usr/src/app


COPY . .


CMD ["php", "-S", "0.0.0.0:3000", "-t", "."]

