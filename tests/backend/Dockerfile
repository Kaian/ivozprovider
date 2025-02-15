FROM debian:bookworm

LABEL MAINTAINER="Ivan Alonso <kaian@irontec.com>"

RUN echo 'deb [trusted=yes] http://packages.irontec.com/debian tempest main extra' >> /etc/apt/sources.list

# Generic environment configuration
ENV DEBIAN_FRONTEND=noninteractive

# Install packages and clean up
RUN apt update \
    && apt install --no-install-recommends --assume-yes \
        gettext \
        composer \
        make \
        git \
        golang \
        unzip \
        curl \
        wget \
        sqlite3 \
        sphinx-intl \
        nodejs \
        mysql-client \
        python3-pip \
        php \
        php-cli \
        php-mysql \
        php-xml \
        php-gd \
        php-mbstring \
        php-sqlite3 \
        php-redis \
        php-igbinary \
        php-curl \
        php-yaml \
        php-mailparse \
        php-imagick \
        php-xdebug \
        php-zip \
        localepurge \
    && npm install -g swagger-cli \
    && pip install --break-system-packages reformat-gherkin \
    && sed -i 's/variables_order = "GPCS"/variables_order = "EGPCS"/g' /etc/php/8.2/cli/php.ini \
    && apt clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && localepurge

WORKDIR /opt/irontec/ivozprovider/
