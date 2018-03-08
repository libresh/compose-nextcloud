FROM nextcloud:13-fpm
COPY /config/mail.config.php /usr/src/nextcloud/config/
