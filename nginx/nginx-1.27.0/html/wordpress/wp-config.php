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
define( 'DB_NAME', 'wp_ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'l?I9U*v6{k=D7LSH;,7V&,pvNcT?)NZc,{H?ii5A}B<h5%HMr82-$DNrOv*nA^.#' );
define( 'SECURE_AUTH_KEY',  'F;`tj (y{t/f<0iA?pU~b#10DzzRT;YuV@!od~k^&x{G4_- 3|}kTgCy%_wy!{m.' );
define( 'LOGGED_IN_KEY',    '_02e~Jl_s6b(>v<]f<yD`Pc#4^>~8vB[5RD>LVA9.[2g9qt[}__$F++E:Nm4N8Y/' );
define( 'NONCE_KEY',        ';$T*UgSxL<e.B ~l17%xe*O4%?[vx0K9Uvw0dr|[&bBnY0J/Vw}&cn)x(1Zlhcat' );
define( 'AUTH_SALT',        'LspFCsX[]I)-Y-w.Am1`cd~a&%G</>GZ{gF%s[BxK_7o Wdrp!JVTN:T_:LdCuAp' );
define( 'SECURE_AUTH_SALT', 'NG26Sqcr<yN*1`$$#:.)+11Ei&LQJt>Vpa;@}ci#U)/UGuDOXK q)?@,142r5oJ1' );
define( 'LOGGED_IN_SALT',   'Z=1YEoq5_y=e3AfMB$)ZOR5H}9 HG:]c4(l`zMN=]7pJ#x%iLAqk wzp]j37kPKI' );
define( 'NONCE_SALT',       'B9t7U.>sf+,en[*B7ob0eMqQ-</BxSQ=|GB#:Tn:u,WQcov0fv~uDq^jyQG#|~L`' );

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
