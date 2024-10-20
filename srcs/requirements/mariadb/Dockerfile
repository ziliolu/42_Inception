FROM debian:bullseye

RUN apt update && apt upgrade -y && apt install -y mariadb-server 

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY ./tools/init.sql /etc/mysql/init.sql
COPY ./tools/script.sh /etc/mysql/script.sh

RUN mkdir /run/mysqld
RUN chmod +x /etc/mysql/script.sh

CMD ["/etc/mysql/script.sh"]