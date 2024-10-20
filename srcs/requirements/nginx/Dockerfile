FROM debian:bullseye

RUN apt update && apt -y upgrade && apt install -y \
nginx \
openssl

# Generate a self-signed SSL certificate using OpenSSL.
# - `-x509`: Create a self-signed certificate.
# - `-nodes`: No passphrase for the private key.
# - `-days 365`: Certificate is valid for 365 days.
# - `-newkey rsa:2048`: Generate a new RSA key of 2048 bits.
# - `-keyout`: Location to save the private key.
# - `-out`: Location to save the certificate.
# - `-subj`: Defines the certificate's subject (C=country, L=location, 
#            O=organization, OU=organizational unit, CN=common name).

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/nginx-selfsigned.key \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/C=${COUNTRY}/L=${CITY}/O=${ORGANIZATION}/OU=${ORG_UNIT}/CN=${DOMAIN_NAME}"

COPY ./conf/default /etc/nginx/sites-available/.

CMD [ "nginx", "-g", "daemon off;" ]

