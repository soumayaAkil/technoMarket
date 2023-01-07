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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'technoMarket' );

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
define( 'AUTH_KEY',         '.,?6KaMf+RiY6$46f^$xH(gTY9;84w5iQf8.e/E8G}uHJ_kHkjToXx[?QFdMuhHh' );
define( 'SECURE_AUTH_KEY',  '-L^ExO<T-8tB,?*#xifb?m/>NjppQ[?1y`k`c`Ca5rIe6Q0g^D)a:~~;T+?3HqN^' );
define( 'LOGGED_IN_KEY',    'M, ut6hie3)0z6}dch!#ubs]TVF,O{hQ?nf`vX=<GFWmGj 2%4l)e8IyotJ.r S4' );
define( 'NONCE_KEY',        'r)EGD0XyBu+pX*4#oJ0qb;=Kq$w0@N7^6C!X}e*nCi7I5wbrjY(w72_Pak#pS$+8' );
define( 'AUTH_SALT',        'Yt ?(QNQ  G76n!)(ErI46r$*zXc+*4Z_/G4_{OJHc6pHKaV^v{]_((r`U%[{GKk' );
define( 'SECURE_AUTH_SALT', '{Y[h}rUpZ1$].(Lb9-Zm[syDe=:-$M6+%:1oQV770<eR:@rFBCS(=tadKXhRTq0r' );
define( 'LOGGED_IN_SALT',   '[UZI!#@r;-57*Lub*&.@F[kfH*WP]tC8mi[Dx_Ex.OOF,OXy;qOT+gka@(L/3ING' );
define( 'NONCE_SALT',       '~k#Neo#*1~cG[82pKB~uXCPuvWTpcM,? bi4N *-CpnS/P +X5TPJ}9q2TFa44DG' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
