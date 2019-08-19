FROM ambientum/php:7.3-nginx
LABEL maintainer="guilhermemazur@lets.com.vc"
RUN sudo apk upgrade --update && sudo apk add --update \
     libpng-dev bash

RUN sudo apk upgrade --update && sudo apk add \
         freetype-dev \
        libjpeg-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        g++ \
        make \
        bash \
        zlib-dev \
        wget \
        curl \
        libxrender \
        autoconf \
        automake \
        libtool \
        nasm \
        nodejs \
        nodejs-npm

RUN sudo sed -i -e 's/^memory_limit = .*$/memory_limit = 512M/g' /etc/php7/php.ini;

RUN sudo apk add --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/community gnu-libiconv
ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php
