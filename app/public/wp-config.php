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
define( 'AUTH_KEY',          '9%*rOCVq5SZ!0OF?q!v3_D7(Z~!=O4Vt^hK$nGP_`!BcVr)fzF!-NQ$omdeFa^%{' );
define( 'SECURE_AUTH_KEY',   '.tm)XMzKPzdb^,3Z.81N]]q3{X{8E&.>`x|R.@m13BH^9jL86UC`#>e2kgI[^Sl/' );
define( 'LOGGED_IN_KEY',     '506>=|QF3Ur%b%;RzqHCL+K z|N. KNf9z<l4dDd/sL3TazBAy~2=//OurT&Eq:&' );
define( 'NONCE_KEY',         'r1[lfp.:a=:E0&&nLm@JRN5avYy7L!,}LD[t)%_+dN)@(,t /y5a7`TV.Q{&UWaS' );
define( 'AUTH_SALT',         'F}PH#Qq7s]pnsE7TAp!+7`gY%FCe8lI3v_4bjHg*>N;ns]$f =vbo:}R>YcznS.H' );
define( 'SECURE_AUTH_SALT',  '3^MWwAMBL$*%/h.E`B84il:AeYD0XOdZzJC SE:6`H @`s5`m|@8U9rfTO=xSbk#' );
define( 'LOGGED_IN_SALT',    '4^IBqz^sZY.Eih *oNy1hZhV1=<C*std@uE{-oQ52<xOS2(i;H*N+8c~2)g:jr_o' );
define( 'NONCE_SALT',        'JTM|=ynur?p!$0i U<,2a{SxG:affGLJxM9m_.`]VJ7Q(7Up&E|/z:3#.q0~U`!Y' );
define( 'WP_CACHE_KEY_SALT', 'eaZyBW^|QBRD7@~NpcZ>&P`{-}7Z-lSG[a_!wa,gHwW>9m@Z#HxhDRbFI4@E:a5i' );


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
