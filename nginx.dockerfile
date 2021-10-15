FROM nginx:stable-alpine

ARG NGINXGROUP
ARG NGINXUSER

ENV NGINXGROUP=${NGINXGROUP}
ENV NGINXUSER=${NGINXUSER}

ADD ./nginx/default.conf /etc/nginx/conf.d/

RUN adduser -g ${NGINXGROUP} -s /bin/sh -D ${NGINXUSER}; exit 0

RUN mkdir -p /var/www/html

RUN chown -R 1000:1000 /var/www/html

WORKDIR /var/www/html/crystalbridge

RUN sed -i "s/user www-data/user ${NGINXUSER}/g" /etc/nginx/nginx.conf
