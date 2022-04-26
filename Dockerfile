FROM php:latest

RUN apt -y update
RUN apt -y install curl

RUN apt install zip -y
RUN apt install git -y

RUN pecl install redis-5.3.7 \
    && pecl install xdebug-3.1.4 \
    && docker-php-ext-enable redis xdebug


RUN mkdir /phpcs
WORKDIR /phpcs
RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar
RUN curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcbf.phar
RUN chmod a+x phpcs.phar
RUN chmod a+x phpcbf.phar
