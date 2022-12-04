# syntax=docker/dockerfile:1

ARG PHP_EXT_INSTALLER_VERSION=1.5.41
ARG PHP_VERSION=

FROM mlocati/php-extension-installer:${PHP_EXT_INSTALLER_VERSION} AS ext_installer

FROM php:${PHP_VERSION}

ARG COMPOSER_VERSION=2.4.4

COPY --from=ext_installer /usr/bin/install-php-extensions /usr/bin/

RUN /usr/bin/install-php-extensions @composer-${COMPOSER_VERSION} opcache pdo_sqlite

RUN apt update \
    && apt install -y --no-install-recommends unzip zip \
    && apt-get -y clean \
    && rm -rf /var/lib/apt/lists/*

VOLUME [ "/var/www/application" ]

WORKDIR /var/www/application
