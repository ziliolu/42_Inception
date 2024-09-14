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
define( 'AUTH_KEY',          'JktFFjjywNN_8N*Gp{d^L>H,|/Ko)<M1p>DcS3rrEU?z>FXg=<uH1n<-~SAN=/TZ' );
define( 'SECURE_AUTH_KEY',   'TnE!{|uK18Ec3>})B|KHILyRB@14h*%8eC=;}(~z}Oy.**Bb?e`ow9%cxJO75|i;' );
define( 'LOGGED_IN_KEY',     'P(Zvp$H9~`k>v.o$=5mMK,yY L?[_gh NOP&28.-0A22L%aP/i@B M?A@DxSU,tA' );
define( 'NONCE_KEY',         '2/i<wCn-dhsu>&K^}Tt2rxzj=#):NMpL8zU4@JZx>=pz-EVs>hCc{c7_N-d<HXE6' );
define( 'AUTH_SALT',         'rwjsr,!+yKx-U=|9}l#Db#`#iL] |]|Ru4H ?0$/0)nbujN:9{3qqAun%.KvK1dy' );
define( 'SECURE_AUTH_SALT',  '=L]!iM8aWoc:]thdrLgz/`m{5}B5R}jG2bAk;n.-{W-R8kFNFtaZC:*]yNJuo}2q' );
define( 'LOGGED_IN_SALT',    'xE/MlC*e_H?}i;y@)B-Y;BrKN0?ZMt&Q3 Bh2u<G<#| )Img%Swg4)xoY*>H1DO[' );
define( 'NONCE_SALT',        'EwYk7jiPGtAz65&(8p.{LwY@UJ1gCXS@E@q9OEt[X:_}RBU?F! |QhR|]w2S3myT' );
define( 'WP_CACHE_KEY_SALT', '_J-<YJDa+:&KC[W0Y+ZEiqkL!BYOx2,S:?1rAB/El:9=Vs0s=& M<bc`DP8Tndso' );


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
