<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
* * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE'));

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RVh{UpL;#BkG| iF{%jAY-o>#jc/h9%5^jex+c_J1>)?Nx4MR~QXn9}hDib#7?7S');
define('SECURE_AUTH_KEY',  'r^-S]w+;+<-J>Kl q-TzDzl|^0WDo,>+Yjn6~9Z}+pyvUO,V-eiMuB;{GO!2|xR?');
define('LOGGED_IN_KEY',    '35Q1iiPs zWQ_OXzVX_`;4YMH>KB. ITe{})o|h2g@:`UFeY*1-v-rK8i,~m(]S[');
define('NONCE_KEY',        'L5%Sk PQ*wtmQU.Ub5gHd;d<l/Co1.#9Xvq~xgPgRsF+9 6A;]t,]qU~WJ[-*<qH');
define('AUTH_SALT',        '`jD.1T{}>EAN55WqcV0PuRs0#|ZC@|<IU<QS+pm.cd;xL~6=Yc#ra~d@;,4BtY*1');
define('SECURE_AUTH_SALT', 'X+M|7U4k4h0pG-NWZR;jzo3A!mmH?_fNrs md5|m?Nv?j1JOW-4A#lz4 +v <jV%');
define('LOGGED_IN_SALT',   '/jFNk5AQJd[>}}f+~6.Mh3X9NK[Kqv4+B6|1JbM.WMe@`ewW.4v%^Q@ia=:G|sen');
define('NONCE_SALT',       '2l$5Pf`FUWWrQ[n.{,0?KvaM5by8Br}_5_ur3rR8?m?Z(>n+D@>bK`,KNnq@kMbt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
