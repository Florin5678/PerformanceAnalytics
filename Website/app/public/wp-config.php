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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'j Z#1CEoFm9iX%::slo4MK:=!ow6>EM`9zs3l3gt<Y@I98&6)B}>1kh0^j|nJ+Al' );
define( 'SECURE_AUTH_KEY',   '+1N+~Z5FO#5=?a?2.8U$$/ut]P(Xz;Mg~&w02kXG.)<ncfG.h*JOY&2d5h|;&kwc' );
define( 'LOGGED_IN_KEY',     '$i.qY7.8Rmvb5miV%_Om>d?(tn3tXe<s4B<:aZ9vySRp#xe<CXdkw])h7~Qo/kAf' );
define( 'NONCE_KEY',         'v+?J,S]L{g*[74A~Q>}eE<O34Uu|a<OEL(9R)#k9D_ M?*+}l~%exxAO&(aZQ z^' );
define( 'AUTH_SALT',         'M|U3j;{)Q!Iw-Xi1[Dj}jlLegm&4R_,}<M#}x4guZl@=iJfdF8Z+6{(Pw8IVn#Y=' );
define( 'SECURE_AUTH_SALT',  'R`O!xDe!BI4:r3m=l66Cl.LqIEfhn/MMq?} mE#T/wk,3P!3hS%rMr*@.}qR~O#h' );
define( 'LOGGED_IN_SALT',    'HskKJ,P!Iy$P)]B,Lw>b+T_v(Ws72e%Ry`Px_btQ8}]A0,]$K:T=)/G@3Bcn|)a`' );
define( 'NONCE_SALT',        '<6|5|]/qK+gn/,o?%eo&|p2+{tbP,:UF<9XDu11id5t;0t]I<#vc@jRb,$k^Mh%L' );
define( 'WP_CACHE_KEY_SALT', 'USo E!wxZx(&:P@bk.C>W%.1/pG,%A ,_`ta`js%gu./jp%M|HH*`<Qz~MS4s5G6' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
