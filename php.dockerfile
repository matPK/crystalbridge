FROM php:7.4-fpm-alpine

ARG PHPGROUP
ARG PHPUSER

ENV PHPGROUP=${PHPGROUP}
ENV PHPUSER=${PHPUSER}

RUN adduser -g ${PHPGROUP} -s /bin/sh -D ${PHPUSER}; exit 0
RUN deluser www-data && adduser -DH -h /home/www-data -s /sbin/nologin -u 1000 www-data

RUN mkdir -p /var/www/html

RUN chown -R ${PHPUSER}:${PHPGROUP} /var/www/html

WORKDIR /var/www/html/crystalbridge

RUN sed -i "s/user = www-data/user = ${PHPUSER}/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = ${PHPGROUP}/g" /usr/local/etc/php-fpm.d/www.conf

# Install dev dependencies
RUN apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    curl-dev \
    imagemagick-dev \
    libtool \
    libxml2-dev

# Install production dependencies
RUN apk add --no-cache \
    bash \
    curl \
    freetype-dev \
    g++ \
    gcc \
    git \
    icu-dev \
    icu-libs \
    imagemagick \
    libc-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    make \
    mysql-client \
    nodejs \
    npm \
    oniguruma-dev \
    yarn \
    openssh-client \
    rsync \
    zlib-dev

# Install PECL and PEAR extensions
RUN pecl install \
    imagick \
    xdebug-3.0.1

# Enable PECL and PEAR extensions
RUN docker-php-ext-enable \
    imagick \
    xdebug

RUN { \
    echo "[xdebug]"; \
    echo "zend_extension=$(find /usr/local/lib/php/extensions -name xdebug.so)"; \
    echo "xdebug.mode=debug"; \
    echo "xdebug.start_with_request=yes"; \
    echo "xdebug.client_host=host.docker.internal"; \
    echo "xdebug.discover_client_host=1"; \
} >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini;

# Configure php extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

# Install php extensions
RUN docker-php-ext-install \
    bcmath \
    calendar \
    curl \
    exif \
    gd \
    iconv \
    intl \
    mbstring \
    pdo \
    pdo_mysql \
    pcntl \
    soap \
    tokenizer \
    xml \
    zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]
