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
define( 'AUTH_KEY',          'Xhg+{$#Nqr#yZI?4}Kw7GAgTZ,h:GRgfAyYrpX2k-WalbsLFJngCHZEi!(P6E|X.' );
define( 'SECURE_AUTH_KEY',   ':E~#5RyUH xv8`U,*U}0c1D;@orb$P^]Ce=dV( B_[RGJrdc{}8)x)[xiZ~q+h93' );
define( 'LOGGED_IN_KEY',     '3WZ4T :}K4vllmx:nQj:da/mdRj%Z^KcDKQE5z%6xV})j~GS+.[L+ljmRu?wIR)f' );
define( 'NONCE_KEY',         'r#_@1)XQdC<R97&0]X?dbhi0az;lcyjnaTr<zvM4no^[g18^7GGupUn3LIt`Ix>w' );
define( 'AUTH_SALT',         'cmwLw,nhGJ#n9y[9vc}jtUWV!SWsa+2 @QT4{d*B?5[.OzO<E1&VrvC/TBndkc24' );
define( 'SECURE_AUTH_SALT',  '3!u&o3?b.1Dqk-_yM)Y&:e5(>EIrW7O_bvZj^ad6AYr/3f{}eQ}<?PAnydX59LLB' );
define( 'LOGGED_IN_SALT',    'M0^V_>|4B;iq6K7>OH~DwA#${]w_1l@%F82]sDDi->GJ)>hQ$t^k3yT_Z6vO4n*_' );
define( 'NONCE_SALT',        'w-2.+Q^qQ.m(kaA5._WLPdn%UG&saZOp1`)wn]rlc.FW?B|S?mv!>tx,)&%G~wNi' );
define( 'WP_CACHE_KEY_SALT', 'd|o3A|7DP}xg0mOB[ps,0~eCagdRYrg{HnP-D<]G=CVy9JC[]s}iNNsI61g^zU24' );


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
