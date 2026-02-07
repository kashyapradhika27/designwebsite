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
define( 'AUTH_KEY',          ',N:PsX1@*RO!{:DEaQ$`J8&2XDcg%j)%)Imq03J->D<ztP0-`]:-Ai[;2(a4h~6O' );
define( 'SECURE_AUTH_KEY',   '(G=06PG)FN>c[K4zAFn7|]-f:*EOv[=)&kI{gysn$jF3-j*;f&3L!;L~w)CXNQ@v' );
define( 'LOGGED_IN_KEY',     'd-p!f(zJCTB=Qf)X=?^!.4IP>^GHg Jc*pr&+S+7Tz60H+j3PHqVvzG4WJk}h4:!' );
define( 'NONCE_KEY',         'C.XI_XyrmVYxld9^xqR:h5yILR9!gq}t#-tw{RDgNoH3]>(Orqn$fSuK,r;-q{DM' );
define( 'AUTH_SALT',         '}`Ld0^gs4DsQ$q2r{Ngt5Io|pF^pL[Se[2U1ptN$,Pu`vjH/eAe$dELAir`XM5>X' );
define( 'SECURE_AUTH_SALT',  '$Z/Xo?4YhB*mt@A4fS?gEtX6}e%Z*w*q;8yEX!5nV_tG8(%zJ+8YM,zcy4>j):5O' );
define( 'LOGGED_IN_SALT',    '}Y{6GB34pNzl$:ebT=QZZdoYYmx@,J#a$ja~V{bjVBT <M}hh&:2UXktdif6!P<n' );
define( 'NONCE_SALT',        '~B:v1@7|zUOQ#r/o,/.|bZ282YA}X6|$|F#H0+IR,yL%B__pbgOrMdxW-!d%y!>T' );
define( 'WP_CACHE_KEY_SALT', 'fW%HqgDgziyh8v}D|$ ={+;)-$[&_|Wh[bqFS[SVu2z_WM,S)_Q@AlVV1&3cBok&' );


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
