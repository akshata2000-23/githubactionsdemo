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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'LK1q!O@4`7}$~7m;?SZiSVO]Hxg<!qj8 AR-_([ZazWa<wg;%GXacDj{wWY`28B6' );
define( 'SECURE_AUTH_KEY',  '%g% b.ZQTG>bSlw=VLvwc`o2vPh+S-t7%2ehjFJfJd9x5+cO>Zps{rBPNI&ktppK' );
define( 'LOGGED_IN_KEY',    'IO%v6{y0@d&.BF>xxPZ]c_?8%4$cL]ozYK,SaLv([WhL}<IJM,PsxmGnW_mhwsVm' );
define( 'NONCE_KEY',        'q-sG<NnK-[9X5E 1EeYEAqj1/nBs?7 /7K]JvHZ!I]DV4`4qV0CAtl&Bg314?}jJ' );
define( 'AUTH_SALT',        'vf4;uT:_Q<>uc4SZ6!<!?X{pwf,:3eCPEpr7TxJ@r8M#a)fxK,6jE`.;(<Gf&S$H' );
define( 'SECURE_AUTH_SALT', '@s?_p=&LkE_!5D*39JXf2^7lUAi541&0^?U5_Po*,2)!HU&f@FegQdpB[qDG&~hc' );
define( 'LOGGED_IN_SALT',   'nKB^lFwcNi$l_WSlR*u*hAX=34s5$C~d` Zfe;e> #|cL&v]uS$VyA!wv{Jm( /?' );
define( 'NONCE_SALT',       'e$y>T$ta(/K&bKN=3|1(m/Q/%[j1[=nW[z=XD/M1E*%)~N%.p8|7<jLpPR4ht!Lb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
