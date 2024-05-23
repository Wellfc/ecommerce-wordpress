<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9GsB2}7kTyuYx*x=]fK,:QdN`*a|Z--$yf>@2c3sy=n;2TXWqAMs9NIzlxeLs[(_' );
define( 'SECURE_AUTH_KEY',  'L<~3!O)v3u?03g8_.inC1iU=Uxnj(9eWdH&?][b1|j22dAa)*VHDOl1:19)IL!(^' );
define( 'LOGGED_IN_KEY',    '}6{}Dh;;^oLMLPp$-K,?xXCuD@Q>0:O-m;ZiG&F;[Qi[BiEESViD|Kn(/?F77 |{' );
define( 'NONCE_KEY',        'nxx`d6S$g3&(u}(=#4m6dW`xqo3@:3#5v@r?-X>uZxlb?Mk7> NDkYP?Z:A[<[BP' );
define( 'AUTH_SALT',        'iV7CMyJ5g`xE``U]oAw3aef1)*T$jAUqWLog{8/7FjwA2qqjVCk,4=4I`=L;skwC' );
define( 'SECURE_AUTH_SALT', '1/FjKri=f@;Sh*Hq-d(+~c4[DY6Fq!Yn!?Yb|o=_&iCV|%GA9e+zpTI[OVFVQd]n' );
define( 'LOGGED_IN_SALT',   '3/x8W`CWA~450C~1?7hL-WxYT*g%}Uzlp8VL<~76cHU[6,QZ2O&;,X&lKyBV2FPS' );
define( 'NONCE_SALT',       '[c,TEi98Nl/!+_rCDlL {vtf%Hrl[hIvf_d]b`#f dI~pWrzm>8&x+J8G@v2|6,N' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
