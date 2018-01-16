FROM nextcloud:12-fpm
COPY /config/mail.config.php /usr/src/nextcloud/config/
