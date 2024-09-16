FROM debian:12.7-slim

RUN apt update && apt upgrade -y && apt install -y mariadb-server 

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql
COPY script.sh .

RUN mkdir /run/mysqld && chmod +x script.sh && chmod 777 /run/mysqld

CMD ["./script.sh"]