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
define( 'DB_NAME', 'hellgate_db' );

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
define( 'AUTH_KEY',         'fu2g~n^u9 gV4lN&W}$x rAAN+z/%VS@=94^fKw01vgU9$/Q|6Htm-|=6Y0hxMMe' );
define( 'SECURE_AUTH_KEY',  '{s9Qh.9BzA7bg[K<2e76hxw%~J<Is}kCS*S!gZTW.K)-%+%g==C#Sv0-Byux$+_}' );
define( 'LOGGED_IN_KEY',    'DxKSORi3X%nN:-f._9DhwPV|.dvEV:>A(}!v_QdlZVD~@/}n!^Mi&-P2z[2JszoD' );
define( 'NONCE_KEY',        'ujluaFU[8J+$+L;R_<Lfi sE}tmi7UnBdq6*Z|.0,ZR-&.h1<jNu+]Hh+:W=r}0M' );
define( 'AUTH_SALT',        'Q7w]ruCocQqZ`kWeSY5~7l34a?fj*_O(!gckkY833F_cr2X06D?!-uX]#u!;8 D ' );
define( 'SECURE_AUTH_SALT', 'Q@y$vkf|zvp>l8Ajx4X9[sn#$Ck1pC}`^eY#4jc`P0K1*co9<v6*Y]Hn{4ppEMXV' );
define( 'LOGGED_IN_SALT',   'ERFEmU)0if1yI1 %oD%}/?U>Jz$=p BOt5;=FwYC9zc%?v9Yl.#6J;zv,/*{hQ%8' );
define( 'NONCE_SALT',       '<G8<iB<wWW8!@VGBEXq9#JN|,]Q&ODibmXhQUmkhE[4);Q+PJ@ W%:VbH){s/=|f' );

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
