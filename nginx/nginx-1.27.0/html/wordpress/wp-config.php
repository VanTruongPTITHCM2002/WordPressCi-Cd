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
define( 'DB_NAME', 'wp_emc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '7l9dPh kim73?~v3gF;x8_pPLkPEq!AzTkxeZB-k57z[cy&mb|FG}[UvpphxSDW|' );
define( 'SECURE_AUTH_KEY',  '{koU:lESvml|xAi?{ojL*uJ1e0^{Wumcf6Fj/K}#C6Wh[6o_PMDj+oUL;lvkrs t' );
define( 'LOGGED_IN_KEY',    'w;Ixp;O2wh[_?`x-U,SB n_-R!t}`%a-|,0km1.mxZ7d5hCm&Di?s3z*{Jk&$.P-' );
define( 'NONCE_KEY',        '~a2]=P)1E/wZ#j+(94:WCnl8 2#:yl;^gCSE?rf18 )4+VuE.hMIV8;Xsa}oTP7u' );
define( 'AUTH_SALT',        '6@c;x*!7Tum7U_rf6-EOw!3lG$4SWA7_]IN[@)$=+?-3eiQ ^-K%3;%yhlPo_1(a' );
define( 'SECURE_AUTH_SALT', 'v~0^_(;gcD0XOs/m0mrox<#A8}}1)`Jdgl@S}S<^#}e~#>S`m9Y7n.ho5l3kk)xK' );
define( 'LOGGED_IN_SALT',   '6 W7Zz,uF_6p^ vM8pZ$:Svnh%nkyI_EFVmRER&TsQ&xC3Ugj`@D8?bF5wZ_mmv:' );
define( 'NONCE_SALT',       'CnZ}A?r9}Asy%&j4sGBO[eX&DsH G3.1&n__Zu[>IGX8#+&8+206hZhsCU~.8*-u' );

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
