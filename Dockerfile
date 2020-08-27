FROM debian:buster

#LEMP
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get install -y \
    nginx vim \
    wget \
    mariadb-server \
    php-fpm php-mysql \
    openssl

#Creating && managing working directory
RUN mkdir /var/www/localhost && \
    chown -R www-data:www-data /var/www/localhost
#chown -R $USER:$USER /var/www/localhost

WORKDIR /var/www/localhost

#Adding wp and phpadmin
RUN wget https://wordpress.org/latest.tar.gz && \
    tar -xzvf latest.tar.gz && \
    wget https://files.phpmyadmin.net/phpMyAdmin/4.9.5/phpMyAdmin-4.9.5-all-languages.tar.gz && \
    tar -xzvf phpMyAdmin-4.9.5-all-languages.tar.gz && \
    rm latest.tar.gz phpMyAdmin-4.9.5-all-languages.tar.gz && \
    mv phpMyAdmin-4.9.5-all-languages phpmyadmin

#Copying stuff
COPY srcs/ .
COPY srcs/mysite.localhost.crt /etc/ssl/certs/
COPY srcs/device.key /etc/ssl/private/
COPY srcs/wp-config.php /var/www/localhost/wordpress
COPY srcs/config.inc.php /var/www/localhost/phpmyadmin

#Adding nginx config
RUN rm /etc/nginx/sites-enabled/default && \
    mv localhost.conf /etc/nginx/sites-available/ && \
    ln -s /etc/nginx/sites-available/localhost.conf /etc/nginx/sites-enabled/

#Ports
EXPOSE 80 443

CMD ["bash", "start.sh"]