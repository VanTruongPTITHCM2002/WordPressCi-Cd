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
define( 'DB_NAME', 'ecommerceshop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'iA|oUCrG!rwcaAN+1kV9bHJt8/ML6yg? A1;?G~uQi#JunC}-P~w[32M1xF$!`=(' );
define( 'SECURE_AUTH_KEY',  ']f`zkuans8b;vsFf] i|lj%!Jy+R-r3a]Ml4v,,y>zNsZ{.sW0Q*6K|D$bCmr[+G' );
define( 'LOGGED_IN_KEY',    ',?:A&n6L5(yNpu %xa!p[aN5SthDkytr:{w%w[5tI_X+Z`DW%+VPB6f^R0g*kWsc' );
define( 'NONCE_KEY',        'Ll4j-s7($qm)/i B<AV=FQvo=eA+@FvEyf$[Qe)TwM6#TcJ?cScz|crbzOgW9_^v' );
define( 'AUTH_SALT',        '[$0KXarHnJUHmo0KIs?!*kL*3LaRZ%)ow,b]%<fkQ-#auFq/jnLj_,cO*> .iyyX' );
define( 'SECURE_AUTH_SALT', '_v8#UEr6bsBc>MND`73-[5p(Qh)p^ZpJm iv{t-jb!Qq?xchI!+bJv3u!,T=0p/a' );
define( 'LOGGED_IN_SALT',   '$^Act{x4byLoq,]kTfe)3&=yF]R~BE vPAIUQl@3y$4tzyo2T%{F=1I4;K|TjfdS' );
define( 'NONCE_SALT',       '[W2W fn=Q, $I=y22g>0jpk1n1%Hv|7I77qn$oO<w6iMXeA*Ire6.xokw{y+IC.2' );

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
