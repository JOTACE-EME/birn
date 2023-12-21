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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'birnbd' );

/** Database username */
define( 'DB_USER', 'JCM' );

/** Database password */
define( 'DB_PASSWORD', '007' );

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
define( 'AUTH_KEY',         'Y-~cwxT#V3(XKL<Vq@DUpCcAIpCH<bmq+Z/yOrF9F0Yj3]k^i,/X3OxG#FXpE)Bj' );
define( 'SECURE_AUTH_KEY',  'SA%|8~|J|W]wm>-j|#p>f]RhG?)p|t(]Oy1>85bCYA]y;l{E2GA)pRW]V642{%lE' );
define( 'LOGGED_IN_KEY',    'stWih+K`vF{y~Cwd&mj5sx<D1!P$3[oSL/a$=X8IkXDIjPAk_P^xo&TIU~Y9szK;' );
define( 'NONCE_KEY',        'DQpk(-(6I)0DLtf6(LQ<<X7@:Tk$UJ3bp=~T|/#vW>nu1[`X<:~eZr:3bv9&pRz ' );
define( 'AUTH_SALT',        'nR8QXW1oYv(_JsSwWk+O]B3^#sw7NTdBb: ON;h_C9T^#-O(Ar`/7:u?2nM]C3zB' );
define( 'SECURE_AUTH_SALT', ']I1Ju 3#D|Dnm.oW^<IN7q$axFO;FF$_TkEWnA.6(NS@H1}**NDF1d@y9uo!{9N~' );
define( 'LOGGED_IN_SALT',   'eB5_Zh5ZZg:qgz_ mb}uBF}zaZkI4|@x6j#AaZK#SmLl76K}Xy0m#r^2a5-Xv@@,' );
define( 'NONCE_SALT',       'a)_;,S8bxA/f-51qY8i%3Sb$kSD>3FkEkg&P7=d14A`|swOsS4J5AXKh/1!)Y-?R' );

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
