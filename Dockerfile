FROM chajr/php56-nginx-extended:latest

RUN rm /var/www/html/index.php

COPY --chown=nginx:nginx ./source /var/www/html
COPY --chown=nginx:nginx ./conf/wataha.conf /etc/nginx/conf.d/default.conf

HEALTHCHECK --interval=20s --timeout=5s CMD curl -f http://127.0.0.1/forum/index.php || exit 1