FROM debian:12.7-slim

RUN apt update && apt -y upgrade && apt install -y \
nginx \
openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/C=PT/L=Porto/O=42/OU=student/CN=lpicoli-.42.fr"

COPY default /etc/nginx/sites-available/.

# Expose port 443 for HTTPS
EXPOSE 443 

CMD [ "nginx", "-g", "daemon off;" ]