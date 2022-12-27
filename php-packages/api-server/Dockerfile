# syntax=docker/dockerfile:1

ARG PHP_EXT_INSTALLER_VERSION=1.5.52
ARG PHP_VERSION=8.2.0-cli-buster

FROM mlocati/php-extension-installer:${PHP_EXT_INSTALLER_VERSION} AS ext_installer

FROM php:${PHP_VERSION}

ARG COMPOSER_VERSION=2.5.1
ARG PHP_EXTENSIONS="opcache pdo_sqlite"
ARG APT_PACKAGES="unzip"

COPY --from=ext_installer /usr/bin/install-php-extensions /usr/bin/

RUN /usr/bin/install-php-extensions @composer-${COMPOSER_VERSION} ${PHP_EXTENSIONS}

RUN apt update \
    && apt install -y --no-install-recommends ${APT_PACKAGES} \
    && apt-get -y clean \
    && rm -rf /var/lib/apt/lists/*

VOLUME [ "/var/www/app" ]

WORKDIR /var/www/app
