FROM php:8.0.21RC1-fpm-alpine3.16
WORKDIR /app

RUN apk --update upgrade \
    && apk add --no-cache autoconf automake make gcc g++ icu-dev \
    && pecl install xdebug \
    && docker-php-ext-install -j$(nproc) \
        bcmath \
        opcache \
        intl

COPY docker/php-fpm/ /usr/local/etc/php/
COPY . /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
CMD ["/usr/local/sbin/php-fpm", "-O" ]
