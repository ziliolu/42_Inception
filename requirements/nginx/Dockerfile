FROM debian:12.7-slim

RUN apt update && apt -y upgrade && apt install -y nginx

COPY default /etc/nginx/sites-available/.
CMD [ "nginx", "-g", "daemon off;" ]