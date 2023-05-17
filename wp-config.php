<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'santapaulina' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ',7HfLx?oFzC8]z53&.r@Z/buWO<g+$Q]!AWPWJ2@2ur(Hbm2-36Tg,Dr*M oyaK<' );
define( 'SECURE_AUTH_KEY',  '0?=XJ?S+$hB/D85HMQe>/M07);tSv5>T-_ f];/j;x0^a9d+UIq`f&Ba2ww<L1:?' );
define( 'LOGGED_IN_KEY',    '[`_rf%xCw~ejR<]st; ?YQOY;,6zZp+3_e2B5iKo9+BO?]s%5/t<BZ[@oydtx<&u' );
define( 'NONCE_KEY',        '{wzHL5i!nsoe*nK~GH*KfiU]RW[klmKb3]aUcavp?l>//QrTOJk%TOnvY?$&O~e~' );
define( 'AUTH_SALT',        '-!$-<(r<6%6)~x:@f g[[aXA|nEe6:|NVg`G@*8SXC5aEnD-H5oR$6IPBCMA~ +D' );
define( 'SECURE_AUTH_SALT', 'pl549]Q5T4}</;>5wt`9j9rK :IIu.swH V* ?$d&hjRY)teFC0l-,W~O;crU]?T' );
define( 'LOGGED_IN_SALT',   'OX<U-[oayqAg#xU~7)1ByKM <TcDK);9S69x yh{LIw{[:N4HBFu~@:sSU,{zc5y' );
define( 'NONCE_SALT',       'tfen9f51_Knej?u7^+Zy-+^mGtF 5M?hi:`I#+ug4ILdCN:dPI]4R8bD<nJ->o*C' );

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
