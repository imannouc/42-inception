FROM alpine:3.15

RUN apk update && \
	apk add --no-cache mariadb  mariadb-client

RUN mkdir -p /run/mysqld && \
	chown -R mysql:mysql /run/mysqld /var/lib/mysql

RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

COPY ./conf/my.cnf /etc/
COPY ./tools/docker-entrypoint.sh /usr/local/bin/

EXPOSE 3306

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["/usr/bin/mysqld", "--user=mysql", "--init-file=/tmp/init"]
