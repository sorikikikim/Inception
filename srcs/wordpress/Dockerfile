FROM debian:buster

RUN apt-get update && apt-get install -y \
	php7.3 \
	php-fpm \
	php-cli \
	wget \
	curl \
	php-mysql \
	php-mbstring \
	php-xml \
	sendmail \
	mariadb-client \
	&& rm -rf /var/lib/apt/lists/* \
	&& mkdir /run/php


RUN wget https://wordpress.org/wordpress-5.8.3.tar.gz \
	&& tar -xvzf wordpress-5.8.3.tar.gz \
	&& rm -rf wordpress-5.8.3.tar.gz

RUN mkdir /var/www && \
	mv /wordpress /var/www/ && \
	chmod 777 /var/www/wordpress && \
	chown -R www-data:www-data /var/www/wordpress/* && \
	rm /var/www/wordpress/wp-config-sample.php

COPY ./www.conf /etc/php/7.3/fpm/pool.d
COPY ./wp-config.php ./var/www/wordpress/

EXPOSE 9000

CMD ./usr/sbin/php-fpm7.3 -F