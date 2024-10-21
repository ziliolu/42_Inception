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

ARG COUNTRY 
ARG CITY 
ARG ORGANIZATION 
ARG ORG_UNIT 
ARG DOMAIN_NAME


COPY ./conf/default /etc/nginx/sites-available/.
COPY ./tools/script.sh .

RUN chmod +x script.sh

CMD ["./script.sh"]

