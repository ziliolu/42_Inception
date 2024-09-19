<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '7m$lW)^Pdf9@o;}*lSr1B;~^}YRoK)@R#lF!G0PHuw[z^Ls@B{;121$8>[zr&v H' );
define( 'SECURE_AUTH_KEY',   'uo=B8pu67#TZ5f^4:sC5zXRXo& >yeCc)j0*@qXM_Wo1~Oan)j$j5VFk!0Bp6$U6' );
define( 'LOGGED_IN_KEY',     'KBkAO8l;_l$+|r@M:t,Ns={>e2y <H,xitr)E<ZEk-zf[8D5Y*QojOVyvU$8u:b#' );
define( 'NONCE_KEY',         '*. ][Ey{Zg,;PS(3U_))TSN}M cRK@h@^v`@:E%1}ycR+|b[/ry8_/S|aSW1%Na:' );
define( 'AUTH_SALT',         '~@N4To@gfP<m5L>?]_@=FHbOeY[<3D`7Bh3D1`f+Z+c5LE$)9H=,k|GMp@M{W?$9' );
define( 'SECURE_AUTH_SALT',  '#nYJd55RbOq% n5$&U] hyhE5q;2JWs_~oH`;oedvE~v!Foba=n+FbKYu<$S !o(' );
define( 'LOGGED_IN_SALT',    'F7YSmIsy=2~c~zE;/^.+}??HR*a@1R-<yA4hBGA1wvxi1dJ&GG+=BoaqRBoPAph;' );
define( 'NONCE_SALT',        '.nQ=&/a0KP1EzA:??_L:c10KUWNC<:M}[OD?jWbl^D$Ej}-Ktn(A~YKi7/QPD5T|' );
define( 'WP_CACHE_KEY_SALT', 'Oy8cfW.-B{5KxDy&#>!P;.8B<MW&jHo.Ms&rBs-p.a?R{s#]J8nGDD+!McFrowjI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
