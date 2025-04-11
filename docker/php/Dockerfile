FROM php:8.3.0-fpm
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends libffi-dev; \
    rm -rf /var/lib/apt/lists/*; \
    docker-php-ext-install ffi