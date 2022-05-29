#!/bin/sh

if [ -e /tmp/wp-config.php ]; then
	mv wordpress/* /var/www/wordpress
	echo "** creating wp-config file"
	rm /var/www/wordpress/wp-config-sample.php
	mv /tmp/wp-config.php /var/www/wordpress/
	rm -f /tmp/wp-config.php
fi

exec "$@"
